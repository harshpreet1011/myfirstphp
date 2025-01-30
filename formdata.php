<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formdata.php">form</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Product
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Addppduct.php">Add Product</a></li>
                  <li><a class="dropdown-item" href="Adetail.php">Product details</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
              </li> <li class="nav-item">
                <a class="nav-link" href="Login.php">login</a>
              </li>
            </ul>
            <form class="d-flex" role="search" style="margin-right: 1%;">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
           
          </div>
        </div>
    </nav>

    
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
    justify-content: space-between;" ;  >

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>