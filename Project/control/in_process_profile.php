<?php 

$data = file_get_contents("../file/in_join_info.json");
        $readData = json_decode($data,true);
        if(isset($_COOKIE["autologin"])){

        
        foreach($readData as $myobject)
        {   
            if($myobject["email"] == $_COOKIE["autologin"]){
                    // setcookie("autologin",$_POST["email"],time()+2*24*60*60);

                    //$_SESSION["email"] = $_POST["email"];
                    //$_SESSION["pwd"] = $_POST["pwd"];
                    $_SESSION["firstName"] = $myobject["firstName"];
                    $_SESSION["lastName"] = $myobject["lastName"];
                    $_SESSION["DOB"] = $myobject["DOB"];
                    $_SESSION["gender"] = $myobject["gender"];
                    $_SESSION["phone"] = $myobject["phone"];
                    $_SESSION["pAddress"] = $myobject["pAddress"];
                    
                    $_SESSION["oname"] = $myobject["oname"];
                    $_SESSION["linumber"] = $myobject["linumber"];
                    $_SESSION["tin"] = $myobject["tin"];
                    $_SESSION["oaddress"] = $myobject["oaddress"];
                    $_SESSION["edate"] = $myobject["edate"];
                    $_SESSION["oemail"] = $myobject["oemail"];
                    $_SESSION["site"] = $myobject["site"];
                    break;
            }
        }
}

else{
        foreach($readData as $myobject)
        {   
            if($myobject["email"] == $_SESSION["email"]){
                    // setcookie("autologin",$_POST["email"],time()+2*24*60*60);

                    //$_SESSION["email"] = $_POST["email"];
                    //$_SESSION["pwd"] = $_POST["pwd"];
                    $_SESSION["firstName"] = $myobject["firstName"];
                    $_SESSION["lastName"] = $myobject["lastName"];
                    $_SESSION["DOB"] = $myobject["DOB"];
                    $_SESSION["gender"] = $myobject["gender"];
                    $_SESSION["phone"] = $myobject["phone"];
                    $_SESSION["pAddress"] = $myobject["pAddress"];
                    
                    $_SESSION["oname"] = $myobject["oname"];
                    $_SESSION["linumber"] = $myobject["linumber"];
                    $_SESSION["tin"] = $myobject["tin"];
                    $_SESSION["oaddress"] = $myobject["oaddress"];
                    $_SESSION["edate"] = $myobject["edate"];
                    $_SESSION["oemail"] = $myobject["oemail"];
                    $_SESSION["site"] = $myobject["site"];
                    break;
            }
        }
}
        

?>