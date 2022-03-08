<?php

session_start();
$catagory = "";
if(isset($_POST["next1"])){
    echo"Submit button is clicked.";
    $error = 0;
    //echo"<br><br><h2>Registration Confirmation</h2>";
    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Enter a valid first name.<br>";
        $error = 1;
    }
    else{
       // echo"Your first name is ".$fname."<br>";
        
    }
    
    $lname = $_POST["lname"];
    if(empty($lname)){
        echo"Enter a valid last name.<br>";
        $error = 1;
    }
    else{
        //echo"Your last name is ".$lname."<br>";
        
    }

    $age = $_POST["age"];
    if(empty($age)){
        echo"Enter valid age.<br>";
        $error = 1;
    }
    else{
        //echo"Your age is ".$age."<br>";
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
           // echo"you have selected Male.<br>";
            $catagory = "Male";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r2")
        {
            //echo"you have selected Female.<br>";
            $catagory = "Female";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r3")
        {
            //echo"you have selected Other.<br>";
            $catagory = "Other";
        }
        
    }

    if($error ==0 || $error == 1){
        $_SESSION["gender"] = $catagory;
        $_SESSION["pwd"] = $_POST["pwd"];
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["fname"] = $_POST["fname"];
        header("location:../view/register_2.php");
    }
    else{
        $error = 0;
    }
   

}
?>