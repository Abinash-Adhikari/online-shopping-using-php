<?php
    include "dbcon.php";
    if(($_SESSION['user']!="") && ($_SESSION['userPassword']!="")){

        include "header.php";
   
?>
    <div class="container  my-4">
        <div class="body"> 
            <?php
            $model=$_GET['id'];
            $table=$_GET['table'];
            $password=$_SESSION['userPassword'];
            $name=$_SESSION['user'];
            $sql="SELECT * FROM USER WHERE email='$name' and password='$password'";
            $result = mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            if($count==1){
                $sql1 = "SELECT * FROM `$table` WHERE model='$model'";
                $sql2 = "SELECT * FROM user WHERE email ='$name'";
                $result1 = mysqli_query($conn,$sql1);
                $result2 = mysqli_query($conn,$sql2);
                while($row2=mysqli_fetch_assoc($result2)){
                    ?>
                <div class="col-5 m-auto my-5">
                    <div class="buyerDeail ">
                        <div class="top border text-center mt-3">
                            <h2>User Details</h2>
                        </div>
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th><h6>Name:</h6></th>
                                    <td><?php echo $row2['fullname'] ?></td>
                                </tr>
                                <tr>
                                    <th><h6>Email:</h6></th>
                                    <td><?php echo $row2['email'] ?></td>
                                </tr>
                                <tr>
                                    <th><h6>Phone No:</h6></th>
                                    <td><?php echo $row2['phoneNo'] ?></td>
                                </tr>
                                <tr>
                                    <th><h6>Address:</h6></th>
                                    <td><?php echo $row2['address'] ?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="productDetail col-7 ">
                        <div class="top text-center border mt-3">
                            <h2>Order Summary</h2>
                        </div>
                        <?php 
                        while($row1=mysqli_fetch_assoc($result1)){
                            ?>
                            <div class="border">
                                <div class="row">
                                    <div class="col img text-center  my-3">
                                        <img src="<?php echo "admin/".$row1['photo'] ?>" style="width: 25vh; height: 22vh;" alt="">
                                    </div>
                                    <div class="col m-auto">
                                        <h5><?php echo $row1['product_name'] ?></h5>
                                        <small>Seller Name: <?php echo $row1['seller_name'] ?> </small>
                                        <div class="d-flex"> 
                                            <h5>Rs: <?php echo $row1['selling_price'] ?></h5> 
                                            <p> <strike> <?php echo $row1['price'] ?></strike></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-3">
                                    <div class="col-4 count d-flex col-3 justify-content-around m-auto ">
                                        <button class="sub"><i class="fas fa-minus-circle m-2"></i></button>
                                        <div class="showNumber m-2 text-center"> </div>
                                        <button class="add"><i class="fas fa-plus-circle m-2"></i></button>
                                    </div>
                                </div>
                            </div>   
                    </div>
                    
                    <div class="col-5  fixed ">
                        <div class="">
                            <div class="price-detail text-center mt-3 border">
                                <h2>Price Details</h2>
                            </div>
                            <div class="border">
                                <div class="body mx-5 my-3 d-flex justify-content-around">
                                    <div class="price"><h5>Items</h5></div>
                                    <div class="nbr"> </div>
                                </div>
                                <div class="body mx-5 my-3 d-flex justify-content-around">
                                <div class="price"><h5>Price</h5></div>
                                <?php 
                                        $val1= $row1['selling_price'];
                                ?>
                                <script>
                                    var cost = <?php echo $val1 ?>;
                                </script>
                                <div class="priceShow">Rs:</div>
                                </div>
                                <div class="price">
                                </div>
                                
                            </div>
                        </div>
                        <div class="m-4">
                            <div class="row">
                                <div class="col-5 m-auto">
                                    <a href="index.php"><button class="btn bg-first text-white">Continue Shopping </button></a>
                                </div>
                                <div class="col-5 m-auto">
                                    <a href="thanks.php"><button class="btn blue text-white"> Proceed To Checkout </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                    }
                }
            }else{
                header("location: loginPage.php?error=wrongEmailorPassword");
            }
            ?>
            
        </div>
    </div>
    <?php include "footer.php"?>
    <script>
        var num = 1;
        $(".priceShow").html(cost);
        $(".showNumber").html(num);
        $(".nbr").html(num);
        $(".add").on("click", function(){
            num=num+1;
            var c=num*cost;
            $(".showNumber").html(num);
            $(".nbr").html(num);
            $(".priceShow").html(c);

        });
        $(".sub").on("click", function(){
            if(num<=1)
            {
                $(".showNumber").html("1");
                $(".nbr").html("1");
                $(".priceShow").html(cost);
            }else{
                num=num-1;
                cost=num*cost;
                $(".showNumber").html(num);
                $(".nbr").html(num);
                $(".priceShow").html(cost);
            }
        });   
    </script>

<?php
    }
    else{
        $table=$_GET['table'];
        $model=$_GET['id'];
        header("location: loginPage.php?val=detail&model=$model&table=$table");
    }
?>