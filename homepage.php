<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/stylehp.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light d-md-flex p-3" id="navbar">
    <a class="navbar-brand" href="#">Tuang aja</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#drink">Drinks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- About Us Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>About Us</h2>
          <p>Welcome to our alcohol beverage store! We are passionate about providing high-quality alcoholic drinks to our customers.</p>
        <p>At our store, you will find a wide selection of premium alcoholic beverages, including whiskey, vodka, tequila, and much more.</p>
        <p>Our team consists of knowledgeable and friendly staff members who are dedicated to helping you find the perfect drink for any occasion.</p>
        <p>Whether you're looking for a fine whiskey to savor or a refreshing cocktail for a party, we've got you covered.</p>
        <p>Visit our store today and experience the world of premium alcohol beverages!</p>
        </div>
      </div>
    </div>
  </section>

    <div class="container rounded p-3 mb-2 bg-white " id="drink">
      <div class="row ">
        <div class="col text-center ">
        
        <h2>Drinks</h2>
          <div class="row row-cols-md-3 row-cols-2 p-5 ">
            <div class="col-md-4 ">
              <div class="card mb-4">
                <img src="https://minuman.com/cdn/shop/products/JOHNNIE-WALKER-BLACK-SHERRY_800x.jpg?v=1655181765" class="card-img-top " alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">WHISKEY</h5>
                  <a href="whiskey.php" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <img src="https://minuman.com/cdn/shop/files/B_G-CUVEE-SPECIALE-ROUGE-SWEET-WINE_1024x.jpg?v=1700117745" class="card-img-top" alt="Project 2">
                <div class="card-body">
                  <h5 class="card-title">WINE</h5>
                  <a href="#" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <img src="https://minuman.com/cdn/shop/products/SMIRNOFF-VODKA-MEDIUM_600x600_crop_center.jpg?v=1670394001" class="card-img-top" alt="Project 3">
                <div class="card-body">
                  <h5 class="card-title">VODKA</h5>
                  <a href="#" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                  <img src="https://minuman.com/cdn/shop/products/GIBSONS-GIN-NEW.jpg?v=1626338177" class="card-img-top" alt="Project 3">
                  <div class="card-body">
                    <h5 class="card-title">GIN</h5>
                    <a href="#" class="btn btn-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="https://minuman.com/cdn/shop/products/Jose-Cuervo-Especial-Reposado-Tequila-750ml_600x600_crop_center.jpg?v=1642151299" class="card-img-top" alt="Project 3">
                  <div class="card-body">
                    <h5 class="card-title">TEQUILA</h5>
                    <a href="#" class="btn btn-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="https://minuman.com/cdn/shop/products/Image1-17-23at3.00PM.jpg?v=1673942448" class="card-img-top" alt="Project 3">
                  <div class="card-body">
                    <h5 class="card-title">RUM</h5>
                    <a href="#" class="btn btn-primary">View</a>
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>

<section id="contact" class="mt-5">
      <div class="container">
          <div class="p-4 border-top">&copy; Sir Culex</div>
          <h2>Contact Me</h2>
          <p>Email: TuangAja@gmail.com</p>
      </div>
  </section>
            
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
