<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        
    body{
  background: -webkit-linear-gradient(left, #9DD7FA, #9DD7FA);
  background: linear-gradient(to right, #5FC0FA, #5FC0FA);
  font-family: 'Roboto', sans-serif;
    
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
      <a class="navbar-brand" href="#"><img class="logo" src="iamsp_logo.png" height="28"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="FormInspiction.php">Inspection </a></li>
        <li><a href="EX2.php">Inspector  </a></li>
        <li><a href="YardManagement.php"> Yard  </a></li>
        <li><a href="exporterM.php"> Exporter  </a></li>
       <li><a href="Importer.php"> Importer  </a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="SearchTab.php">Inspection View</a></li>
            <li><a href="VInspector.php">Inspector View</a></li>
            <li><a href="ContainerView.php">Exporter View</a></li>
            <li><a href="YardView.php">Yard View</a></li>
            
          </ul>   
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="SignOff.php"> Sign off</a></li>
      </ul>
    </div>
  </div>
</nav>
    <?php
    session_start();
 
    if(isset($_SESSION['User']))
    {
       echo '<center> <strong> Welcome  ' . $_SESSION['User'].'</strong><center><br/>';
    }
    else
    {
        header("location:Login.php");
    }
 
?>
</body>
</html>

<!--
<style>body{
  background: -webkit-linear-gradient(left, #5A91C8, #5A91C8);
  background: linear-gradient(to right, #5A91C8, #5A91C8);
  font-family: 'Roboto', sans-serif;
}
        </style>-->
