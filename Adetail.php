<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body   style="  background-image: url(https://picsum.photos/1500/3000?vegetabl);!important; */
    background-color:rgba(243, 235, 235, 0); ">
   
   <nav class="navbar navbar-expand-lg bg-body-tertiary" >
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
              <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
           
          </div>
        </div>
    </nav>


  <div style="display: flex;
    justify-content: space-between;    margin-top: 2%;
    margin-left: 3%; ";     >

<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php

   include ('Product.php');
    if($mydata->num_rows > 0){
      while($data=$mydata->fetch_assoc()){ 
  echo"<div class=' col '>  
    <div class='card'>
      <img src='".$data['image_pathh']."' class='card-img-top' alt='...' style='height: 200px;'>
      <div class='card-body'>
        <h5 class='card-title'> Title = ".$data['Title']."</h5>
    <p class='card-text'>Discription = ".$data['image_pathh']."</p>
    <p class='card-text'>Discription = ".$data['Discription']."</p>
    <p class='card-text' style=' color: red;text-decoration: line-through;'>Old Price = ".$data['Old']."</p>
    <p class='card-text'style=' color: green;'>New Price = ".$data['New']."</p>
    <p class='card-text'>Rating = ".$data['Rateing']."</p>
    </div>

    <div style='display: flex; justify-content: space-around; margin-bottom: 4%;'>
    <form action='Update.php' method='post'>
      <input type='hidden' name='updat' value=".$data['ID'].">
       <input type='hidden' name='updatethis' value = 'updatethis'> 
    <button type='submit' class='btn btn-outline-success'>update</button> 
  </form>

  <form action='Product.php' method='post'>
    <input type='hidden' name='delet' value=".$data['ID'].">
    <input type='hidden' name='deletethis' value = 'deletethis'>
  <button type='submit' class='btn btn-outline-danger'>Delete</button> 
</form>

    </div> 
    
    
    </div>
</div>
<br>";
}}else{
    echo" add new data";
}

  ?>
</div>
</div>


      <!-- footer -->
<br>
<div class="container-fulid" style="background-color: bisque;">
  <footer class="p-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <!-- <div >
      <p>&copy; 2024 Company, Inc. All rights reserved.</p>
    </div> -->
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>