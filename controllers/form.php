<?php
include('../models/db.php');
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
 class register extends connect_db{
    public $name2 = checkInput($_POST['name']);
    public $email2 = checkInput($_POST['email']);
    public $password2 = checkInput($_POST['password']);
    public $pdo;
    function register($1=$this->12,$email=$this->email2,$password=$this->password2){
        if($1 === "" || $1 === null){
            echo('Please Enter 1');
        }else if ($email === "" || $email === null) {
            echo('Please Enter email');
        }else if ($password === "" || $password === null){
            echo('Please Enter password');  
        } else {
            $hash = sha1($password);
            $checkEmail = $this->pdo->prepare("SELECT * FROM `Admin` WHERE email ='$email'"); 
            $checkEmail->exec();
            if(mysqli_num_rows($checkEmail)>0){
               echo("this email already exist");
                
            }else{
                try{
                    $stm = $this->pdo->prepare("INSERT INTO `users`VALUES (null,'$1','$email','$hash')");
                    $stm->execute();
                    echo('success');
                } catch (PDOException $e) {
                    "Erreur" . $e->getMessage();
                }



         }

    }
  }
 };
?>