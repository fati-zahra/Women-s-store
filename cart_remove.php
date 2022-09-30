<?php
    require 'connection.php';
    session_start();
    //we select the id of the product and id of the user
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    //we delete the selected product from table users_items 
    $delete_query="delete from users_items where user_id='$user_id' and item_id='$item_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    //redirect to cart page
    header('location: cart.php');
?>