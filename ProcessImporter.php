<?php
require_once('Connection.php');
$ICE= $_POST['ICE'];  
$Name = $_POST['Name'];
$City = $_POST['City'];
$Place = $_POST['Place'];

if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);
                           }
 $sql = "INSERT INTO  Importer (ICE,Name,City,Place)". "VALUES ('$ICE', '$Name', '$City', '$Place')";
if($con->query($sql) === TRUE){     

    header("location:EX3.php");
 }else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
$con->close();
?>