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
    <a class="navbar-brand" href="#">Tuang Aja</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">Drinks</a>
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


<div class="container rounded p-3 mb-2 bg-white" id="drink">
    <div class="row">
        <div class="col text-center mt-5">
            <h2>WHISKEY</h2>
            </div>
        </div>

    <div class="row row-cols-md-2 row-cols-3 p-2 ">        
        <div class="col-md-4 ">
            <div class="card mt-4" style="width: 18rem;">
                <img src="https://minuman.com/cdn/shop/products/JOHNNIE-WALKER-BLACK-SHERRY_800x.jpg?v=1655181765" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Black Label</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Alcohol : 40%</li>
                    <li class="list-group-item">ml : 750ml</li>
                    <li class="list-group-item">price : Rp.950.0000</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link fas fa-credit-card"></a>
                    <a href="cart.php" class="card-link fas fa-cart-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4" style="width: 18rem;">
                <img src="https://minuman.com/cdn/shop/products/SUNTORY-KAKUBIN.jpg?v=1685089715" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Suntory-Kakubin</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Alcohol : 40%</li>
                    <li class="list-group-item">ml : 650ml</li>
                    <li class="list-group-item">price : Rp.650.0000</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link fas fa-credit-card"></a>
                    <a href="#" class="card-link fas fa-cart-plus"></a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mt-4" style="width: 18rem;">
                <img src="https://minuman.com/cdn/shop/products/JOHNNIE-WALKER-BLUE_600x600_crop_center.jpg?v=1688542964" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blue Label</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Alcohol : 40%</li>
                    <li class="list-group-item">ml : 750ml</li>
                    <li class="list-group-item">price : Rp.900.0000</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link fas fa-credit-card"></a>
                    <a href="#" class="card-link fas fa-cart-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4" style="width: 18rem;">
                <img src="https://minuman.com/cdn/shop/products/LABEL-5-CLASSIC-BLACK_645300c7-fc73-4f04-88d3-4c8e7d378fde_600x600_crop_center.jpg?v=1626340274" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Label 5</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Alcohol : 40%</li>
                    <li class="list-group-item">ml : 500ml</li>
                    <li class="list-group-item">price : Rp.550.0000</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link fas fa-credit-card"></a>
                    <a href="#" class="card-link fas fa-cart-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4" style="width: 18rem;">
                <img src="https://sulanginaja.com/wp-content/uploads/2022/08/Batavia_-_LA.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Batavia</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Alcohol : 40%</li>
                    <li class="list-group-item">ml : 600ml</li>
                    <li class="list-group-item">price : Rp.800.0000</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link fas fa-credit-card"></a>
                    <a href="#" class="card-link fas fa-cart-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4" style="width: 18rem;">
                <img src="https://delhidutyfree.co.in/media/catalog/product/cache/d58eb6b6cd0b875591a577c8f7a3618e/2/0/2000397_1_2_jubt2o4d2fmvkavk.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Duoble Black</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Alcohol : 45%</li>
                    <li class="list-group-item">ml : 95ml</li>
                    <li class="list-group-item">price : Rp.1.350.0000</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link fas fa-credit-card"></a>
                    <a href="#" class="card-link fas fa-cart-plus"></a>
                </div>
            </div>
        </div>  

    </div>
</div>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>