$(document).ready(function(){
    $(".adm-register").hide();
    $(".btn-register").click(function(){
        $(".adm-register").show();
        $(".adm-login").hide();
    });
    $(".btn-login").click(function(){
        $(".adm-register").hide();
        $(".adm-login").show();
    });
});