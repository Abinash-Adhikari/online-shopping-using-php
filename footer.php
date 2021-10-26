        
        <!--FOOTER-->
        <div class="buttom">
                <div class="footer">
                    <div class="footer-c1">
                        <div class="logo">
                            <img src="photos/design/logo.png" alt="Logo">
                        </div>
                    </div>
                    <div class="footer-c1">
                        <h5>OVERVIEW</h5>
                        <p>About us</p>
                        <p>FAQs</p>
                        <p>Privacy Policy</p>
                        <p>Terms & Conditions</p>
                        <p>Corporate Policies</p>
                    </div> 
                    <div class="footer-c1">
                        <h5>OTHERS</h5>
                        <p>Advertise with us</p>
                        <p>Carers</p>
                        <p>Costumer Care</p>
                    </div>
                    <div class="footer-c1">
                        <h5>CONNECT WITH US</h5>
                        <p>1800 200 3000 (Toll-Free)</p>
                        <p>support@gmail.com</p>
                    </div>
                    <div class="footer-c1">
                        <h4>AVAILABLE ON</h4>
                    </div>
                </div>
                <div class="div"></div>
                <div class="copyright">
                    <p class="font-size-12">Copyright@2021</p>
                </div>
            </div>
        <!--FOOTER-->



    </div>
    

    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!--Bootstrap js-->
    
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery-->

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery-->

    <!--owl carosel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--owl carosel-->

    <!--isotope plugin-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--isotope plugin-->

    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

    <!--Costum js-->
    <script src="javascript/index.js?v=<?php echo time(); ?>"></script>
    <!--Costum js-->
    <script>
        $(".userLogin").click(function(){
            $(location).attr('href', 'loginPage.php?val=index');
        });
        $(".btn-sells").click(function(){
            $(location).attr('href', 'admin/index.php');
        });
        $(".btn-compare").click(function(){
            $(location).attr('href', 'compare.php?class=laptop');
        });
        $(".btn-products").on("click", function(){
            $(document).scrollTop(3200);
        });
        $(".hide").slice(0,3).show();
        $(".loadMore").on("click", function(){
            $(".hide:hidden").slice(0,3).show();
            if($(".hide:hidden").length==0){
                $(".loadMore").hide();
            }
        });
        $(".hide2").slice(0,3).show();
        $(".loadMore").on("click", function(){
            $(".hide2:hidden").slice(0,3).show();
            if($(".hide2:hidden").length==0){
                $(".loadMore").hide();
            }
        });
        // $(".logout").on("click", function(){
        //     <?php
        //         unset($_SESSION['user']);
        //         unset($_SESSION['userPassword']);
        //     ?>
        //     $(location).attr('href', 'loginPage.php?val=index');
        // });

        
        // var num=1;
        // $(".showNumber").html(num);
        // $(".nbr").html(num);
        // $(".add").on("click", function(){
        //     num=num+1;
        //     $(".showNumber").html(num);
        // });
        // $(".sub").on("click", function(){
        //     if(num<=1)
        //     {
        //         $(".showNumber").html("1");
        //         $(".nbr").html("1");
        //     }else{
        //         num=num-1;
        //         $(".showNumber").html(num);
        //     }
        // });
        
        
    </script>
</body>
</html>