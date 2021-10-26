<?php
    include "dbcon.php";
    include "header.php";
?>
<div class="container">
    <div class="my-5 d-flex">
        <div class="line">
            <img src="photos/design/line1.png" alt="line">
        </div>
        <div class="text mx-4">
            <h3>SEARCH</h3>
            <h3>PRODUCTS</h3>
        </div>
    </div>
    <div class="container">
        <?php
            $data = $_POST['search'];
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
        ?>
        <h4 class="linear-background marg "><?php echo $row['name'];?></h4>
        <div class="row">
            <div class="pro col">
            <?php
                $search = $row['name'];
                $sql1 = "SELECT * from $search WHERE brand = '$data'";
                $result1 = mysqli_query($conn,$sql1);
                while($row1=mysqli_fetch_assoc($result1)){
            ?>
                <div class="first text-center">
                    <h5>First Hand</h5>
                </div>
                <div class="col image text-center">
                    <img src="<?php echo"admin/"; echo$row1['photo']?>" style="height:15rem; width:18rem; margin:1rem" alt="">
                </div>
                <div class="col details text-center m-2">
                    <h5 class=""><?php echo $row1['product_name'] ?></h5>
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
                                <td> <strike><?php echo $row1['price'] ?></strike> </td>
                            </tr>
                            <tr class="trtd">
                                <td>Deal Price</td>
                                <td class="font-size-18 text-danger"><span>&nbsp;<?php echo $row1['selling_price'] ?></span><small
                                    class="text-dark font-size-8">&nbsp;&nbsp;Inclusive all tax</small> 
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="row m-auto">
                        <div class="col-6">
                            <a href="addCart.php?id=<?php echo $row1['model'] ?>&table=<?php echo $row['name'] ?>"><button class="btn btn-danger form-control">Add To Cart</button></a>
                        </div>
                        <div class="col-6">
                            <a href="detail.php?id=<?php echo $row1['model'] ?>&table=<?php echo $row['name'] ?>"><button class="btn btn-warning form-control">Explore</button></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <?php
                $search = $row['name'];
                $class=$search."2";
                $sql2 = "SELECT * from $class WHERE brand = '$data'";
                $result2 = mysqli_query($conn,$sql2);
                while( $row2 = mysqli_fetch_assoc($result2)){ 
            ?>
            <div class="pro col">
                <div class="first text-center">
                    <h5>Second Hand</h5>
                </div>
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
                            <a href="addCart.php?id=<?php echo $row2['model'] ?>&table=<?php echo $class?>"><button class="btn btn-cart btn-danger text-white form-control"> Add To Cart </button></a>
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
        <?php
        }
        ?>
    </div>
</div>
<?php
    include "footer.php";
?>



<? /*
    $data = $_POST['search'];
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $search = $row['name'];
        $sql1 = "SELECT * from $search WHERE brand = '$data'";
        $result1 = mysqli_query($conn,$sql1);
        while($row1=mysqli_fetch_assoc($result1)){
            echo $row1['product_name'];
            echo '<br>';
        }
    } */
?>
