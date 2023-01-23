<?php
require_once('../models/db.php'); 
include('script.php');
session_start();

class dbFunction extends connect_db{
    public function register($name, $email, $password) {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO Admin (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo 'Registration failed: ' . $e->getMessage();
            return false;
        }
    }
    public function signin($email,$password){
        $sql = "SELECT * FROM Admin WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $num = $stmt->rowCount();
            if ($num > 0){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if(password_verify($password, $row['password'])){
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['login'] = true;
                        header('location: dashboard.php');
                    }
                 else{
                    echo '<div class="alert alert-warning">
                    Wrong password
                </div>';
                }
            }
             else {
                echo '<div class="alert alert-warning">
                Email not found
            </div>';
            }

    }
}

class crud extends connect_db{
    public function addCategory($categoryName){
        $stmt = $this->conn->prepare("INSERT INTO category (name) VALUES (:name)");
        $stmt->bindParam(':name',$categoryName);
        $stmt->execute();
        header('Location:dashboard.php');

    }
    public function getcategory(){
        $stmt = $this->conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $num =$stmt->fetchAll(); 
        return $num;

    }
    public function deletCategory($id){
        $requet = "DELETE FROM category WHERE id=$id";
        $stmt = $this->conn->prepare($requet);
        $stmt->execute();
    }
    public function saveUpdet($name){
        $id=$_GET['editcategoryid'];
        $stmt = $this->conn->prepare("UPDATE category SET name = :name WHERE id = $id");
        $stmt->bindParam(':name',$name);
        $stmt->execute();
        // if(mysqli_query($conn, $query)){
        //   $_SESSION['message'] = "Task has been updated successfully !";
        //   header('location: dashboard.php');
        // }
      }
      public function addPost($postTitle,$postContent,$postCategory,$postImage){
        $adminId=$_SESSION['id'];
        $stmt = $this->conn->prepare("INSERT INTO articles (title,description,category_id,admin_id,image) VALUES (:title,:description,:category_id,:admin_id,:image)");
        $stmt->bindParam(':title',$postTitle);
        $stmt->bindParam(':description',$postContent);
        $stmt->bindParam(':category_id',$postCategory);
        $stmt->bindParam(':admin_id',$adminId);
        $stmt->bindParam(':image',$postImage);
        $stmt->execute();
        // header('Location:dashboard.php');

    }
}



?>
