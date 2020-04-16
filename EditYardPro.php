<?php
require_once('Connection.php');

if(isset($_POST['Edit']))  
{ 
        $ID_Y=$_GET['ID_Y'];
        $ICE=$_POST['ICE'];
        $Name=$_POST['Name'];
        $City=$_POST['City'];
        $Place=$_POST['Place'];
        
  $query="update yard set ICE='".$ICE."' , Name='".$Name."', City='".$City."', Place='".$Place."' where ID_Y='".$ID_Y."'";
    
  $result=mysqli_query($con,$query); 
    if($result)
    {
        header("location:YardView.php");
    }
    
else{
    echo 'please check your query';
  }
}

else
{
    header("location:YardView.php");
}
    
?>