$(document).ready(function(){
    $(".sign").click(function(){
        $(".card").show(1000);
        $(".card1").hide();
        $(".card2").hide();

    });
    $(".accountl").click(function(){
        $(".card").show(1500);
        $(".card1").hide(500);
    });
    $(".account").click(function(){
        $(".card1").show(1500);
        $(".card").hide(500);
    });
    $(".forgot").click(function(){
        $(".card1").hide(500);
        $(".card").hide(500);
        $(".card2").show(1500);
    });
    $(".submit").click(function(){
        $(".card1").hide(500);
        $(".card2").hide(500);
        $(".card").hide(500);
    });
});

