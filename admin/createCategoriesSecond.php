<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        if(isset($_POST['createCategories'])){
            $catName=$_POST['catName'];
            $catName = $catName."2";
            $sql_check = "SELECT * FROM categories2 WHERE  name = '$catName'";
            $check_result = mysqli_query($conn,$sql_check);
            if(mysqli_num_rows($check_result) == 0){
                $sql="INSERT INTO categories2 (Name) values ('$catName')";
                $result = mysqli_query($conn,$sql);
                if($result== TRUE){
                    $sql2="CREATE TABLE $catName (
                        S_No int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                        product_name varchar(300),
                        photo varchar(500),
                        brand varchar(200),
                        model varchar(100),
                        price int(50),
                        selling_price int(50),
                        quantity int(50),
                        color varchar(50),
                        warrenty int(10),
                        payment_method varchar(100),
                        specification varchar(9000)
                        )";
                    if( mysqli_query($conn,$sql2)){
                        header("location: manage_categoriesSecond.php?table=categoriestablinserted&tablecreated");
                    }else{
                        echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
                    }    
                }else{
                    echo '
                        <script>
                        alert("Sql Error!!");
                        </script>
                    ';
                }
            } else{
                    header("location: manage_categoriesSecond.php?table=1");
            }
            
        }
    }
    else{
        header("location: login.php?sessionOut");
    }
?>