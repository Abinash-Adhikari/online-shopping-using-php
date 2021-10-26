<?php
    include "admin/dbcon.php";
    include "header.php";
?>
    </header>
    <div class="body">
        <!--Backfround image and sologon-->
            <div class="design">
                <div class="top-view">
                    <img src="photos/design/background1.png" alt="">
                </div>
                <div class="textdesign">
                    <img src="photos/design/text.png" alt="text">
                </div>
                <div class="shop-now">
                    <button>Explore with us</button>
                </div>
            </div>
        <!--Backfround image and sologon-->
        
        <!--why us-->
            <div class="why-us">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="">
                    </div>
                    <div class="text mx-4">
                        <h3>WHY</h3>
                        <h3>ALPHA GADGET</h3>
                    </div>
                </div>
                <div class="content1 d-flex">
                    <div class="secure-payment d-flex">
                        <i class="far fa-check-circle text"></i>
                        <p> SECURE <br> PAYMENT</p>
                    </div>
                    <div class="secure-payment d-flex">
                        <i class="fas fa-truck text"></i>
                        <p> FREE <br> DELIVARY</p>
                    </div>
                    <div class="secure-payment d-flex">
                        <i class="fas fa-wallet text"></i>
                        <p> MONEY BACK <br> GURANTEE</p>
                    </div>
                    <div class="secure-payment d-flex">
                        <i class="fas fa-headset text"></i>
                        <p> ALWALYS <br> SUPPORT</p>
                    </div>
                </div>
            </div>
        <!--Why us-->
        
        
       <!--Trending Proucts-->
       <div class="trending-product">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="line">
                    </div>
                    <div class="text mx-4 text-danger">
                        <h3>FEATURED</h3>
                        <h3>PRODUCTs</h3>
                    </div>
                </div>
                <div class="container p-2">
                    <?php
                    $sql = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn,$sql);
                    while( $row = mysqli_fetch_assoc($result)){ 
                    ?>  
                    <h4 class="linear-background marg "><?php echo $row['name'];?></h4>
                    <div class="owl-carousel ocl2 owl-theme border"> 
                        <?php
                        $prName=$row['name'];
                        $sql3 = "SELECT * FROM $prName ORDER BY '$prName' DESC";
                        $result3 = mysqli_query($conn,$sql3);
                        while( $row3 = mysqli_fetch_assoc($result3)){ 
                        ?>
                        <div class="products">
                            <div class="product-image">
                                <a href="detail.php?id=<?php echo $row3['model'] ?>&table=<?php echo $prName ?>"><img src="<?php echo"admin/"; echo$row3['photo']?>"  alt=""></a>
                            </div>
                            <div class="product-detail text-center">
                                <h5><?php echo $row3['product_name'] ?></h5>
                                <div class="rating text-danger">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <h5><?php echo "Rs ". $row3['selling_price'] ?></h5>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        <!--Trending Proucts-->

        <!--Our Services-->
            <div class="our-services">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="line">
                    </div>
                    <div class="text mx-4">
                        <h3>OUR</h3>
                        <h3>SERVICES</h3>
                    </div>
                </div>
                <div class="container row1">
                    <div class="main-circle">
                        <div class="circle">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <p>Easy Insurance</p>
                    </div>
                    <div class="main-circle">
                        <div class="circle">
                        <i class="fas fa-people-arrows"></i>
                        </div>
                        <p>Personal Customer <br> Adviser</p>
                    </div>
                    <div class="main-circle">
                        <div class="circle">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <p>Refurbish Mobile</p>
                    </div>
                    <div class="main-circle">
                        <div class="circle">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <p>Low Cost EMI</p>
                    </div>
                    <div class="main-circle">
                        <div class="circle">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <p>Book Your Phone</p>
                    </div>
                </div>
            </div>  
        <!--Our Services-->
        
        <!--Trending Proucts-->
            <div class="trending-product">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="line">
                    </div>
                    <div class="text mx-4 text-danger">
                        <h3>TRENDING</h3>
                        <h3>PRODUCT</h3>
                    </div>
                </div>
                <div class="container p-2">
                    <div class="owl-carousel ocl2 owl-theme border">
                    <?php
                    $sql3 = "SELECT * FROM trending ORDER BY 'trending' DESC";
                    $result3 = mysqli_query($conn,$sql3);
                    while( $row3 = mysqli_fetch_assoc($result3)){ 
                    ?>
                        <div class="products">
                            <div class="product-image">
                                <a href="detail.php?id=<?php echo $row3['model'] ?>&table=trending"><img src="<?php echo"admin/"; echo$row3['photo']?>"  alt=""></a>
                            </div>
                            <div class="product-detail text-center">
                                <h5><?php echo $row3['product_name'] ?></h5>
                                <div class="rating text-danger">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <h5><?php echo "Rs ". $row3['selling_price'] ?></h5>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                    
                </div>
            </div>
        <!--Trending Proucts-->
        
        <!--latest New-->
            <div class="latest-new">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="line">
                    </div>
                    <div class="text mx-4">
                        <h3>LATEST</h3>
                        <h3>NEWS</h3>
                    </div>
                </div>
                <div class="latest-image">
                    <img src="photos/design/latest.png" alt="">
                </div>
            </div>
        <!--latest New-->

        <!--Client Review-->
            <div class="client-review">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="line">
                    </div>
                    <div class="text mx-4">
                        <h3>CLIENT</h3>
                        <h3>REVIEW</h3>
                    </div>
                </div>
                <div class="clents-reviews">
                    <div class="box">
                        <img src="photos/design/client-review1.png" alt="">
                    </div>
                    <div class="box">
                        <img src="photos/design/client-review2.png" alt="">
                    </div>
                </div>
            </div>
        <!--Client Review-->
<?php
    include "footer.php";
?>