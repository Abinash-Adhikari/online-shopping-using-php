<!-- login php -->
<?php 
    include "dbcon.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] == $email && $row['password'] == $password ){
                $_SESSION['user'] = $row['email'];
                $_SESSION['userPassword'] = $row['password'];
                $path=$_GET['val'];
                $table=$_GET['table'];
                $model=$_GET['id'];
                header("location: $path.php?id=$model&table=$table");
            }else{
                header("location: loginPage.php?error=databaseError");
            }
        }else{
            header("location: loginPage.php?error=inputError");
        }   
    }
    else {
        echo '<script> alert("Submit Button not clicked."); </script>';
    }
?>
<!-- login php --> 