<!-- login php -->
<?php 
    include "dbcon.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] == $email && $row['password'] == $password ){
                $_SESSION['email'] = $row['email'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['fullname'] = $row['fullname'];
                header("location: index.php");
            }else{
                header("location: login.php?error=databaseError");
            }
        }else{
            header("location: login.php?error=inputError");
        }   
    }
    else {
        header("location: login.php?error");
    }
?>
<!-- login php --> 