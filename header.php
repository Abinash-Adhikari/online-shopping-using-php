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
    <title>ALPHA-GADGET</title>
</head>
<body>

    <header>
        <!--header navbar-->
        <div class="container-fluid">
            <div class="navbar">
                <div class="navbar-brand">
                    <a href="index.php">
                        <img src="photos/design/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="functions">
                    <button class="btn-products">TRENDING PRODUCTS</button>
                    <button class="btn-sells">SELLS PRODUCTS</button>
                    <!-- <a class="mx-2" href="admin/index.php">SELLS PRODUCT</a> -->
                    <button class="btn-compare">COMPARE PRODUCTS</button>
                </div>
                <div class="login-register">
                    <button class="userLogin">LOGIN/REGISTER</button>
                </div>
                <div class="login-out">
                    <a href="logout.php"><button class="btn logout text-black">LOGOUT</button></a>
                </div>
                <div class="search-bar ">
                    <form action="search.php" method="POST">
                        <input type="search" placeholder="search" name="search"><button class="bt" type="submit" ><i class="fas fa-search "></i></button></i>
                    </form>
                </div>
                <div class="cart">
                    <a href="addToCart.php"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        <!--header navbar-->