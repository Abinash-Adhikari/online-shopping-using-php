<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        include "header.php";
?>
<div class="body-content">
    <?php
        include "left_body.php";
        $oldError="";
        $newError="";
        if(isset($_POST['change']))
        {
            
            $oldPassword=$_POST['oldPassword'];
            $newPassword=$_POST['newPassword'];
            $user=$_SESSION['fullname'];
            $confirmPassword=$_POST['confirmPassword'];
            $sql= "SELECT `password` FROM user WHERE `fullname` = '$user'";
            $result= mysqli_query($conn,$sql);
            $row= mysqli_fetch_assoc($result);
            $db =$row['password'];
            if($oldPassword == $db)
            {
                if($newPassword == $confirmPassword)
                {
                    $sql2 = "UPDATE user SET `password` = '$newPassword' WHERE `fullname` = '$user'";
                    $result2 = mysqli_query($conn,$sql2);
                    if($result2==TRUE){
                        $newError = "Successfully Done!!";
                        // unset($_SESSION['fullname']);
                        // header("location: login.php");
                    }else{
                        $newError = "Password Update Error!!";
                    }
                }
                else
                {
                    $newError="Conformation Password Wrong!!";
                }
            }
            else{
                $oldError="Wrong Password!!";
            }
        }
        else
        {
    
        }
    ?>
    <div class="change-password col-9 m-2 my-4">
        <div class="col-6 m-auto my-4 text-center b-color bg-white">
            <div class="bg-second m-3 p-2">
                <h4>Change Password</h4>
            </div>
            <div class="form m-3">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="old-password col-8 m-auto my-2">
                        <label for="oldpsd"> <h6>Old Password</h6> </label>
                        <input type="password" class="form-control" id="oldpsd" name="oldPassword" required>
                    </div>
                    <div class="error-area col-6 m-auto my-2 text-danger">
                        <?php echo $oldError ?>
                    </div>
                    <div class="New-password col-8 m-auto my-2">
                        <label for="newpsd"> New Password </label>
                        <input type="password" class="form-control" id="newpsd" name="newPassword" required>
                    </div>
                    <div class="confirm-password col-8 m-auto my-2">
                        <label for="cnfrmpsd"> Confirm Password </label>
                        <input type="password" class="form-control" id="cnfrmpsd" name="confirmPassword" required>
                    </div>
                    <div class="error-area col-6 m-auto my-2 text-danger">
                        <?php echo $newError ?>
                    </div>
                    <div class="button-change col-6 m-auto  my-2">
                        <button class="btn btn-change form-control bg-second my-3" type="submit" name="change">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php



    include "footer.php";
    }
    else{
        header("location: login.php?sessionOut");
    }
?>