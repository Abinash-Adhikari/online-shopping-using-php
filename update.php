<?php
    include "dbcon.php";
    $model=$_GET['model'];
    $val=$_GET['val'];
   if($val==0){
        $sql = "UPDATE cart SET item_number = item_number-1 WHERE productid = '$model'";
        $result = mysqli_query($conn, $sql);
    } 
    else {
        $sql = "UPDATE cart SET item_number = item_number + 1 WHERE productid = '$model'";
        $result = mysqli_query($conn, $sql);
    }
    if($result==true){
        header("location: addToCart.php");
    } else {
        header("location: addToCart.php?sqlError");
    }

?>