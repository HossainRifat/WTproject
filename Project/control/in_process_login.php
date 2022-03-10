<?php
$flag = 1;
if(isset($_POST["submit"])){
    $data = file_get_contents("../file/in_join_info.json");
        $readData = json_decode($data,true);
        foreach($readData as $myobject)
        {
            if($myobject["email"] == $_POST["email"]){
                if($myobject["password"] == $_POST["pwd"]){
                    $flag = 0;
                }
                else{
                    $flag = 1;
                }
            }
	        // foreach($myobject as $key=>$value)
            // {
		    //     if($key == "email" && $value == $_POST["email"]){
            //         $eflag = 0;
            //     }
            //     if($key == "password" && $value == $_POST["pwd"]){
            //         $pflag = 0;
            //     }
            //     else if($key == "password" && $eflag == 0){
            //         $eflag = 1;
            //         $pflag = 1;
            //     }

	        // }
    
        }
        
        
        if($flag == 1){
            echo "Incorrect email or password.<br>";
        }
        else if($flag == 0){
            header("location:in_home.php");
        }
    
}

?>