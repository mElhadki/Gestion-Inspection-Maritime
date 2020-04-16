<?php
require_once("Connection.php");
if(isset($_GET['Del']))
{
    $ID=$_GET['Del'];
    $query="delete from ins where ID='".$ID."'";
    $result=mysqli_query($con,$query);
    
    if($result){
    
        header("location:SearchTab.php");
   }
    else
    {
        echo 'please check your query';
    }
  
 } 
else 
{
    header("location:SearchTab.php");
}
?>