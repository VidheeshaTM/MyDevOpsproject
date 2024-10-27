<?php
include('../inlcudes/connect.php');
if(isset($_POST['insert_product'])){
  $product_title=$_POST['product_title'];
  $product_description=$_POST['product_description'];
  $product_keyword=$_POST['product_keyword'];   
  $product_category=$_POST['product_category'];
  $product_services=$_POST['product_services'];
  $product_price=$_POST['product_price'];
  //accessing image
  $product_image=$_FILES['product_image']['name'];
  $product_image_tmp = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($product_image_tmp, "./productImages/$product_image");

    // Insert product details into database
    $insert_product_query="insert into products (product_title,product_description,product_keyword,category_id,service_id,product_image,product_price) values('$product_title','$product_description','$product_keyword','$product_category ' ,'$product_services','$product_image ',' $product_price ')";

    $run_product = mysqli_query($con, $insert_product_query);

    if($run_product){
        echo "<script>alert('Product has been inserted successfully!')</script>";
        echo "<script>window.open('AdminIndex.php?insert_product','_self')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert_products admin dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!--  font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!--css file-->
    <link rel="stylesheet" href="../style.css">


</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
        <div class="form-outline mb-4 w-50 m-auto">
            <lable form="product_title" class="form-lable">Product title</lable>
            <input type="text" name="product_title" id="product_title" class="form-control"
            placeholder="Enter product title" autocomplete="off" required="required">
                
        </div>
        <!--description-->
        <div class="form-outline mb-4 w-50 m-auto">
            <lable form="product_description" class="form-lable">Product description</lable>
                <input type="text" name="product_description" id="product_description" class="form-control"
                placeholder="Enter product description" autocomplete="off" required="required">
            

        </div>
        <!--keyword-->

        <div class="form-outline mb-4 w-50 m-auto">
            <lable form="product_keyword" class="form-lable">Product keyword</lable>
            <input type="text" name="product_keyword" id="product_keyword" class="form-control"
            placeholder="Enter product keyword" autocomplete="off" required="required">
        </div>
        <!--catagories-->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
            <option value="">Select a category</option>
            <?php
            $select_query="Select * from `categories`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
            </select>
        </div>

        <!--services-->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_services" id="" class="form-select">
            <option value="">Select a service</option>
            <?php

            $select_query="Select * from `services`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $service_title=$row['service_title'];
                $service_id=$row['service_id'];
                echo "<option value='$service_id'>$service_title</option>";
            }
            ?>
    
            </select>
        </div>
            
        <!--image-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">product_image</label>
        <input type="file" name="product_image" id="product_image" class="form-control"  required="required">
        </div>
    
        <!--price-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">product price </label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
        </div>
        
        <!--description-->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-secondary mb-3 px-3" value="Insert Product">
        </div>

    </form>
    </div>


    
	
</body>
</html>
