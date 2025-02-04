<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php include("Navbar.php");
echo "<br />";
?>

<body>



    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody> -->

    <div style="display: flex;
    justify-content: space-between;" ;>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
    
    include ('Happ.php');
    if($mydata->num_rows > 0){
    while($data=$mydata->fetch_assoc()){
     

      // echo"  <tr>
      //     <th scope='row'>1</th>
      //     <td>".$data["Name"]."</td>
      //     <td>".$data["Email"]."</td>
      //     <td>".$data["Password"]."</td>";
      echo"  <div class=' col '>  
      <div class='card'>
        <div class='card-body'>
          <h5 class='card-title'>Name = ".$data['Name']."</h5>
      <p class='card-text'>Email =".$data['Email']."</p>
      <p class='card-text'>Password =".$data['Password']."</p>
         </div>
      </div>
      </div>
  ";
    }
    }else{
        echo" add new data";
    }
    
    ?>
        </div>
    </div>

    <!-- </tbody>
</table> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>