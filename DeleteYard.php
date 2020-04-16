<?php
require_once("Connection.php");
if(isset($_GET['Del']))
{
    $ID_Y=$_GET['Del'];
    $query="delete from yard where ID_Y='".$ID_Y."'";
    $result=mysqli_query($con,$query);
    
    if($result){
    
        header("location:YardView.php");
   }
    else
    {
        echo 'please check your query';
    }
  
 } 
else 
{
    header("location:YardView.php");
}
?>