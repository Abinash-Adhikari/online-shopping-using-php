<?php
        include "dbcon.php";
        if(isset($_POST['reg-submit']))
        {
            $fullname = $_POST['fullName'];
            $email = $_POST['email'];
            $phoneNo = $_POST['phoneNo'];
            $address = $_POST['address'];
            $password = $_POST['password'];

            $sql3 = "SELECT * FROM admin WHERE email='$email'";
            $result1 = mysqli_query($conn,$sql3);
            if(mysqli_num_rows($result1) == 0){
                $sql2 = "INSERT INTO admin (fullname, email, phoneNo, address, password) VALUES ('$fullname','$email','$phoneNo','$address','$password')";
                $result = mysqli_query($conn,$sql2);
                if ($result === TRUE) 
                    {
                        header("location: login.php");
                    } 
                else 
                {
                    echo '
                    <script>
                        $(".error").html("Connnection Error Try Again...!!");
                        $(".adm-register").show();
                        $(".adm-login").hide();
                        $(".btn-login").css({"background-color":"white","color":"rgb(230, 115, 115)"});
                        $(".btn-register").css({"background-color":"rgb(230, 115, 115)","color":"white"});
                    </script>
                    ';
                }
            }
            else {
                echo '
                <script>
                alert("email alredy exist");
                </script>
                ';
                header("location: login.php");
            }
        }
        else{
            echo 'Choose user type.';
        }
    ?>