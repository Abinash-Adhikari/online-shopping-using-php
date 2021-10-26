<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        if(isset($_POST['change']))
        {
            $oldPassword=$_POST['oldPassword'];
            $newPassword=$_POST['newPassword'];
            $user=$_SESSION['fullname'];
            $sql= "SELECT `password` FROM user WHERE `fullname` = '$user'";
            $result= mysqli_query($conn,$sql);
            $row= mysqli_fetch_assoc($result);
            if($row==TRUE)
             $db =$row['password'];
             echo $db;
            $confirmPassword=$_POST['confirmPassword'];
            if($newPassword == $confirmPassword)
            {
                
            }
            else{
                header("loction: ");
            }
        }
        else{
            
        }
    }
    else{
        header("location: login.php?sessionOut");
    }
?>