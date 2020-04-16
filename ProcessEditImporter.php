<?php
require_once('Connection.php');
if(isset($_POST['Edit']))  
{ 
        $ID_IM=$_POST['ID_IM'];
        $ICE=$_POST['ICE'];
        $Name=$_POST['Name'];
        $City=$_POST['City'];
        $Place=$_POST['Place'];
             
  $query="update Importer set ICE='".$ICE."' ,Name='".$Name."', City='".$City."',Place='".$Place."' where ID_IM='".$ID_IM."'";
    
  $result=mysqli_query($con,$query); 
    if($result)     
    {
        header("location:ImporterView.php");
    }
    
else{
    echo 'please check your query';
  }
}
 
else
{
    header("location:ImporterView.php");
}
    
?>