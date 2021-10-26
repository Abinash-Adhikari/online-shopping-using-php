
<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        include "dbcon.php";
        if(isset($_GET['Name']) && $_GET['Name'] != '' ){
            $name = $_GET['Name'];
            $delete_cat_sql = "DELETE FROM categories WHERE Name= '$name'";
            $delete_result = mysqli_query($conn,$delete_cat_sql);
            $delete_table_sql="drop table $name";
            $delete_table_result = mysqli_query($conn,$delete_table_sql);
            header("location: manage_categories.php?table=".$name."Deleted");
        }
    }
    else{
        header("location: login.php?sessionOut");
    }
?>