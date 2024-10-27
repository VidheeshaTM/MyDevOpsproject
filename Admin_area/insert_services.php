<?php
include('../inlcudes/connect.php');
if(isset($_POST['insert_service']))
{
    $service_title = $_POST['service_title'];
    //select data from database
    $select_query = "Select * from `categories` where service_title = ' service_title'";
    $result_select = mysqli_query($con, $select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0)
    {
        echo "<script>alert('This service is already present in the database')</script>";
    }else{
    $insert_query = "insert into `categories`  service_title) values (' service_title')";
    $result = mysqli_query($con,$insert_query);
    if($result)
    {
        echo "<script>alert( service has been inserted successfully')</script>";
    }

    }
}

?>
<h2 class="text-center">Insert Services</h2>
<form action ="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
<span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
<input type="text" class="form-control" name="service_title" placeholder="Insert services" aria-label="services" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

<input type="submit" class="bg-info border-0 p-2 my-3" name="service_title" value="Insert services" >


</div>