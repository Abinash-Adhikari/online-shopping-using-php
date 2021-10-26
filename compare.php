<?php
    include "admin/dbcon.php";
    include "header.php";
?>
    </header>
    <div class="body">
        
        <!--Featured Product-->
        <div class="featured-product">
                <div class="my-5 d-flex">
                    <div class="line">
                        <img src="photos/design/line1.png" alt="line">
                    </div>
                    <div class="text mx-4">
                        <h3>COMPARE</h3>
                        <h3>PRODUCTS</h3>
                    </div>
                </div>
                <div class="containe cont-product">
                    <div id="filters" class="button-group items">
                        <?php
                            $sql = "SELECT * FROM `categories`";
                            $result = mysqli_query($conn,$sql);
                           while( $row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <a href="?class=<?php echo $row['name'];?>"><button class="btn cItems" data-filter=".<?php echo $row['name']?>"><?php echo $row['name']?></button></a>
                        <?php
                           }
                        ?>
                    </div>
                    <div class="m-auto ">
                        <div class="products-show  ">
                            <div class="row">
                                <div class="border row col m-auto">
                                    <h4 class="t-head text-center">New Products</h4>
                                    <?php
                                        if($_GET['class']==NULL){
                                            $_GET['class']="Laptop";
                                        }
                                        $class = $_GET['class'];
                                        $class=strtolower($class);
                                        $sql2 = "SELECT * FROM $class ORDER BY '$class' DESC";
                                        $result2 = mysqli_query($conn,$sql2);
                                        while( $row2 = mysqli_fetch_assoc($result2)){ 
                                    ?>
                                        <div class="hide">
                                            <div class="col image text-center">
                                                <img src="<?php echo"admin/"; echo$row2['photo']?>" style="height:15rem; width:18rem; margin:1rem" alt="">
                                            </div>
                                            <div class="col details text-center m-2">
                                                <h5 class=""><?php echo $row2['product_name'] ?></h5>
                                                <div class="rating  font-size-12 text-danger">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                </div>
                                                <div class="col-6 m-auto">
                                                    <table class="table">
                                                        <tr class=" trtd  font-size-14">
                                                            <td>M.R.P </td>
                                                            <td> <strike><?php echo $row2['price'] ?></strike> </td>
                                                        </tr>
                                                        <tr class="trtd">
                                                            <td>Deal Price</td>
                                                            <td class="font-size-18 text-danger"><span>&nbsp;<?php echo $row2['selling_price'] ?></span><small
                                                                class="text-dark font-size-8">&nbsp;&nbsp;Inclusive all tax</small> 
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="row m-auto">
                                                    <div class="col-6">
                                                        <a href="addCart.php?id=<?php echo $row2['model'] ?>&table=<?php echo $class ?>"><button class="btn btn-danger form-control">Add To Cart</button></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="detail.php?id=<?php echo $row2['model'] ?>&table=<?php echo $class ?>"><button class="btn btn-warning form-control">Explore</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                                <div class="border row col m-auto">
                                    <h4 class="t-head text-center">Used Products</h4>
                                    <?php
                                        if($_GET['class']==NULL){
                                            $_GET['class']="Laptop";
                                        }
                                        $class = $_GET['class'];
                                        $class=$class."2";
                                        $class=strtolower($class);
                                        $sql2 = "SELECT * FROM $class ORDER BY '$class' DESC";
                                        $result2 = mysqli_query($conn,$sql2);
                                        while( $row2 = mysqli_fetch_assoc($result2)){ 
                                    ?>
                                        <div class="hide2 ">
                                            <div class="col image text-center">
                                                <img src="<?php echo"admin/"; echo$row2['photo']?>" style="height:15rem; width:18rem; margin:1rem" alt="">
                                            </div>
                                            <div class="col details text-center m-2">
                                                <h5 class=""><?php echo $row2['product_name'] ?></h5>
                                                <div class="rating  font-size-12 text-danger">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                </div>
                                                <div class="col-6 m-auto">
                                                    <table class="table">
                                                        <tr class=" trtd  font-size-14">
                                                            <td>M.R.P </td>
                                                            <td> <strike><?php echo $row2['price'] ?></strike> </td>
                                                        </tr>
                                                        <tr class="trtd">
                                                            <td>Deal Price</td>
                                                            <td class="font-size-18 text-danger"><span>&nbsp;<?php echo $row2['selling_price'] ?></span><small
                                                                class="text-dark font-size-8">&nbsp;&nbsp;Inclusive all tax</small> 
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="row m-auto">
                                                    <div class="col-6">
                                                    <a href="addCart.php?id=<?php echo $row2['model'] ?>&table=<?php echo $class ?>"><button class="btn btn-cart btn-danger text-white form-control"> Add To Cart </button></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="detail.php?id=<?php echo $row2['model'] ?>&table=<?php echo $class ?>"><button class="btn btn-warning form-control">Explore</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="m-auto text-center">
                                <button class=" text-black m-auto loadMore"> <i class="fas fa-chevron-down"></i> Load More </button>
                        </div>
                    </div>
                </div>

            </div>
        <!--Featured Product-->
        
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
<?php
    include "footer.php";
?>