<?php

$conn = new mysqli("localhost","root","","harsh");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = $_POST['emaili'];
    $Password = $_POST['pass'];

    $x = 'SELECT * FROM `login` WHERE Email = "$Email" and Password = "$Password "';

    // echo "heyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
    // print_r($conn->query($x));
    $check = $conn->query($x);
    if($check->num_rows != 0 ) {
            session_start();
            $_SESSION["Email"] = $Email;
            $_SESSION["Password"] = $Password;

                
        }else{
            echo "sigup";
        }
    
    }
    





?>