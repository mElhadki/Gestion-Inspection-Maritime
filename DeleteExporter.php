<?php
require_once("Connection.php");
if(isset($_GET['Del']))
{
    $ID_E=$_GET['Del'];
    $query="delete from Exporter where ID_E='".$ID_E."'";
    $result=mysqli_query($con,$query);
    
    if($result){
    
        header("location:ContainerView.php");
   }
    else
    {
        echo 'please check your query';
    }
  
 } 
else 
{
    header("location:ContainerView.php");
}
?>