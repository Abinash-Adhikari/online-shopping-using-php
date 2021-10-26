<?php 
    include "dbcon.php";
    
    $data = $_GET['id'];
    $sql = "DELETE FROM cart WHERE productid = '$data'";
    $result = mysqli_query($conn,$sql);
    if($result== TRUE){
        header("location: addToCart.php?done");
    }else{
        header("location: addToCart.php?NotDeleted!!");
    }

?>