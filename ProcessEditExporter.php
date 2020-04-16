<?php
require_once('Connection.php');
if(isset($_POST['Edit']))  
{ 
        $ID_E=$_POST['ID_E'];
        $ICE=$_POST['ICE'];
        $Name=$_POST['Name'];
        $City=$_POST['City'];
        $Place=$_POST['Place'];
             
  $query="update exporter set ICE='".$ICE."' ,Name='".$Name."', City='".$City."',Place='".$Place."' where ID_E='".$ID_E."'";
    
  $result=mysqli_query($con,$query); 
    if($result)
    {
        header("location:ContainerView.php");
    }
    
else{
    echo 'please check your query';
  }
}

else
{
    header("location:ContainerView.php");
}
    
?>