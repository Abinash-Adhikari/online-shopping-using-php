<div class="row tog1 linear-background">
    <div class="col m-auto">
        <div class=" text-center m-auto">
            <div class="container text-white ">
                <H4>Welcome Back !!</H4>
                <p>To connected with us login in with your credentials.</p>
                <br>
                <p>Already having account. Login here.</p>
                <div class="submit-btn col-4 m-auto  mt-2 bg-white b-radious text-dark">
                    <button class="btn btn-register form-control "> Login </button>
                </div>
            </div>
        </div> 
    </div>
    <div class="col bg-white border">
        <div class="text-center border m-4">
            <h3 class="m-4">SIGNUP</h3>
            <hr>
            <div class="form-responsive m-2">
                <?php $val=$_GET['val'] ?>
                <form action="register.php?val=<?php echo $val?>" method="POST">
                    <div class="fullname col-8 m-auto mt-2">
                        Full Name:
                        <input type="text" class="form-control" name="fullName" required>
                    </div>
                    <div class="email col-8 m-auto mt-2">
                        Email:
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="password col-8 m-auto mt-2">
                        Password:
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="phone col-8 m-auto mt-2">
                        Phone:
                        <input type="text" class="form-control" name="phoneNo" required>
                    </div>
                    <div class="address col-8 m-auto mt-2">
                        Address:
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="submit-btn col-4 m-auto linear-background mt-2 b-radious ">
                        <button class="btn btn-submit form-control text-white" type="submit" name="reg-submit"> Sign up </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>