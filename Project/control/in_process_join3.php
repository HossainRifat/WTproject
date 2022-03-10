<?php

session_start();
$catagory = "";
if(isset($_POST["previous"])){
   header("location:in_register_2.php");
}
if(isset($_POST["submit"])){
    header("location:in_profile.php");
}
?>