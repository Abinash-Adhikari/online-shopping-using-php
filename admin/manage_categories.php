 
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
        
        <!--Manage Categories-->
            <div class="manage-categories col-9 m-2">
                <div class="top-container col-7 m-auto text-center bg-white b-color">
                    <div class="bg-second m-2">
                        <h4 class="p-1">Add Category</h4>
                    </div>
                    <form action="createCategories.php" method="POST">
                        <div class="container col-6 m-auto">
                            <label for="ct-lbl">Category Name</label>
                            <input class="category-name form-control" id="ct-lbl" name="catName" type="text" placeholder="Enter new category name" required >
                            <div class="showError m-1">
                                <?php 
                                    if($_GET['table']==1){
                                        echo" <h6> This Category Is Already Available!! <h6> ";
                                    }
                                ?>
                            </div>
                            <div class="button col-8 m-auto my-2">
                                <button class="btn btn-create form-control bg-second" type="submit" name="createCategories">Create</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="show-categories bg-white m-2 b-color">
                    <div class="bg-second text-center m-2 ">
                        <h3 class="p-2">All Categories</h3>
                    </div>
                    <div class="table-responsive m-3">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-striped allCategories">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col"> <h5> S.N </h5> </th>
                                        <th scope="col">  <h5> Categories Name </h5> </th>       
                                        <th scope="col">  <h5> Products </h5> </th>       
                                        <th scope="col"> <h5> Status </h5> </th>
                                        <th scope="col"> <h5> Manage </h5> </th>
                                    </tr>
                                </thead>
                                <?php
                                if(isset($_GET['type']) && $_GET['type'] != '' ){
                                        $type = $_GET['type'];
                                        if($type == 'status'){
                                            $operation = $_GET['operation'];
                                            $name = $_GET['productName'];
                                            if($operation=='active'){
                                                $status = '1';
                                            } 
                                            else{
                                                $status = '0';
                                            }
                                            $update_status = "update categories set status='$status' where Name='$name'";
                                                    mysqli_query($conn,$update_status);
                                        }
                                    }
                                    $categories_show_sql="SELECT * FROM categories order by 'categories' desc";
                                    $categories_show = mysqli_query($conn,$categories_show_sql);
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($categories_show)) 
                                        {
                                ?>
                                <tbody class="tbody">
                                    <tr>
                                        <td scope="col"><?php echo $i ?></td>
                                        <td scope="col"><?php echo $row['name'] ?></td>
                                        <td>
                                        <?php
                                            $name = $row['name'];
                                            $categories_show_quantity="SELECT count(*) as 'total' FROM $name" ;
                                            $result_Show_quantity=mysqli_query($conn,$categories_show_quantity);
                                            $count1 = mysqli_fetch_assoc($result_Show_quantity);
                                            echo ($count1['total']);
                                        ?>
                                        </td>
                                        <td scope="col">
                                        <?php 
                                            if($row['status']==1){
                                                echo "<a href='?table=0&type=status&operation=deactive&productName=".$row['name']."'>Active</a>";
                                            } 
                                            else{
                                                echo "<a href='?table=0&type=status&operation=active&productName=".$row['name']."'>De-active</a>";
                                            }
                                        ?>
                                        </td>
                                        <?php
                                            $style;
                                            $sName = $_SESSION['email'];
                                            if($sName != "abinashadhikari48@gmail.com"){
                                                $style = "hide";
                                            } else{
                                                $style = "";
                                            }
                                        ?>
                                        <td scope="col <?php echo $style ?>">
                                            <a href="deleteCategories.php?Name=<?php echo $row['name'] ?>"><button class="btn btn-delete"><i class="fas fa-trash m-2"></i>Delete</button></a>
                                        </td>
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
            </div>
        <!--Manage Categories-->
    </div>
<?php
    include "footer.php";
    }
    else{
        header("location: login.php?sessionOut");
    }
 ?>