 
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

        <!-- dashboard pannel -->
            <div class="dashboard col-9 m-2">
                <div class="cont  my-3 d-flex">
                    <div class="views d-flex bg-white p-3 b-color">
                        <div class="total text-center mx-3">
                            <h3>1,200</h3>
                            <p>Daily Views</p>
                        </div>
                        <div class="icon mx-5"><i class="fas fa-eye"></i></div>
                    </div>
                    <div class="views d-flex bg-white p-3 b-color">
                        <div class="total text-center mx-3">
                            <h3>50</h3>
                            <p>Sales</p>
                        </div>
                        <div class="icon mx-5"><i class="fas fa-shopping-bag"></i></div>
                    </div>
                    <div class="views d-flex bg-white p-3 b-color">
                        <div class="total text-center mx-3">
                            <h3>105</h3>
                            <p>Total Reviews</p>
                        </div>
                        <div class="icon mx-4"><i class="fas fa-comment"></i></div>
                    </div>
                    <div class="views d-flex bg-white p-3 b-color">
                        <div class="total text-center  mx-3">
                            <h3>Rs 1,25,200</h3>
                            <p>Total Earning</p>
                        </div>
                        <div class="icon mx-4"><i class="fas fa-rupee-sign"></i></div>
                    </div>
                </div>
                <div class="sec-dash d-flex">
                    <div class="col-7 recent-order bg-white b-color">
                        <div class="m-3 ">
                            <div class="bg-second d-flex">
                                <div class="col-10 text-center py-2">
                                    <h3>Recent Orders</h3>
                                </div>
                                <div class="col-2 p-2">
                                    <button class="btn view-all bg-danger">View All</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                    <table class="table table-striped">
                                        <thead class="thead text-center">
                                            <tr>
                                                <th scope="col">
                                                    <div class="product-name">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="product-name">
                                                        <h5>Price</h5>
                                                    </div>
                                                </th>       
                                                <th scope="col">
                                                    <div class="product-name">
                                                        <h5>Payment Method</h5>
                                                    </div>
                                                </th>     
                                                <th scope="col">
                                                    <div class="product-name">
                                                        <h5>Status</h5>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody text-center">
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>Delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>Delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p> Not delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p calss="bg-warning">Delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="name table-row">
                                                <p>Acer Nitro</p>
                                            </div></td>
                                            <td><div class="price table-row">
                                                <p>Rs.150500</p>
                                            </div></td>
                                            <td><div class="payment-method table-row">
                                                <p>Online</p>
                                            </div></td>
                                            <td><div class="Status table-row">
                                                <p>delivered</p>
                                            </div></td>
                                        </tr>
                                        </tbody>
                                    </table> 
                                </div> 
                            </div>                                      
                        </div>
                    </div>
                    <div class="col-4 ml-3 recent-customer b-color bg-white">
                       <div class="m-3">
                       <div class="bg-second text-center p-1">
                            <h4>Recent Customer</h4>
                        </div>
                        <div class="customer-name bg-white">
                            <div class="scroll-div">
                                <div class="profile-picture px-2 m-2">
                                </div>
                                <div class="name my-2">
                                    <h6>XYZ pqr</h6>
                                    <div class="location">
                                    <p> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>ABC opq</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-div">
                                <div class="profile-picture px-2 m-2">
                                </div>
                                <div class="name my-2">
                                    <h6>XYZ pqr</h6>
                                    <div class="location">
                                    <p> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>ABC opq</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-div">
                                <div class="profile-picture px-2 m-2">
                                </div>
                                <div class="name my-2">
                                    <h6>XYZ pqr</h6>
                                    <div class="location">
                                    <p> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>ABC opq</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-div">
                                <div class="profile-picture px-2 m-2">
                                </div>
                                <div class="name my-2">
                                    <h6>XYZ pqr</h6>
                                    <div class="location">
                                    <p> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>ABC opq</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-div">
                                <div class="profile-picture px-2 m-2">
                                </div>
                                <div class="name my-2">
                                    <h6>XYZ pqr</h6>
                                    <div class="location">
                                    <p> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>ABC opq</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-div">
                                <div class="profile-picture px-2 m-2">
                                </div>
                                <div class="name my-2">
                                    <h6>XYZ pqr</h6>
                                    <div class="location">
                                    <p> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <span>ABC opq</span></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        <!-- dashboard pannel -->
    </div>
<?php
    include "footer.php";
    }
    else{
        header("location: login.php?sessionOut");
    }
 ?>