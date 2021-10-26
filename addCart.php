<?php
    include "dbcon.php";
    if($_SESSION['user']!="")
    {
        $item =1;
        $table=$_GET['table'];
        $model=$_GET['id'];
        $email=$_SESSION['user'];
        $sql = "INSERT INTO cart (cat_table,productid,email,item_number) VALUES( '$table','$model','$email','$item')";
        $result = mysqli_query($conn,$sql);
        if($result==TRUE){
            header("location: addToCart.php");
        }else{
            header("location: detail.php?id=$model&table=$table");
        }
    }else {
        header("location: loginPage.php?val=addToCart");
    }
    

    // $sql = "SELECT * FROM $table where moodel ='$model' ";
    // $result = mysqli_query($conn,$sql);
    // while($row=mysqli_fetch_assoc($result)){

    //     $productName = $row['product_name'];
    //     $photoDestionation= $row['photo'];
    //     $brandName= $row['brand'];
    //     $model= $row['model'];
    //     $price= $row['price'];
    //     $sellingPrice= $row['selling_price'];
    //     $quantity= $row['quantity'];
    //     $color= $row['color'];
    //     $warrenty= $row['product_name'];
    //     $paymentMethod= $row['product_name'];
    //     $specification= $row['product_name'];
    //     $sessionName= $row['product_name'];
    // }

    /*
     $sql_insert = "INSERT INTO  $tableName (product_name,photo,brand,model,price,selling_price,quantity,color,warrenty,payment_method,specification,seller_name) 
    VALUES('$productName','$photoDestionation','$brandName','$model','$price','$sellingPrice','$quantity','$color','$warrenty','$paymentMethod','$specification','$sessionName')";
    $result = mysqli_query($conn,$sql_insert);

    */
?>