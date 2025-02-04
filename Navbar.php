<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Product
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Addppduct.php">Add Product</a></li>
                        <li><a class="dropdown-item" href="Adetail.php">Product details</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
                <li class="nav-item">

                    <?php
              session_start();
              if (isset($_SESSION["Email"]) && $_SESSION["Password"]){
                echo '<a class="nav-link" href="logout.php">Logout</a>';
                echo $_SESSION["Email"];
              }
              else {
              echo '<a class="nav-link" href="Login.php">login</a>';
              }
                ?>

                </li>
            </ul>
            <form class="d-flex" role="search" style="margin-right: 1%;">
                <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>