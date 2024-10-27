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
            <title>Event management Website-cart</title>
            <!— bootstrap CSS link -- >
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!--  font awesome link  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!--css file-->
            <link rel="stylesheet" href="style.css">
    <style>
    .cart_image{
    width:100px;
    height:100px;}
    </style>
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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
    
  
    </div>
  </div>
</nav>
<!--calling cart function-->
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

<!--fourth child-->

<div  class="container">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
   
                <!--php code to display  dynamic data-->
                <?php
        global $con;
    $get_ip_add = getIPAddress();
    $total_price=0;
    $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $result=mysqli_query($con, $cart_query);
    $result_count=mysqli_num_rows($result);
    if($result_count>0){
        echo "         <thead>
                <tr>
                    <th>Product Title</th>
                    
                    <th>product price</th>
                    <th>select</th>
                   
                    <th>Remove</th>
                   
                </tr>
            </thead>
            <tbody>";
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="select * from `products` where product_id='$product_id'";
        $result_products=mysqli_query($con, $select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $price_table=$row_product_price['product_price'];
            $product_title=$row_product_price['product_title'];
           
            $product_values=array_sum($product_price);
            $total_price+=$product_values;
   
    ?>
                <tr>
                    <td><?php echo $product_title?></td>
            

                    
                    <td><?php echo $price_table?>/-</td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"></td> 
                  
                    <td>
                        <input type="submit" value="remove" name="remove_cart" class="bg-color4 px-3 py-2 border-0 mx-3">    
                    </td>
                </tr>
                <?php }}} 
                
                else{
                    echo "<h2 class='text-center '>No service booked yet</h2>";
                }?>
            </tbody>
        </table>
        <!--subtotal-->
        <div class="d-flex mb-5">

        <?php
                global $con;
                $get_ip_add = getIPAddress();
                $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
                $result=mysqli_query($con, $cart_query);
                $result_count=mysqli_num_rows($result);
                echo"<h4 class='px-3'>Sub Total: $total_price/-</h4>";
        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Test</title>
</head>
<body>
<input type="button" onclick="window.location.href='index1.php'" name="continue shopping" value="continue shopping" class="bg-color4 px-3 py-2 border-0 mx-3">
<input type="button" onclick="window.location.href='payment_processing.php'" name="checkout" value="checkout" class="bg-color4 px-3 py-2 border-0 mx-3">
    
</body>
</html>


        </div>
    </div>
</div>
        </form>
                <?php
                    global $con;
                    function remove_cart_item(){
                      global $con;
                      if (isset($_POST["removeitem"])) {
                            foreach($_POST['removeitem'] as $remove_id){
                              echo   $remove_id;
                              $delete_query="delete from cart_details where product_id=$remove_id ";
                              $run_delete=mysqli_query($con,$delete_query);
                              if($run_delete){
                                echo "<script>window.open('cart.php','_self')</script>";
                              }
                            }
                        }
                    }
                    echo $remove_item=remove_cart_item();
?>


        

<!--last child-->

<! -- bootstrap js link - ->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

    

      