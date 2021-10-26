<?php
    include "dbcon.php";
    if(isset( $_SESSION['fullname']) && ($_SESSION['fullname']!=""))
    {
        include "header.php";
?>

<div class="body-content">
    <?php
        include "left_body.php";
    ?>

    <!--Manage Product-->
        <div class="manage-product col-9 m-2">
            <div class="row">
                <div class="allCategories col-3 b-color bg-white my-2">
                    <div class="table-top text-center bg-second m-2 my-3 p-1">
                        <h4> Categories Name </h4> 
                    </div>
                    <div class="table-responsive bg-white ">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-striped ">
                                <thead class="thead text-center">
                                    <tr>
                                        <th class="col">S.No</th>
                                        <th class="col">Categories</th>
                                    </tr>
                                </thead>
                                <?php
                                    $categories_show_sql="SELECT * FROM categories2 order by 'categories2' desc";
                                    $categories_show = mysqli_query($conn,$categories_show_sql);
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($categories_show)) 
                                    {
                                ?>
                                
                                <tbody class="tbody text-center">
                                    <tr>
                                        <td class="col"><div> <?php echo $i ?> </div></td>
                                        <td class="col"><div><a href="?table=<?php echo $row['name'] ?>"><button class="btn btn-item"><?php echo $row['name'] ?></button></div></a></td>
                                    </tr>
                                </tbody>
                                <?php 
                                    $i++;
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mn-table col-9 my-2">
                    <div class="table-title b-color bg-white">
                        <div class="showProduct-title text-center m-2 p-1 d-flex bg-second">
                            <h4>Product Details</h4>
                            <h4 class="show"><?php echo $_GET["table"]; ?></h4>
                            <button class="btn add-pr bg-warning p-1">Add Product</button>
                        </div>   
                        <div class="product-table ">                         
                            <div class="table-responsive m-3">
                                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                    <table class="table table-striped">
                                        <thead class="thead text-center">
                                            <tr>
                                                <th scope="col"> <div class="product-detail">S.No</div> </th>
                                                <th scope="col"> <div class="product-detail">Product Name</div></th>
                                                <th scope="col"> <div class="product-detail">Photo</div> </th>       
                                                <th scope="col"> <div class="product-detail">Price</div></th>       
                                                <th scope="col"> <div class="product-detail">Selling Price</div></th>       
                                                <th scope="col"><div class="product-detail">Quantites</div></th>    
                                                <th scope="col"><div class="product-detail mx-1"> Delete</div></th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody text-center">
                                            <?php
                                            
                                                $productTable_name = $_GET["table"];
                                                $sessionName=$_SESSION['fullname'];
                                                $showProduct_sql="SELECT * FROM $productTable_name where `seller_name`='$sessionName' order by '$productTable_name' desc";
                                                //$showProduct_sql="SELECT * FROM $productTable_name order by '$productTable_name' desc";
                                                $sql_result= mysqli_query($conn,$showProduct_sql);
                                                $i=1;
                                                while($row1=mysqli_fetch_assoc($sql_result)) 
                                                {
                                            ?>
                                            <tr>
                                                <td scope="col"><div> <?php echo $i ?> </div></td>
                                                <td scope="col"><div><?php echo $row1['product_name'] ?></div></td>
                                                <td scope="col"><div><img src="<?php echo $row1['photo'] ?>" style="width: 12vh; height: 8vh;" alt=""></div></td>
                                                <td scope="col"><div><?php echo $row1['price'] ?></div></td>
                                                <td scope="col"><div><?php echo $row1['selling_price'] ?></div></td>
                                                <td scope="col"><div ><?php echo $row1['quantity'] ?></div></td>
                                                <td scope="col"><div><button class="btn btn-delete"><a href="deleteProductSecond.php?table=<?php echo $productTable_name?>&product=<?php echo $row1['product_name'] ?>"><i class="fas fa-trash"></i></a></button></div></td>
                                             </tr>
                                            <?php 
                                                $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table> 
                                </div>
                            </div> 
                        </div>
                        <div class="ap">
                            <div class="form bg-white">
                                <div class="upload-form m-2">
                                    <form action="addProduct.php" method="POST" enctype="multipart/form-data">
                                        <div class="top-upload d-flex m-2">
                                            <div class="left-detail col-4">
                                                <div class="image-upload b-color m-2">
                                                    <h5 class="text-center b-down m-2">Upload Photo</h5>
                                                    <div class="upload-img text-center m-2">
                                                        <input id="f-input" type="file" name="photo">
                                                    </div>
                                                </div>
                                                <div class="special b-color m-2 text-center">
                                                    <h5 class="b-down m-2">Special</h5>
                                                    <div class="warrenty m-2">
                                                        <label for="warrentyDate"> Warrenty (in months)</label>
                                                        <input type="number" class="form-control" name="warrenty" required>
                                                    </div>
                                                    <div class="warrenty m-2">
                                                        <h6>Payment Msssethods</h6>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payMethod" value="cash in delivery" id="offline">
                                                            <label class="form-check-label" for="offline"> Cash On Delivery </label>
                                                        </div> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payMethod" value="online" id="online">
                                                            <label class="form-check-label" for="online"> Online </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payMethod" value="Any both" id="both">
                                                            <label class="form-check-label" for="both"> Any Both </label>
                                                        </div>     
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="data-upload text-center col-8 b-color">
                                                <h5 class="m-2 b-down">General</h5>
                                                <div class="mb-3 row m-2">
                                                    <label for="prName" class="col-sm-4 col-form-label">Product Name: </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="prName" class="form-control" name="productname" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row m-2">
                                                    <label for="brName" class="col-sm-4 col-form-label">Brand Name: </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="brName" class="form-control" name="brandname"  required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col ">
                                                        <div class="category-name m-2">
                                                            <label for="ctName">Catogery Name</label>
                                                            <input type="text" id="ctName" class="form-control" name="tablename"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col ">
                                                        <div class="model m-2">
                                                            <label for="modelNo"> Model Number</label>
                                                            <input type="text" id="modelNo"  class="form-control" name="model" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col m-2">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="prc"> Price </label>
                                                                <input type="text" id="prc" class="form-control" name="price" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="sp"> Selling Price </label>
                                                                <input type="text" id="sp"  class="form-control" name="sellingprice" required>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col m-2">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="Qnty"> Quantity </label>
                                                            <input type="number" id="qnty"  class="form-control" name="quantity"  required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="clr"> Color </label>
                                                            <input type="text" id="clr"  class="form-control" name="color"  required>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="specification text-center b-color">
                                            <h5 class="m-2">Detail Specification</h5>
                                            <div class="m-2 ">
                                                <textarea class="form-control " name="detail" id="" cols="100" rows="3" name="detail" placeholder="Enter All product detail here" required></textarea>
                                            </div>
                                        </div>
                                        <div class="button m-2 col-3 text-center">
                                            <button class="btn btn-submit b-color form-control bg-warning" type="submit" name="submit_detail">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <!--Manage Product-->

</div>

<?php
    include "footer.php";
    }
    else{
        header("location: login.php?sessionOut");
    }
?>