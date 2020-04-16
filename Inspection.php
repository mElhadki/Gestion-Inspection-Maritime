
<?php
require_once('Connection.php');

$Ref= $_POST['Ref'];  
$Country = $_POST['Country'];
$Importer = $_POST['Importer'];
$Exporter = $_POST['Exporter'];
$Yard = $_POST['Yard'];
$Location = $_POST['Location'];
$ContainerN = $_POST['ContainerN'];
$Status = $_POST['Status'];
$ShippingLine= $_POST['ShippingLine'];
$BillOfLadingNo = $_POST['BillOfLadingNo'];
$ScrapDescription = $_POST['ScrapDescription'];
$DateS = $_POST['DateS'];
$DateC = $_POST['DateC'];
$TimeS = $_POST['TimeS'];
$TimeC = $_POST['TimeC'];
$Duration = $_POST['Duration'];
$SealI = $_POST['SealI'];
$SealF = $_POST['SealF'];
$Quantity = $_POST['Quantity'];
$BRLevel = $_POST['BRLevel'];
$ContainerRLevel = $_POST['ContainerRLevel'];


if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);
                           }
 $sql = "INSERT INTO ins (Ref,Country,Importer,Exporter,Yard,Location,ContainerN,Status,ShippingLine,BillOfLadingNo,ScrapDescription,DateS,DateC,TimeS,TimeC,Duration,SealI,SealF,Quantity,BRLevel,ContainerRLevel)". "VALUES ('$Ref', '$Country', '$Importer', '$Exporter','$Yard','$Location','$ContainerN','$Status','$ShippingLine','$BillOfLadingNo','$ScrapDescription','$DateS','$DateC','$TimeS','$TimeC','$Duration','$SealI','$SealF','$Quantity','$BRLevel','$ContainerRLevel')";

if($con->query($sql) === TRUE){     

    header("location:ISP.php");
}
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
$con->close();
?>