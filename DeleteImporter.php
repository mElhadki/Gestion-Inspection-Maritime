<?php
require_once("Connection.php");
if(isset($_GET['Del']))
{
    $ID_E=$_GET['Del'];
    $query="delete from Importer where ID_IM='".$ID_IM."'";
    $result=mysqli_query($con,$query);
    
    if($result){
    
        header("location:ImporterView.php");
   }
    else
    {
        echo 'please check your query';
    }
  
 } 
else 
{
    header("location:ImporterView.php");
}
?>