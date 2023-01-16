<?php
include "db_info.php";
class connect_db{
    protected $conn;
function __construct($name=db_name,$password=db_password,$user=db_user,$host=db_host)
{
    try{
        $this->conn= new PDO("mysql:host=$host;dbname=$name",$user,$password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
      }    
}

}
$dd=new connect_db();

?>