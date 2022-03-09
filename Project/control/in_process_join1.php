<?php

session_start();
$catagory = "";
if(isset($_POST["next1"])){
    echo"Submit button is clicked.";
    $error = 0;

    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Enter a valid first name.<br>";
        $error = 1;
    }
    
    $lname = $_POST["lname"];
    if(empty($lname)){
        echo"Enter a valid last name.<br>";
        $error = 1;
    }

    $age = $_POST["age"];
    if(empty($age)){
        echo"Enter valid age.<br>";
        $error = 1;
    }

    $password = $_POST["pwd"];
    if(empty($password) || strlen($password)<7){
        echo("Password must be at least 8 charecter.<br>");
        $error = 1;
    }

    if(!isset($_POST["gender"]))
    {
        
        $error = 1;
    }
    else{
        if(isset($_POST["gender"]) && $_POST["gender"] == "r1")
        {
            $catagory = "Male";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r2")
        {
            $catagory = "Female";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r3")
        {
            $catagory = "Other";
        }
        
    }

    if($error ==0 || $error == 1){
        $_SESSION["gender"] = $catagory;
        $_SESSION["pwd"] = $_POST["pwd"];
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["fname"] = $_POST["fname"];
        header("location:in_register_2.php");
        echo "hello";
    }
    else{
        $error = 0;
    }
   

}
?>