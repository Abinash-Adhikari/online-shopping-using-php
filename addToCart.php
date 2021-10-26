<?php
    include "dbcon.php";
    include "header.php";
    if($_SESSION['user']!=""){
   
?>
<div class="container m-5">
    
    <div class="top">
        <div class="col-4 m-auto text-center border ">
            <h4>User Detail</h4>
        </div>
        <div class="names col-4 m-auto ">
            <?php
               $email = $_SESSION['user'];
               $passord = $_SESSION['userPassword'];
               $sql = "SELECT * FROM user WHERE email='$email' and password='$passord'";
               $result = mysqli_query($conn, $sql);
               while($row=mysqli_fetch_assoc($result)){
            ?>
            <table class="table border">
                <thead>
                    <tr>
                        <th><h6>Name:</h6></th>
                        <td><?php echo $row['fullname'] ?></td>
                    </tr>
                    <tr>
                        <th><h6>Email:</h6></th>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <th><h6>Phone No:</h6></th>
                        <td><?php echo $row['phoneNo'] ?></td>
                    </tr>
                    <tr>
                        <th><h6>Address:</h6></th>
                        <td><?php echo $row['address'] ?></td>
                    </tr>
                </thead>
            </table>
            <?php
               }
            ?>
        </div>
    </div>
    <?php $total=0; ?>
    <div class="body my-5">
        <div class=" border text-center">
            <h3>Cart's Products Details</h3>
        </div>
        <div class="border">
            <div class="details">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>S.No</th>
                            <th>Photo</th>
                            <th>Details</th>
                            <th></th>

                        </tr>
                    </thead>
                    <?php
                        $email = $_SESSION['user'];
                        $sql1 = "SELECT * FROM cart WHERE email = '$email'";
                        $result1 = mysqli_query($conn, $sql1);
                        $i=1;
                        
                        while($row1 = mysqli_fetch_assoc($result1)){
                            $table = $row1['cat_table'];
                            $model = $row1['productid'];
                            $sql2 = "SELECT * FROM $table WHERE model = '$model'";
                            $result2 = mysqli_query($conn,$sql2);
                            while($row2=mysqli_fetch_assoc($result2)){
                            ?>
                            <tbody>
                                <tr  class="text-center">
                                    <td><h6 class="m-5"><?php echo $i;?> </h6></td>
                                    <td>
                                        <div class="img m-3">
                                            <img src="<?php echo "admin/".$row2['photo'] ?>" style="width: 18vh; height: 15vh;" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                           $total1 = $row1['item_number']*$row2['selling_price'] ;
                                        ?>
                                        <div class="">
                                            <h4><?php echo $row2['product_name'] ?></h4>
                                            <p><strong>Rs: <?php echo $total1 ?></strong></p>
                                            <div class="count d-flex justify-content-around col-4 m-auto">
                                                <a href="update.php?model=<?php echo $model?>&val=0"><button class="sub"><i class="fas fa-minus-circle m-2"></i></button></a>
                                                    <div class="showNumber m-2 text-center"> <?php echo $row1['item_number']  ?>  </div>
                                                <a href="update.php?model=<?php echo $model?>&val=1"><button class="add"><i class="fas fa-plus-circle m-2"></i></button></a>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <div class="delete  m-auto my-5">
                                            <a href="deleteCart.php?id=<?php echo $model?>"><button class="btn btn-danger"><i class="fas fa-trash">&nbsp;&nbsp;Remove</i></button></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php 
                            }
                            $i++;
                            $total=$total1+$total;     
                        }
                    ?>
                </table>
                
                <div class="row">
                    <div class="col-6 text-center">
                        <div class="row m-3">
                            <div class="col-5 m-auto">
                                <a href="index.php"><button class="btn bg-first text-white">Continue Shopping </button></a>
                            </div>
                            <div class="col-5 m-auto">
                                <a href="thanks.php"><button class="btn blue text-white"> Proceed To Checkout </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <h4><strong>Total = RS. <?php echo $total ?></strong></h4>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<?php

    include "footer.php";        
}
else{
    header("location: loginPage.php?val=addToCart");
}
?>