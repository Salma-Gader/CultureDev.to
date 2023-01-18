<?php
include "db_info.php";
class connect_db{
    protected $conn;
function __construct($user = db_user, $password =db_password, $host = db_host, $dbname = db_name)
{
    try{
        $this->conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
      }   
}

}
// $dd=new connect_db();

?>