<?php
include('../models/db.php');
function checkInput($data){
    include('database.php');
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn,$data);
    return $data;
  }
?>