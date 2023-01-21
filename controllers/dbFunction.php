<?php
require_once('../models/db.php'); 
include('script.php');

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
        $nani="nani";
        return $nani;

    }
    public function getcategory(){
        $stmt = $this->conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $num =$stmt->fetchAll();
        
        
        return var_dump($num);

    }
}


$hh=new crud();
$gg=$hh->getcategory();
echo $gg;


?>
