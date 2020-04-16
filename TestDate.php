<?php 
require_once('Connection.php');
$query="select * from ins";
$result=mysqli_query($con,$query);
?> 

<!DOCTYPE html>
<html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/ainarela/pen/XXZymN?limit=all&page=18&q=form" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Raleway:300);
@import url(https://fonts.googleapis.com/css?family=Lusitana:400,700);
.align-center {
  text-align: center;
}
html {
  height: 100%;
}
    body{
          height: 214%;
  position: relative;
}
.row {
  margin: -20px 0;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.row .col {
  padding: 0 20px;
  float: left;
  box-sizing: border-box;
}
.row .col.x-50 {
  width: 50%;
}
.row .col.x-100 {
  width: 100%;
}
.content-wrapper {
  min-height: 100%;
  position: relative;
}
.get-in-touch {
  max-width: 650px;
  margin: 0 auto;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.get-in-touch .title {
  text-align: center;
  font-family: Raleway, sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 36px;
  line-height: 48px;
  padding-bottom: 48px;
}
.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #000;
  font-family: Lusitana, serif;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label, .contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-family: Lusitana, serif;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #888;
  cursor: text;
  -webkit-transition: -webkit-transform .2s ease-in-out;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
  color: #fff;
  font-family: Raleway, sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  line-height: 24px;
  padding: 8px 16px;
  border: none;
  cursor: pointer;
}

.note {
  position: absolute;
  left: 0;
  bottom: 10px;
  width: 100%;
  text-align: center;
  font-family: Lusitana, serif;
  font-size: 16px;
  line-height: 21px;
}
.note .link {
  color: #888;
  text-decoration: none;
}
.note .link:hover {
  text-decoration: underline;
}
</style></head><body>
<section class="get-in-touch">
   <h1 class="title"></h1>
   <form class="contact-form row" action="Inspection.php" method="post">
      <div class="form-field col x-50">
         <input name="Ref" class="input-text js-input" type="text" required>
         <label class="label" for="first">DateDebut<br/><br/></label>
      </div>
             <div class="form-field col x-50">
         <input  name="Country" class="input-text js-input" type="text" required>
         <label class="label" for="Last">DateFin<br/><br/></label>
      </div> 
       
<?php
$DateS=$_POST['DateS'];
$DateC=$_POST['DateC'];
$s = strtotime($DateC)-strtotime($DateS);
$d = intval($s/86400)+1;
echo $d;
?>        
       <?php
       
       function DiffDate($DateS,$DateC) 
{ 
 
                $Tps   = strToTime($DateS); 
                $Tpsdeb= strToTime($DateC); 
                $dd=substr($DateS,0,2); 
                $mm=substr($DateS,3,2); 
                $yy=substr($DateS,6,4); 
                $hh=substr($DateS,11,2); 
                $mi=substr($DateS,14,2); 
                $ss=substr($DateS,17,2); 
                $dddeb=substr($DateC,0,2); 
                $mmdeb=substr($DateCb,3,2); 
                $yydeb=substr($DateC,6,4); 
                $hhdeb=substr($DateC,11,2); 
                $mideb=substr($DateC,14,2); 
                $ssdeb=substr($DateC,17,2); 
                $Tps=mkTime($hh,$mi,$ss,$mm,$dd,$yy); 
                $Tpsdeb=mkTime($hhdeb,$mideb,$ssdeb,$mmdeb,$dddeb,$yydeb); 
                $Duree = $Tps - $Tpsdeb; 
                return $Duree;  
            }
       
?>
       
       
       <?php
 
$olderDate = "1991-01-02";
$newerDate = "2014-06-07";
 
echo $olderDate . " is " . strtotime($olderDate), "<br>";
echo $newerDate . " is " . strtotime($newerDate);
       
       
       
       
       $date1 = new DateTime("2007-03-24");
$date2 = new DateTime("2009-06-26");
$interval = $date1->diff($date2);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
echo "difference " . $interval->days . " days ";
       
       
       
       
       function dateDiff ($DateS,$DateC) {

    // Return the number of days between the two dates:    
    return round(abs(strtotime($DateS) - strtotime($DateC))/86400);

} // end function dateDiff
       
       
       
       <?php 
  
// Declare and define two dates 
$date1 = strtotime("2016-06-01 22:45:00");  
$date2 = strtotime("2018-09-21 10:44:01");  
  
// Formulate the Difference between two dates 
$diff = abs($date2 - $date1);  
  
  
// To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
$years = floor($diff / (365*60*60*24));  
  
  
// To get the month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));  
  
  
// To get the day, subtract it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24)); 
  
  
// To get the hour, subtract it with years,  
// months & seconds and divide the resultant 
// date into total seconds in a hours (60*60) 
$hours = floor(($diff - $years * 365*60*60*24  
       - $months*30*60*60*24 - $days*60*60*24) 
                                   / (60*60));  
  
  
// To get the minutes, subtract it with years, 
// months, seconds and hours and divide the  
// resultant date into total seconds i.e. 60 
$minutes = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24  
                          - $hours*60*60)/ 60);  
  
  
// To get the minutes, subtract it with years, 
// months, seconds, hours and minutes  
$seconds = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24 
                - $hours*60*60 - $minutes*60));  
  
// Print the result 
printf("%d years, %d months, %d days, %d hours, "
     . "%d minutes, %d seconds", $years, $months, 
             $days, $hours, $minutes, $seconds);  
?> 