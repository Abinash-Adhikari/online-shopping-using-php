<?php
    include "admin/dbcon.php";
    include "header.php"
?>
<div class="container">
    <?php
       $value = $_GET['id'];
       $table = $_GET['table'];
        $sql = "SELECT * FROM $table WHERE model = '$value'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $prId=$row['model'];
    ?>
    <main id="main-site body">
        <!--product-->
            <section id="product" class=" my-3 py3">
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="edit p-3">
                            <img src="<?php echo"admin/"; echo$row['photo']?>"  alt="mi" class="img-fluid">
                        </div>
                        <div class="row m-2">
                            <div class="col">
                                <a href="sellProduct.php?id=<?php echo $prId?>&table=<?php echo $table?>"><button class="btn btn-sellP btn-buy btn-danger text-white form-control"> Order Now </button></a>
                            </div>
                            <div class="col">
                                <a href="addCart.php?id=<?php echo $prId?>&table=<?php echo $table?>"><button class="btn btn-cart btn-warning text-white form-control"> Add To Cart </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 my-3 py-3">
                        <h5 class="font-size-20"><?php echo $row['product_name'] ?></h5>
                        <small><?php echo $row['brand'] ?></small>
                        <div class="d-flex">
                        <div class="rating text font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        </div>
                        <hr>
                        <!-- product price-->
                        <table>
                        <tr class=" trtd font-size-14">
                            <td>M.R.P </td>
                            <td> <strike><?php echo $row['price'] ?></strike> </td>
                        </tr>
                        <tr class="trtd font-size-14">
                            <td>Deal Price</td>
                            <td class="font-size-18 text-danger"><span>&nbsp;<?php echo $row['selling_price'] ?></span><small
                                class="text-dark font-size-8">&nbsp;&nbsp;Inclusive all tax</small> </td>
                        </tr>
                        <tr class="trtd font-size-14">
                            <td>You Saved</td>
                            <?php $save = $row['price']- $row['selling_price'] ?>
                            <td class="font-size-18 text-warning"><span>&nbsp;<?php echo $save ;?></td>
                        </tr>
                        </table>
                        <!-- product price-->

                        <!-- policy-->
                        <div class="privacy">
                            <div class="d-flex">
                                <div class="return text-center mx-5">
                                    <div class="font-size-20 my-2">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="policy">10 days <br> Replacement</a>
                                </div>
                                <div class="return text-center mx-5">
                                    <div class="font-size-20 my-2">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="policy">Daily tution <br> Delivered </a>
                                </div>
                                <div class="return text-center mx-5">
                                    <div class="font-size-20 my-2">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="policy"><?php echo $row['warrenty'] ?> Months <br> Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- policy-->
                        <hr>


                        <!--order-details-->
                            <!-- <div id="order-details" class="d-flex flex-column text-dark">
                            <small>Delivary by : March 29-April 1</small>
                            <small>Sold by : ABC Company (4.5 out of f | 19,135 rating)</a> </small>
                            <small><i class="fas fa-map-marker-alt color-primary">&nbsp;&nbsp;Delivered to Customer - 40001</i></small>
                            <hr>
                            </div> -->
                        <!--order-details-->


                        <div class="row">
                            <div class="col-6">
                                <!--Color-->
                                <div class="color">
                                    <div class="d-flex justify-content-around">
                                        <h5>Color:</h5>
                                        <div class="text-center rounded-pill" style="height:3rem;width:3rem; background-color:<?php echo $row['color']?>"></div>
                                    </div>
                                </div>
                                <!--Color-->
                            </div>
                            <div class="col-6">
                                <div class="qty d-flex">
                                <h6 class="font-baloo">Qty</h6>
                                <div class="px-4 d-flex font-rale">
                                    <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    <input type="text" class="qty_input border text-center px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                    <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!--Size-->
                            <!-- <div class="size my-3">
                            <h6 class="font-baloo">Size:</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                            </div> -->
                        <!--Size-->
                        <div class="col-12">
                            <hr>
                            <h4 class="font-rubik">Product Description</h4>
                            <hr>
                            <h4><strong><?php echo $row['product_name'] ?>&nbsp Specification: </strong></h4>
                            <ul>
                                <li><?php echo $row['specification'] ?></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--product-->

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
    </main>
</div>
<?php
    include "footer.php";
?>