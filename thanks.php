
<?php 
    include "dbcon.php";
    
    $data = $_SESSION['user'];
    $sql = "DELETE FROM cart WHERE email = '$data'";
    $result = mysqli_query($conn,$sql);
    if($result== TRUE){
        include "header.php";
?>
    <div class="thanks">
        <div class="col-6 m-auto">
            <div class="logo m-auto bdr">
                <div class="navbar-brand text-center">
                    <a href="index.php">
                        <img src="photos/design/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="text-center m-4">
                    <p><strong>Your Order is Confirmed. Thanks for connectiong with us.</strong></p>
                </div>
                <div class="row button text-center">
                    <a  href="index.php"><button class="btn btn-continue col-4 border text-black  m-auto "> Continue Shopping </button></a>
                </div>
            </div>
        </div>
    </div>
<?php 
    include "footer.php";
    }
    
    else{
        header("location: addToCart.php");
    }
?>