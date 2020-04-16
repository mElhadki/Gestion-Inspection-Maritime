<?php 
require_once('Connection.php');
$query="select * from ins";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  
        <style>
body {
    background-color:#393939;
}
            th{
                font-size: 9px;
                text-align: center;
            } 
             
            
.table > tbody > tr > td, .table > tbody > tr > .table > tfoot > tr > td, .table > tfoot > tr >  .table > thead > tr > td, .table > thead > tr > {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle;
    border-top: 1px solid #ddd;
}

.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
  vertical-align: middle;
  margin-top: 8px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #A1A6AB;
  -webkit-transition: .4s;
  transition: .4s;

}

.slider:before {
  position: absolute;
  content: "";
 height: 16px;
width: 14px;
left: 2px;
bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #800080;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
.table th, .table td { 
     border-top: none !important;
     border-left: none !important;
 }
.table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: #313131 ;
}
.table-call {
    min-height: .01%;
    overflow-x: auto;
    margin-top: 15px;
    border-radius: 6px;
}
.nav > li > a:focus, .nav > li > a:hover {
    text-decoration: none;
    background-color: black;
    color: white;
}
.table.table-bordered.vertical,
.table.table-bordered.vertical td,
.table.table-bordered.vertical th{
  border-top: 0px solid white !important;
  border-bottom: 0px solid white !important;
  border-right: 0px solid white !important;
  border-left: 0px solid white !important;
    }
.head {
  font-weight: normal;
  font-size: 16px;
}
</style>
</head> 
<body>  
<div class="container">
                <div class="row"  style="margin-top: 50px;">
                <div class="col-md-12 text-center">
                          <div class="outer-form">
                       <table class="table-striped table table-bordered vertical">
                          <thead style="color: white; font-weight: normal; background-color: black;">
                              <tr><th>Reference</th>
                             <th>Country</th>
                             <th>Importer</th>
                             <th>Exporter</th>
                             <th>Yard</th>
                             <th>Location</th>
                             <th>ContainerN</th>
                             <th>DateStarted</th>
                             <th>DateCompletion</th> 
                             <th>TimeStarted</th>
                             <th>TimeCompletion</th>
                             <th>Duration</th>
                             <th>SealInitial</th>
                             <th>SealFinal</th>
                             <th>Quantity</th>
                             <th>BackRadiationLevel</th>     
                             <th>Status</th>
                             <th>Edit</th>
                             <th>Delete</th>
                              </tr>
        <?php
        
    while($row=mysqli_fetch_assoc($result)){

        $Ref=$row['Ref'];
        $Country=$row['Country'];
        $Importer=$row['Importer'];
        $Exporter=$row['Exporter'];
        $Yard=$row['Yard'];   
        $Location=$row['Location'];
        $ContainerN=$row['ContainerN']; 
        $DateS=$row['DateS'];
        $DateC=$row['DateC'];
        $TimeS=$row['TimeS'];
        $TimeC=$row['TimeC'];
        $Duration=$row['Duration'];
        $SealI=$row['SealI'];
        $SealF=$row['SealF'];
        $Quantity=$row['Quantity'];
        $BRLevel=$row['BRLevel'];
        $Status=$row['Status'];
        ?>
        <tr>
        <th><?php echo $Ref ?></th>
        <th><?php echo $Country ?></th>
        <th><?php echo $Importer ?></th>
        <th><?php echo $Exporter ?></th>
        <th><?php echo $Yard ?></th>
        <th><?php echo $Location ?></th>
        <th><?php echo $ContainerN ?></th>
        <th><?php echo $DateS ?></th>
        <th><?php echo $DateC ?></th>
        <th><?php echo $TimeS ?></th>
        <th><?php echo $TimeC ?></th>
        <th><?php echo $Duration ?></th>
        <th><?php echo $SealI ?></th>
        <th><?php echo $SealF ?></th>
        <th><?php echo $Quantity ?></th>
        <th><?php echo $BRLevel ?></th>
        <th><?php echo $Status ?></th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
       <?php 
    }
  ?>
                              <tbody style="border:1px solid transparent; background-color:#242424; color:#A1A6AB; text-align: left;">
                              </tbody>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
    </body>
</html>
        