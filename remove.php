<?php
    include "dbcon.php";
    $productId = $_GET['model'];
    $sql = "DELETE FROM `cart` WHERE productid = '$productId' ";
   // $sql ="DELETE FROM cart WHERE productid ='$productId'";
    $result = mysqli_query($conn, $sql);
    if($result == TRUE){
        header("location: addToCart.php");
    }
    else{
        header("location : addToCart.php?productNotRemoved");
    }
    
?>