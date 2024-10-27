<!--connect file-->
<?php
include('./inlcudes/connect.php');
include('functions/common_functions.php');
?>



<!DOCTYPE html>
<html lang=”en”>
<head>
            <meta charset=”UTF-8”>
            <meta http-equiv=”X-UA-Compatible” contents=”IE=edge”>
            <meta name=”viewport”content=”width=device-width, initial-scale=1.0”>
            <title>Event management Website using PHP and MySql.</title>
            <!— bootstrap CSS link -- >
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!--  font awesome link  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!--css file-->
            <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/53b49731-e6fe-4dab-bda2-36e683abf18d/webchat/config.js" defer></script>


<!--navbar-->
<div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="./pictures/logo.png" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price:<?php total_cart_price();?>/-</a>
        </li>
      <form class="d-flex" action="search_products.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" values="search" class="btn btn-outline-line" name="search_data_product">

      </form>
    </div>
  </div>
</nav>
<?php
cart();

?>
<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-color2">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
  </li>

</ul>
</nav>

<!-- third child -->
<div class="bg-color4">
<h3 class ="text-center">The Event Experts</h3>
<p class="text-center"> Unforgettable events,Effortlessly managed </p>
</div>

<!-- fourth child-->
<div class="row px-3">
<div class="col-md-10">
<div class="row">
    <div class="col-md-4">
   

</div>
</div>


  <!--fetching products-->
  <?php
  //calling function
view_details();
get_unique_categories();
get_unique_service();
?>
<!--row end-->
</div>
  <!--column end-->



    <div class="col-md-2 bg-color2 p-0">
    <!--brands to be displayed-->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-color4">
    <a href="#" class="nav-link text-light"><h4>Services
    </h4></a>
    </li>
<?php
getservices()
?>
</ul>


<!-- Categoreys to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-color4">
    <a href="#" class="nav-link text-light"><h4>catagories
    </h4></a>
    </li>
    <?php
getcategories()
?>

  </ul>
</div>
  </div>

  
</div>


 
    
  



<!--last child-->
<div class="bg-color4 p-3 text-center">
    <p> all rights reserved Designed by EVENT EXPRESS-2024</p>
</div>
</div>
<! -- bootstrap js link - ->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
