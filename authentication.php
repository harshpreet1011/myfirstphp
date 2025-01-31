<?php

$conn = new mysqli("localhost","root","","harsh");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Email = $_POST['emaili'];
    $Password = $_POST['pass'];

    $x = "select * from login where email = '$Email' &&  password='$Password'";

    if($conn->query($x)){
        session_start();
        $_SESSION["email"] = $Email;
        $_SESSION["password"] = $Password;

        header("Location: index.php");
    }





}


?>