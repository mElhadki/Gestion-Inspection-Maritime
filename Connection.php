<?php
    $con=mysqli_connect('localhost','root','','ginspection');
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>