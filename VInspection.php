<?php 
require_once('Connection.php');
$query="select * from ins";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inspection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Raleway:300);
@import url(https://fonts.googleapis.com/css?family=Lusitana:400,700);
.align-center {
  text-align: center;
}
html {
  height: 100%;
}
    body{
         background: -webkit-linear-gradient(left, #9DD7FA, #9DD7FA);
         background: linear-gradient(to right, #5FC0FA, #5FC0FA);
         font-family: 'Roboto', sans-serif;
         height: 70%;
         position: relative;
}
        .title {
  text-align: center;
  font-family: Raleway, sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 36px;
  line-height: 48px;
  padding-bottom: 48px;
}
        .th-l{
            font-size: 8px;
            text-align: center;
        }
        .th-la{
            margin-top: 20px;
            font-size: 20px;
            text-align: center;
        }

    </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#"><img class="logo" src="iamsp_logo.png" height="30"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="ISP.php">Inspection </a></li>
          <li><a href="Inspector2.php">Inspector  </a></li>
        <li><a href="Yard2.php"> Yard </a></li>
        <li><a href="Exporter2.php"> Exporter  </a></li>
       <li><a href="Importer2.php"> Importer  </a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="VInspection.php">Inspection View</a></li>
            <li><a href="VInspector.php">Inspector View</a></li>
            <li><a href="ContainerView.php">Exporter View</a></li>
            <li><a href="YardView.php">Yard View</a></li>
          </ul>
        </li>   
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="SignOff.php"><span class="glyphicon glyphicon-log-out"></span> 
Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container mb-3 mt-3">
        <h1 class="title">Inspection View</h1>
         <div class="container mb-3 mt-3">
    <table class="table table-striped table-bordered mydatatable" style="width:100%">
        <thead>
            <tr>
                                <th class="th-l">ID Inspection</th>
                                <th class="th-l">Reference</th>
                                <th class="th-l">Country</th>
                                <th class="th-l">Importer</th>
                                <th class="th-l">Exporter</th>
                                <th class="th-l">Yard</th>
                                <th class="th-l">Location</th>
                                <th class="th-l">Container No</th>
                                <th class="th-l">Status</th>
                                <th class="th-l">Shippinig line</th>
                                <th class="th-l">Bill of Lading No</th>
                                <th class="th-l">Scrap Description</th>
                                <th class="th-l">DateStarted</th>
                                <th class="th-l">DateCompletion</th> 
                                <th class="th-l">TimeStarted</th>
                                <th class="th-l">TimeCompletion</th>
                                <th class="th-l">Duration</th>
                                <th class="th-l">SealInitial</th>
                                <th class="th-l">SealFinal</th>
                                <th class="th-l">Quantity</th>
                                <th class="th-l">BackRadiationLevel</th>
                                <th class="th-l">ContainerRadiationLevel</th>
                                <th class="th-l">PortOfDestination</th>
                                <th class="th-l">FinalDestination</th>
                                <th class="th-l">Edit</th>
                                <th class="th-l">Delete</th>
                            </tr>
        </thead>
        <tbody>
            <?php
        
    while($row=mysqli_fetch_assoc($result)){
        $ID=$row['ID'];
        $Ref=$row['Ref'];
        $Country=$row['Country'];
        $Importer=$row['Importer'];
        $Exporter=$row['Exporter'];
        $Yard=$row['Yard'];   
        $Location=$row['Location'];
        $ContainerN=$row['ContainerN']; 
        $Status=$row['Status'];
        $ShippingLine=$row['ShippingLine'];
        $BillOfLadingNo=$row['BillOfLadingNo'];
        $ScrapDescription=$row['ScrapDescription'];
        $DateS=$row['DateS'];
        $DateC=$row['DateC'];
        $TimeS=$row['TimeS'];
        $TimeC=$row['TimeC'];
        $Duration=$row['Duration'];
        $SealI=$row['SealI'];
        $SealF=$row['SealF'];
        $Quantity=$row['Quantity'];
        $BRLevel=$row['BRLevel'];
        $ContainerRLevel=$row['ContainerRLevel'];
        $PortOfDestination=$row['PortOfDestination'];
        $FinalDestination=$row['FinalDestination'];
        ?>
        <tr>
        <th class="th-l"><?php echo $ID ?></th>
        <th class="th-l"><?php echo $Ref ?></th>
        <th class="th-l"><?php echo $Country ?></th>
        <th class="th-l"><?php echo $Importer ?></th>
        <th class="th-l"><?php echo $Exporter ?></th>
        <th class="th-l"><?php echo $Yard ?></th>
        <th class="th-l"><?php echo $Location ?></th>
        <th class="th-l"><?php echo $ContainerN ?></th>
        <th class="th-l"><?php echo $Status  ?></th>
        <th class="th-l"><?php echo $ShippingLine ?></th>
        <th class="th-l"><?php echo $BillOfLadingNo ?></th>
        <th class="th-l"><?php echo $ScrapDescription ?></th>
        <th class="th-l"><?php echo $DateS ?></th>
        <th class="th-l"><?php echo $DateC ?></th>
        <th class="th-l"><?php echo $TimeS ?></th>
        <th class="th-l"><?php echo $TimeC ?></th>
        <th class="th-l"><?php echo $Duration ?></th>
        <th class="th-l"><?php echo $SealI ?></th>
        <th class="th-l"><?php echo $SealF ?></th>
        <th class="th-l"><?php echo $Quantity ?></th>
        <th class="th-l"><?php echo $BRLevel ?></th>
        <th class="th-l"><?php echo $ContainerRLevel ?></th>
        <th class="th-l"><?php echo $PortOfDestination ?></th>
        <th class="th-l"><?php echo $FinalDestination ?></th>
        <th class="th-l"><a href="InspectionEdit.php?GetID=<?php echo $ID?>">Edit</a></th>
        <th class="th-l"><a href="DeleteInspection.php?Del=<?php echo $ID ?>">Delete</a></th>

        </tr>
       <?php 
    }
  ?>
        </tbody>
        <tfoot>
          <tr>
                <th class="th-l">ID Inspection</th>
                                <th class="th-l">Reference</th>
                                <th class="th-l">Country</th>
                                <th class="th-l">Importer</th>
                                <th class="th-l">Exporter</th>
                                <th class="th-l">Yard</th>
                                <th class="th-l">Location</th>
                                <th class="th-l">Container No</th>
                                <th class="th-l">Status</th>
                                <th class="th-l">Shippinig line</th>
                                <th class="th-l">Bill of Lading No</th>
                                <th class="th-l">Scrap Description</th>
                                <th class="th-l">DateStarted</th>
                                <th class="th-l">DateCompletion</th> 
                                <th class="th-l">TimeStarted</th>
                                <th class="th-l">TimeCompletion</th>
                                <th class="th-l">Duration</th>
                                <th class="th-l">SealInitial</th>
                                <th class="th-l">SealFinal</th>
                                <th class="th-l">Quantity</th>
                                <th class="th-l">BackRadiationLevel</th>
                                <th class="th-l">ContainerRadiationLevel</th>
                                <th class="th-l">PortOfDestination</th>
                                <th class="th-l">FinalDestination</th>
                                <th class="th-l">Edit</th>
                                <th class="th-l">Delete</th>
          </tr>
        </tfoot>
      </table>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/jd/bootstrap.min.js"></script>
    
<script src="https://cdn.dataTables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.dataTables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $('.mydatatable').DataTable();
    
    
    </script>
