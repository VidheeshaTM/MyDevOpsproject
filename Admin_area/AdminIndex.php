<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--font awsome  link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" 
    

    <!-- css file -->
    <link rel="stylesheet" href="Admin.css">
<style>
.admin_image
{
width: 50 px;
object-fit:contain;
}
.footer{
        position:absolute;
        bottom:0;
}
</style>
</head>
<body>
    <!-- navbar -->
     <div class="container-fluid  p-0"> 
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="..\pictures\logo copy.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item"></li>
                           <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            
             <div class="p-3">
                <a href="#"><img src="../pictures/4n.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
             </div>
            <!--  button*10>a.nav-link.text-light.bg-info.my-1 -->
             <div class="button text-center">
                <button class="my-3"><a href="insert_products.php" class="nav-link text-light
                bg-info my-1">Insert Products</a></button>
                <button><a href="AdminIndex.php?insert_catagories"
                class="nav-link text-light 
                bg-info my-1">Insert Categories</a></button>
                <button><a href="AdminIndex.php?insert_services" 
                class="nav-link text-light bg-info my-1">Insert services</a></button>
            
        </div>
     </div>
</div>

<!--fourth child-->
<div class="container my-3">
    <?php
    if(isset($_GET['insert_catagories'])){
        include('insert_catagories.php');
    }
    if(isset($_GET['insert_services'])){
        include('insert_services.php');
    }
    ?>
</div>



   <!--last child -->
<div class="bg-info p-2 text-center footer">
    <p> all rights reserved Designed by EVENT EXPRESS-2024</p>
</div>
</div>


  <!-- bootstrap jss link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
