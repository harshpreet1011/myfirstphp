<?php 


$conn = new mysqli("localhost","root","","harsh");


$new_query="select * from login where email=$Name &&  password=$Password";
$mydata =  $conn->query($new_query);



if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $Name=$_POST['fname'];
    $Email=$_POST['emaili'];
    $Password=$_POST['pass'];
    

    $sql_query="insert into login ( name, email,password) values ('$Name','$Email','$Password')";

    $conn->query($sql_query);

    echo "data save";
}

?>