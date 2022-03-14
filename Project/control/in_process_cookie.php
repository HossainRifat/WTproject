<?php
session_start();
setcookie("autologin",$_SESSION["email"],time()+2*24*60*60,"/","");
header("location:../view/in_home.php");
?>