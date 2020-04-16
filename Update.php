<?php
require_once('Connection.php');
if(isset($_POST['Edit']))  
{ 
        $ID_I=$_GET['ID_I'];
        $FirstName=$_POST['FirstName'];
        $LastName=$_POST['LastName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $Email=$_POST['Email'];
        
  $query="update inspector set FirstName='".$FirstName."' , LastName='".$LastName."', PhoneNumber='".$PhoneNumber."', Email='".$Email."' where ID_I='".$ID_I."'";
    
  $result=mysqli_query($con,$query); 
    if($result)
    {
        header("location:VInspector.php");
    }
    
else{
    echo 'please check your query';
  }
}

else
{
    header("location:VInspector.php");
}
    
?>