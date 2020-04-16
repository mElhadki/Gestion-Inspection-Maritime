<?php
require_once('Connection.php');
if(isset($_POST['Edit']))  
{ 
        $ID=$_GET['ID'];
        $Ref=$_POST['Ref'];
        $Country=$_POST['Country'];
        $Importer=$_POST['Importer'];
        $Exporter=$_POST['Exporter'];
        $Yard=$_POST['Yard']; 
        $Location=$_POST['Location'];  
        $ContainerN=$_POST['ContainerN'];
        $ShippingLine=$_POST['ShippingLine'];
        $BillOfLadingNo=$_POST['BillOfLadingNo'];
        $ScrapDescription=$_POST['ScrapDescription'];
        $DateS=$_POST['DateS'];
        $DateC=$_POST['DateC'];
        $TimeS=$_POST['TimeS'];
        $TimeC=$_POST['TimeC'];
        $Duration=$_POST['Duration'];
        $SealI=$_POST['SealI'];
        $SealF=$_POST['SealF'];
        $Quantity=$_POST['Quantity'];
        $BRLevel=$_POST['BRLevel'];
        $ContainerRLevel=$_POST['ContainerRLevel'];
        $PortOfDestination=$_POST['PortOfDestination'];
        $FinalDestination=$_POST['FinalDestination'];
        $Status=$_POST['Status'];
          
  $query="update ins
         set 
         Ref='".$Ref."' ,
         Country='".$Country."',
         Importer='".$Importer."',
         Exporter='".$Exporter."',
         Yard='".$Yard."',
         Location='".$Location."',
         ContainerN='".$ContainerN."',
         ShippingLine='".$ShippingLine."',
         BillOfLadingNo='".$BillOfLadingNo."',
         ScrapDescription='".$ScrapDescription."',
         DateS='".$DateS."',
         DateC='".$DateC."',
         TimeS='".$TimeS."',
         TimeC='".$TimeC."',
         Duration='".$Duration."',
         SealI='".$SealI."',
         SealF='".$SealF."',
         Quantity='".$Quantity."',
         BRLevel='".$BRLevel."',
         ContainerRLevel='".$ContainerRLevel."',
         PortOfDestination='".$PortOfDestination."',
         FinalDestination='".$FinalDestination."',
         Status='".$Status."'
         where ID='".$ID."'";
    
  $result=mysqli_query($con,$query); 
    if($result)
    {
        header("location:SearchTab.php");
    }
    
else{
    echo 'please check your query';
  }
}

else
{
    header("location:SearchTab.php");
}
    
?>