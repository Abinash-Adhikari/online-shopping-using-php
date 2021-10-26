<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        $tableName=$_GET['table'];
        if( $tableName==""){
            $tableName="laptop";
        }
        $productName=$_GET['product'];
        $sql = "DELETE FROM `$tableName` WHERE product_name = '$productName' ";
        $query = mysqli_query($conn,$sql);
        if($query==TRUE){
            header('location: manage_products.php?table='.$tableName);
        }
        else
        {
            echo "error";
        }
    }
    else{
        header("location: login.php?sessionOut");
    }
 ?>