<?php
//including connect file
include("./inlcudes/connect.php");
include('./color.php');
//geting products
function getproducts()
{
    global $con;
    //checking if category is selected
    if(!isset($_GET['category'])){
        if(!isset($_GET['service'])){
$select_query="select * from products order by rand() LIMIT 0,6";
$result_query=mysqli_query($con,$select_query);
    
     //$row=mysqli_fetch_assoc($result_query);
     //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $category_id=$row['category_id'];
    $service_id=$row['service_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];
    echo " <div class='col-md-4 mb-2'>
    <div class='card' >
    <img src='./admin_area/productImages/$product_image' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price:Rs $product_price/-</p>
    <a href='index1.php?add_to_cart=$product_id' class='btn btn-dark my-2'>Add to cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>


    </div>
</div>
</div>";
}
}
}
}

// getting unique categories

function get_unique_categories()
{
    global $con;
    //checking if category is selected
    if(isset($_GET['category'])){
    $category_id=$_GET['category'];
$select_query="select * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);{
    if($num_of_rows==0)
    {
        echo "<h2 class='text-center'>No stock available for this category</h2>";
    }
}
    
     //$row=mysqli_fetch_assoc($result_query);
     //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $category_id=$row['category_id'];
    $service_id=$row['service_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];
    echo " <div class='col-md-4 mb-2'>
    <div class='card' >
    <img src='./admin_area/productImages/$product_image' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price:Rs $product_price/-</p>
    <a href='index1.php?add_to_cart=$product_id' class='btn btn-dark my-2'>Add to cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>

    </div>
</div>
</div>";
}
}
}

//getting all products
function get_all_products()
{
    global $con;
    //checking if category is selected
    if(!isset($_GET['category'])){
        if(!isset($_GET['service'])){
$select_query="select * from products order by rand() ";
$result_query=mysqli_query($con,$select_query);
    
     //$row=mysqli_fetch_assoc($result_query);
     //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $category_id=$row['category_id'];
    $service_id=$row['service_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];
    echo " <div class='col-md-4 mb-2'>
    <div class='card' >
    <img src='./admin_area/productImages/$product_image' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price:Rs $product_price/-</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-dark my-2'>Add to cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>

    </div>
</div>
</div>";
}
}
}
}


//getting unique services
function get_unique_service()
{
    global $con;
    //checking if category is selected
    if(isset($_GET['service'])){
    $service_id=$_GET['service'];
$select_query="select * from `products` where service_id=$service_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
        echo "<h2 class='text-center'>No stock available for this service</h2>";
    }

    
     //$row=mysqli_fetch_assoc($result_query);
     //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $category_id=$row['category_id'];
    $service_id=$row['service_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];
    echo " <div class='col-md-4 mb-2'>
    <div class='card' >
    <img src='./admin_area/productImages/$product_image' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price:Rs $product_price/-</p>
    <a href='index1.php?add_to_cart=$product_id' class='btn btn-dark my-2'>Add to cart</a>
   <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>

    </div>
</div>
</div>";
}
}
}









//displaying brands in sidenav
function getservices(){
    global $con;
$select_services="Select * from `services`";
$result_services=mysqli_query($con,$select_services);
//$row_data=mysqli_fetch_assoc($result_services);
//echo $row_data['service_title'];
//echo $row_data['service_title'];
while($row_data=mysqli_fetch_assoc($result_services))
{
  $service_title=$row_data['service_title'];
  $service_id=$row_data['service_id'];
  echo  "<li class='nav-item'>
    <a href='index1.php?service=$service_id' class='nav-link text-light'>$service_title</a>
    </li>";
}
}

//displaying categories in sidenav
function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
//$row_data=mysqli_fetch_assoc($result_categories);
//echo $row_data['service_title'];
//echo $row_data['service_title'];
while($row_data=mysqli_fetch_assoc($result_categories))
{
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo  "<li class='nav-item'>
    <a href='index1.php?category=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
}
}


//search products
function search_products()
{
    global $con;
if(isset($_GET['search_data_product'])){
$search_data_value=$_GET['search_data'];
$search_query="select * from `products` where product_keyword like '%$search_data_value%' ";
$result_query=mysqli_query($con,$search_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
echo"<h2 class='text-center text-dark'>NO RESULTS MATCHED! NO PRODUCTS FOUND IN THIS CATEGORY!</h2>";
}
while($row=mysqli_fetch_assoc($result_query))
{
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$category_id=$row['category_id'];
$service_id=$row['service_id'];
$product_image=$row['product_image'];
$product_price=$row['product_price'];
echo " <div class='col-md-4 mb-2'>
<div class='card' >
<img src='./admin_area/productImages/$product_image' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_description</p>
<p class='card-text'>Price:Rs $product_price/-</p>
<a href='index1.php?add_to_cart=$product_id' class='btn btn-dark my-2'>Add to cart</a>
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
</div>
</div>
</div>";
}
}
}

// view more function
function view_details(){
    global $con;
    //checking if category is selected
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['service'])){
            $product_id=$_GET['product_id'];
$select_query="select * from `products` where product_id=$product_id";
$result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $category_id=$row['category_id'];
    $service_id=$row['service_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];
    echo " <div class='col-md-4 mb-2'>
    <div class='card' >
    <img src='./admin_area/productImages/$product_image' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price:Rs $product_price/-</p>
    <a href='index1.php?add_to_cart=$product_id' class='btn btn-dark my-2'>Add to cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>


    </div>
</div>
</div>";
}
}
}
}  
}

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  


//cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id=$_GET['add_to_cart'];
        $select_query="select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows>0){
    echo"<script>alert('Item is already present in the cart')</script>";
    echo "<script>window.open('index1.php','_self')</script>";}
    else{
        $insert_query="insert into `cart_details`(product_id,ip_address,quantity)values($get_product_id,'$get_ip_add',0)";
        $result_query=mysqli_query($con,$insert_query);
        echo"<script>alert('Item is added to cart')</script>";
        echo"<script>window.open('index1.php','_self')</script>";
    }
    }
    }

//function to get cart item number
    function cart_item(){
        if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIPAddress();
        $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query=mysqli_query($con, $select_query);
        $count_cart_items=mysqli_num_rows($result_query);
        }
        else
        {
            global $con;
            $get_ip_add = getIPAddress();
            $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
            $result_query=mysqli_query($con, $select_query);
            $count_cart_items=mysqli_num_rows($result_query);
        }
        echo $count_cart_items;
    }
//total price funtion 
function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress();
    $total_price=0;
    $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $result=mysqli_query($con, $cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="select * from `products` where product_id='$product_id'";
        $result_products=mysqli_query($con, $select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $product_values=array_sum($product_price);
            $total_price+=$product_values;
        }
    }
    echo $total_price;
}



    





?>
<link rel="stylesheet" href="style.css">








