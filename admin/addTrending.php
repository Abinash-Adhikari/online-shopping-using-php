

<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        include "dbcon.php";
        if(isset($_POST['submit_detail']))
        {
           //for photo
           $file = $_FILES['photo'];
           $photoName = $_FILES['photo']['name'];
           $photoTempName = $_FILES['photo']['tmp_name'];
           $photoSize = $_FILES['photo']['size'];
           $photoError = $_FILES['photo']['error'];
           $phototype = $_FILES['photo']['type'];
   
           //fetch data from html
           $tableName=$_POST['tablename'];
           $productName = $_POST['productname'];
           $brandName = $_POST['brandname'];
           $model = $_POST['model'];
           $price = $_POST['price'];
           $marketPrice = $_POST['sellingprice'];
           $quantity = $_POST['quantity'];
           $warrenty = $_POST['warrenty'];
           $paymentMethod = $_POST['payMethod'];
           $sellingPrice = $_POST['sellingprice'];
           $color = $_POST['color'];
           $specification = $_POST['detail'];
           

           //Session Name
            $sessionName=$_SESSION['fullname'];

           $photoExt = explode(".",$photoName);
           $photoActualExt = strtolower(end($photoExt));
           $allowed = array('jpg','jepg','png');
           if(in_array($photoActualExt,$allowed)){
               if($photoError === 0){
                   if($photoSize < 9000000){
                       $photoNewName = uniqid('',true).".".$photoActualExt;
                       $photoDestionation = 'uploads/'.$photoNewName;
                       move_uploaded_file($photoTempName,$photoDestionation);
                       if(mysqli_connect_error()){
                           die('connect error('.mysqli_connection_errno.')'.mysqli_connection_error());
                       }
                       else{
                           $sql_insert = "INSERT INTO  trending (product_name,photo,brand,model,price,selling_price,quantity,color,warrenty,payment_method,specification,seller_name) 
                           VALUES('$productName','$photoDestionation','$brandName','$model','$price','$sellingPrice','$quantity','$color','$warrenty','$paymentMethod','$specification','$sessionName')";
                           $result = mysqli_query($conn,$sql_insert);
                           if($result == TRUE){
                               header("location: add_trending.php");
                           }
                           else{
                               echo '
                           <script>
                           alert("Db-connection Error");
                           </script>
                           ';
                           }
                       }
                   } 
                   else{
                       echo '
                           <script>
                           alert("photo size");
                           </script>
                           ';
                   }
   
               } 
               else {
                   echo '
                           <script>
                           alert("Photo error");
                           </script>
                           ';
               }
   
           } 
           else {
               echo '
                           <script>
                           alert("Photo Extension");
                           </script>
                           ';
           }
        }
  
    }
    else{
        header("location: login.php?sessionOut");
    }
?>
