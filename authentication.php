<?php

$conn = new mysqli("localhost","root","","harsh");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = $_POST['emaili'];
    $Password = $_POST['pass'];

    $x = "select * from login where Email = '$Email' &&  Password='$Password'";

  
if($conn->query($x)){
        session_start();
        $_SESSION["Email"] = $Email;
        $_SESSION["Password"] = $Password;

        header("Location: index.php");
    }
}
else{
    echo "sigup";
}






?>