<?php

session_start();

// how to set a session 

// $_SESSION["username"] = "krissmoris";
// $_SESSION["password"]  = "12345";

// echo "session set sucessfully...!"



// how to get a sesion 

// echo $_SESSION["username"];



// check session exist or not 

if (isset($_SESSION["username"]) && $_SESSION["password"]){
    echo "session exist " ;
}else{
    echo "sessiopn not exit";
}



// how to delete session 

// unset($_SESSION["username"]);

// echo "session deleted";

?>