<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--Bootstrap css-->

    <!--Font Awesome css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Font Awesome css-->
    
    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Owl Carousel-->

    <!--Costum css-->
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <!--Costum css-->
    <title>Login/Register</title>
</head>
<body>
    <div class="container border my-4">
        <div class="header text-center">
            <a href="index.php" >
                <img class="m-4" src="photos/design/logo.png" alt="Logo">
            </a>
        </div>
        <div class="row tog  linear-background">
            <div class="col bg-white border">
                <div class="head text-center m-4">
                    <h2 class="m-4">SIGN IN</h2>
                    <div class="form-responsive m-2">
                        <?php $val=$_GET['val'] ?>
                        <form action="signin.php?val=<?php echo $val?>" method="POST">
                            <div class="email col-8 m-auto">
                                Email:
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="password col-8 m-auto mt-2">
                                Password:
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="forget-password m-2">
                               <a href="">Forget Password??</a>
                            </div>
                            <div class="submit-btn col-4 m-auto mt-2 linear-background b-radious">
                                <button class="btn btn-submit form-control text-white" type="submit" name="submit"> Login </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col  m-auto">
                <div class=" text-center m-auto">
                    <div class="container text-white ">
                        <H4>Welcome Back !!</H4>
                        <p>To connected with us login in with your credentials.</p>
                        <br>
                        <p>Not having account. Register here.</p>
                        <div class="submit-btn col-4 m-auto  mt-2 bg-white b-radious text-dark">
                            <button class="btn btn-register form-control "> Register </button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <?php include "registerPage.php" ?>
    </div>
    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!--Bootstrap js-->
    
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery-->

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery-->

    <!--owl carosel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--owl carosel-->

    <!--isotope plugin-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--isotope plugin-->

    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    <script>
        $(".tog").hide();
        $(".btn-register").on("click", function(){
            $(".tog").toggle();
            $(".tog1").toggle();
        });

    </script>

</body>
</html>