
<?php 
require_once('Connection.php');
$ID=$_GET['GetID'];
$query="select * from ins where ID='".$ID."'";
$result=mysqli_query($con,$query);
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
       
 }
?>
<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
<meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
<link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"/>
<link rel="canonical" href="https://codepen.io/ainarela/pen/XXZymN?limit=all&page=18&q=form" />
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
  height: 175%;
}

body {
  height: 123%;
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
   <h1 class="title">Edit Inspection</h1>
   <form class="contact-form row" action="UpdateIns.php?ID=<?php echo $ID ?>" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="form-field col x-50">
         <input name="Ref" value="<?php echo $Ref ?>" class="input-text js-input" type="text" required>
         <label class="label" for="first">Reference<br/><br/></label>
      </div>
             <div class="form-field col x-50">
         <input  name="Country" value="<?php echo $Country?>" class="input-text js-input" type="text" required>
         <label class="label" for="Last">Country<br/><br/></label>
      </div> 
      <div class="form-field col x-50">
         <input name="Importer" value="<?php echo $Importer ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Importer<br/><br/></label>
      </div>
            <div class="form-field col x-50">
         <input name="Exporter" value="<?php echo $Exporter ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Exporter<br/><br/></label>
      </div>
        <div class="form-field col x-50">
            <input name="Yard" value="<?php echo $Yard ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Yard<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="Location" value="<?php echo $Location ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Location<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="ContainerN" value="<?php echo $ContainerN ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Container reference<br/><br/></label>
      </div>
       <div class="form-field col x-50">
         <label class="label" for="message">Status<br/><br/></label>
         <select name="Status" id="Status" class="input-text js-input">
             <option></option>
             <option value="Inspection Scheduled" <?php if($Status=="Inspection Scheduled"){ echo "selected";}?>>Scheduled</option>
             <option value="Inspection Started" <?php if($Status=="Inspection Started"){ echo "selected";}?>>Started</option>
             <option value="Inspection Completed" <?php if($Status=="Inspection Completed"){ echo "selected";}?>>Completed</option>
             <option value="Inspection Conceled" <?php if($Status=="Inspection Conceled"){ echo "selected";}?>>Inspection Conceled</option>
             <option value="Destination Changed" <?php if($Status=="Destination Changed"){ echo "selected";}?>>Destination Changed</option>
             <option value="BIL Received" <?php if($Status=="BIL Received"){ echo "selected";}?>>BIL Received</option>
             <option value="Draft Received" <?php if($Status=="Draft Received"){ echo "selected";}?>>Draft Received</option>
             <option value="Draft Amended" <?php if($Status=="Draft Amended"){ echo "selected";}?>>Draft Amended</option>
             <option value="Draft Confirmed" <?php if($Status=="Draft Confirmed"){ echo "selected";}?>>Draft Confirmed</option>
             <option value="PSIC Sent" <?php if($Status=="PSIC Sent"){ echo "selected";}?>>PSIC Sent</option>
             <option value="PSIC To Be Amended" <?php if($Status=="PSIC To Be Amended"){ echo "selected";}?>>PSIC To Be Amended</option>
             <option value="PSIC Amended" <?php if($Status=="PSIC Amended"){ echo "selected";}?>>PSIC Amended</option>
             <option value="Container delivered" <?php if($Status=="Container delivered"){ echo "selected";}?>>Container delivered</option>
        </select>
      </div>
        <div class="form-field col x-50">
         <input name="ShippingLine" value="<?php echo $ShippingLine ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Shipping Line<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="BillOfLadingNo" value="<?php echo $BillOfLadingNo?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Bill Of Lading No<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="ScrapDescription" value="<?php echo $ScrapDescription ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Scrap Description<br/><br/></label>
      </div>
         <div class="form-field col x-50">
         <input name="DateS" value="<?php echo $DateS ?>" class="input-text js-input" type="date" required>
         <label class="label" for="message">Date Started<br/><br/></label>
      </div>
         <div class="form-field col x-50">
         <input name="DateC" value="<?php echo $DateC ?>" class="input-text js-input" type="Date" required>
         <label class="label" for="message">DateCompletion<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="TimeS" value="<?php echo $TimeS ?>" class="input-text js-input" type="time" required>
         <label class="label" for="message">Time Started<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="TimeC" value="<?php echo $TimeC ?>"  class="input-text js-input" type="Time" required>
         <label class="label" for="message">Time Completion<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="Duration" value="<?php echo $Duration ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Duration<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="SealI" value="<?php echo $SealI ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Seal Initial<br/><br/></label>
      </div>
        <div class="form-field col x-50">
        <input name="SealF" value="<?php echo $SealF ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Seal Final<br/><br/></label>
      </div>
        <div class="form-field col x-50">
        <input name="Quantity" value="<?php echo $Quantity ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Quantity<br/><br/></label>
      </div>
        <div class="form-field col x-50">
         <input name="BRLevel" value="<?php echo $BRLevel ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Background radiation level<br/><br/></label>
      </div>
       <div class="form-field col x-50">
         <input name="ContainerRLevel" value="<?php echo $ContainerRLevel ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Container Radiation Level<br/><br/></label>
      </div>
          <div class="form-field col x-50">
         <input name="PortOfDestination" value="<?php echo $PortOfDestination ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Port Of Destination<br/><br/></label>
      </div>
          <div class="form-field col x-100">
         <input name="FinalDestination" value="<?php echo $FinalDestination ?>" class="input-text js-input" type="text" required>
         <label class="label" for="message">Final Destination<br/><br/></label>
      </div> 
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" name="Edit" type="submit" value="Edit">
      </div>
   </form>
</section>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});
</script>   
</body></html>