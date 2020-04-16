<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inspection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  border-color: white;
  font-family: Lusitana, serif;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
   background: white;

}
.contact-form .input-text:focus {
  outline: none;
  background:white;

    
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
  color: Black;
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
      
</style>
</head>
<body>
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
        <li><a href="Exporter2.php"> Exporter </a></li>
       <li class="active"><a href="Importer2.php"> Importer  </a></li>
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
    <section class="get-in-touch">
   <h1 class="title">Importer Management</h1>
   <form class="contact-form row" action="ProcessImporter2.php" method="post">
      <div class="form-field col x-50">
         <input name="ICE" class="input-text js-input" type="text" required>
         <label class="label" for="first">ICE<br/><br/></label>
      </div>
             <div class="form-field col x-50">
         <input  name="Name" class="input-text js-input" type="text" required>
         <label class="label" for="Last">Name<br/><br/></label>
      </div> 
      <div class="form-field col x-50">
         <input name="City" class="input-text js-input" type="text" required>
         <label class="label" for="message">City<br/><br/></label>
      </div>
            <div class="form-field col x-50">
         <input name="Place" class="input-text js-input" type="text" required>
         <label class="label" for="message">Place<br/><br/></label>
      </div>
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" type="submit" value="ADD">
      </div>
   </form>
</section>
    </body>
</html>