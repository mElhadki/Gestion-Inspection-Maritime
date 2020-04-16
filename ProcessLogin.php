<?php 
require_once('Connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UserName']) || empty($_POST['PassWord']))
       {
            header("location:Login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from Users where UserName='".$_POST['UserName']."' and PassWord='".$_POST['PassWord']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UserName'];
                header("location:nav.php");
            }
            else
            {
                header("location:signIn.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>