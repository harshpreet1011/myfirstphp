<?php 


$conn = new mysqli("localhost","root","","harsh");


// $new_query="select * from login where email = $Email &&  password=$Password";

// $mydata =  $conn->query($new_query);



if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $Name=$_POST['fname'];
    $Email=$_POST['emaili'];
    $Password=$_POST['pass'];
    

    $sql_query="insert into login ( Name, Email,Password) values ('$Name','$Email','$Password')";

    $conn->query($sql_query);

    echo "data save";
}

?>