<?php
echo "hello";
setcookie("autologin","", time() - 3600,"/","");
session_start();
if(session_destroy()){
    
    header("location:../view/home.php");
}
?>