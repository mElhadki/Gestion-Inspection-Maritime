 <?php
require_once('Connection.php');
$FirstName= $_POST['FirstName'];  
$LastName = $_POST['LastName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];

if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);
                           }
 $sql = "INSERT INTO inspector (FirstName,LastName,PhoneNumber,Email)". "VALUES ('$FirstName', '$LastName', '$PhoneNumber', '$Email')";
if($con->query($sql) === TRUE){     

    header("location:Inspector2.php");
 }else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
$con->close();
?>