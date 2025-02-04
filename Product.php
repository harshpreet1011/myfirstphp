<?php 


$comm = new mysqli("localhost","root","","harsh");

if (isset($_GET["q"])){
    $query = $_GET["q"];

    $qwu = "select * from product where Title = '$query'";

    $mydata = $comm->query($qwu);
}else{
    $new_query="select * from product ORDER BY `ID` DESC";
    $mydata =  $comm->query($new_query);
    }


if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["deletethis"])){
    $my_id = $_POST["delet"];


    $dlt ="Delete from product where ID = $my_id";

    $comm->query($dlt);

    // echo" data delete ";

    header("Location: Adetail.php");
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updatethis"])){
    
    $my_id = $_POST["updat"];
    
    $update = "select * from  product where ID = $my_id";
  
     $updat = $comm->query($update);

     
    //  print_r($t);
}


elseif($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["updateId"])) {
    $updateId=$_POST['updateId'];
    $Title=$_POST['titll'];
    $Discription=$_POST['dist'];
    $Old  = $_POST['oldd'];
    $New = $_POST['new'];
    $Rating = $_POST['rate'];

    $sql="update product set Title = '$Title' , Discription = '$Discription', Old = '$Old' ,New = '$New', Rateing ='$Rating' where ID = $updateId";

    
    $comm->query($sql);

    header("Location: Adetail.php");
}

elseif($_SERVER["REQUEST_METHOD"]=="POST") {
    $Title=$_POST['titll'];
    $Discription=$_POST['dist'];
    $Old  = $_POST['oldd'];
    $New = $_POST['new'];
    $Rating = $_POST['rate'];

    $image = $_FILES["myimg"]["name"];
    // print_r($_FILES["myimg"]);
    $target = "uploades/";

    $target_path = $target.basename($image);
    // echo $target_path;
    if (move_uploaded_file($_FILES["myimg"]["tmp_name"], $target_path)){


    // echo "insideee quts";
    

    $sql="insert into product (Title , Discription , Old ,New,Rateing, image_pathh ) values ('$Title','$Discription', '$Old' ,'$New' ,$Rating, '$target_path')";

    
    $comm->query($sql);
    header(header:  "Location: Adetail.php");
}

    // header(header:  "Location: Adetail.php");
}

// elseif($_SERVER["REQUEST_METHOD"]=="POST") {
//     $Title=$_POST['titll'];
//     $Discription=$_POST['dist'];
//     $Old  = $_POST['oldd'];
//     $New = $_POST['new'];
//     $Rating = $_POST['rate'];

//     $sql="insert into product (Title , Discription , Old ,New ) values ('$Title','$Discription', '$Old' ,'$New')";

    
//     $comm->query($sql);

//     header("Location: Adetail.php");
// }