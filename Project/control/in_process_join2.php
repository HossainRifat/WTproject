<?php

session_start();
$catagory = "";
if(isset($_POST["previous"])){
   header("location:in_register.php");
}
if(isset($_POST["next1"])){
    header("location:in_register_3.php");
}
?>
