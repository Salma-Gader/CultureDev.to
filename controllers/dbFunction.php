<?php
require_once('../models/db.php'); 
include('script.php');

// if (isset($_POST['name'], $_POST['email'], $_POST['password'])){ //checked if request have this paramettres type POST

//     $name = checkInput($_POST['name']);
//     $email = checkInput($_POST['email']);
//     $password = checkInput($_POST['password']);
//     //validation value of inputs 
//     if($name === "" || $name === null){
//         echo('Please Enter Name');
//     }else if ($email === "" || $email === null) {
//         echo('Please Enter email');
//     }else if ($password === "" || $password === null){
//         echo('Please Enter password');  
//     }
//     else {
//         $hash = sha1($password);
//         $checkEmail = mysqli_query("SELECT * FROM `Admin` WHERE email ='$email' "); 
//         if(mysqli_num_rows($checkEmail)>0){
//            echo("this email already exist");
            
//         }else{
//             $query = "INSERT INTO `Admin`VALUES (null,'$name','$email','$hash')";
//             if($result){
//                 echo('success');
//             }else die("error");
//         }
//      }
//  }
//  class register extends connect_db{
//     public $name2 = checkInput($_POST['name']);
//     public $email2 = checkInput($_POST['email']);
//     public $password2 = checkInput($_POST['password']);
//     public $pdo;
//     function register($name2=$this->$name2,$email2=$this->email2,$password2=$this->password2){
//         // if($1 === "" || $1 === null){
//         //     echo('Please Enter 1');
//         // }else if ($email === "" || $email === null) {
//         //     echo('Please Enter email');
//         // }else if ($password === "" || $password === null){
//         //     echo('Please Enter password');  
//         // } else {
//         //     $hash = sha1($password);
//         //     $checkEmail = $this->pdo->prepare("SELECT * FROM `Admin` WHERE email ='$email'"); 
//         //     $checkEmail->exec();
//         //     if(mysqli_num_rows($checkEmail)>0){
//         //        echo("this email already exist");
                
//             // }else{
//                 try{
//                     $stm = $this->pdo->prepare("INSERT INTO `users`VALUES (null,'$1','$email','$hash')");
//                     $stm->execute();
//                     echo('success');
//                 } catch (PDOException $e) {
//                     "Erreur" . $e->getMessage();
//                 }



//          }

//     }
//   }
//  };
// session_start();  
//     class dbFunction {  
//         public $pdo=new connect_db();
            
//         function __construct() {  
              
//             // connecting to database  
//             $db = new connect_db();;  
               
//         }  
//         // destructor  
//         function __destruct() {  
              
//         }  
//         public function UserRegister($username, $emailid, $password){  
//                 $password = md5($password);  
//                 $qr = $this->pdo->prepare("INSERT INTO users(username, emailid, password) values('".$username."','".$emailid."','".$password."')") or die("ERROR: Could not connect. ");  
//                 return $qr;  
               
//         }
//         public function Login($emailid, $password){  
//             $res = $this->pdo->prepare("SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".md5($password)."'");  
//             $user_data = mysql_fetch_array($res);  
//             //print_r($user_data);  
//             $no_rows = mysql_num_rows($res);  
              
//             if ($no_rows == 1)   
//             {  
           
//                 $_SESSION['login'] = true;  
//                 $_SESSION['uid'] = $user_data['id'];  
//                 $_SESSION['username'] = $user_data['username'];  
//                 $_SESSION['email'] = $user_data['emailid'];  
//                 return TRUE;  
//             }  
//             else  
//             {  
//                 return FALSE;  
//             }  
//         }  
//         public function isUserExist($emailid){  
//             $stmt = $this->pdo->prepare("SELECT * FROM users WHERE emailid = '".$emailid."'");  
//             $stmt->execute();
//             $rows = $stmt->fetchAll();  
//             if($rows > 0){  
//                 return true;  
//             } else {  
//                 return false;  
//             }  
//         } 
//     }
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
        } catch (PDOException $e) {
            echo 'Registration failed: ' . $e->getMessage();
            return false;
        }
    }
    public function signin($email,$password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("SELECT * FROM Admin WHERE email = :username AND password = :password");
        $stmt->bindParam(':username', $email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location : dashboard.php');
        return true;
        } else {
            echo 'faaaaaaaaaaaaaaaaaaaail';
        return false;
        }
    }
    
}
$cc =new dbFunction();
// if (isset($_POST['name'], $_POST['email'], $_POST['password'])){
    
// }
$ds=$cc->signin("jjk","fff",);;
 echo $ds;





// class Login extends connect_db{

//     public function signin($email,$password) {
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//         $stmt = $this->conn->prepare("SELECT * FROM Admin WHERE name = :username AND password = :password");
//         $stmt->bindParam(':username', $email);
//         $stmt->bindParam(':password', $hashed_password);
//         $stmt->execute();

//         $user = $stmt->fetch(PDO::FETCH_OBJ);

//         if($stmt->rowCount() > 0) {
//             session_start();
//             $_SESSION['user_id'] = $user->id;
//             $rr="dff";
//             return true;
//         } else {
//             return false;
//         }
//     }
// }
// $cc =new Login();
// $ds=$cc->signin("jjk","fff");;
//  echo $ds;


// class Login extends connect_db {
//     public function checkCredentials($username, $password) {
//       $stmt = $this->conn->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
//         $stmt->bindParam(':username', $email);
//         $stmt->bindParam(':password', $hashed_password);
//       $stmt->execute();
//       $result = $stmt->get_result();
//       if ($result->num_rows > 0) {
//         return true;
//       } else {
//         return false;
//       }
//     }
  
//     public function login($username, $password) {
//       if ($this->checkCredentials($username, $password)) {
//         $_SESSION['username'] = $username;
//         return true;
//       } else {
//         return false;
//       }
//     }
//   }

?>
