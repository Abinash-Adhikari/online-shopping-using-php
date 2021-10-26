$(document).ready(function(){

    $(".ap").hide();

    $(".burger1").click(function(){
        $(".text-function").toggle();
    });
    $(".add-pr").click(function(){
        $(".product-table").toggle();
        $(".ap").toggle();
        $(".show").toggle();
    });


});