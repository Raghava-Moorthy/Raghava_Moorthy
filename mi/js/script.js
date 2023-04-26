$(document).ready(function(){
    $(".formcontainer").hide().delay(100).queue(function(){
        $('.container1').animate({opacity:0},{
            duration:2000,complete:function(){
                $(".formcontainer").show(1000);
            }
        });
        $(this).dequeue();
        $(".lout").hide();
    });
    $(".container1").prop('disabled',true);    
    $(".lout").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/index.html";
        });
    });
    $(window).on('load',function(){
        $(". formcontainer").fadeIn(2000);
    });
    $(".logot").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/index.html";
        });
    });
    $(window).on('load',function(){
        $(". formcontainer").fadeIn(2000);
    });

    $(".dlout").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/index.html";
        });
    });
    $(window).on('load',function(){
        $(". formcontainer").fadeIn(2000);
    });

    $(".admit").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/admission.html";
        });
    });

    $(window).on('load',function(){
        $("#ads").fadeIn(5000);
    });
    
    $(".adout").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/admission.html";
        });
    });

    $(window).on('load',function(){
        $("#ads").fadeIn(5000);
    });
    


    $(".dis").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/discharge.html";
        });
    });
    $(window).on('load',function(){
        $("#disch").fadeIn(5000);
    });



    $(".disk").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../html/discharge.html";
        });
    });
    $(window).on('load',function(){
        $("#disch").fadeIn(5000);
    });


    $(".rep").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../php/discreport.php";
        });
    });
    $(window).on('load',function(){
        $(".di_report").fadeIn(5000);
    });

    $(".back").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../php/discreport.php";
        });
    });
    $(window).on('load',function(){
        $(".di_report").fadeIn(5000);
    });

    $(".adrep").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../php/adreport.php";
        });
    });
    $(window).on('load',function(){
        $(".ad_report").fadeIn(5000);
    });

    $(".bck").click(function(){
        $('body').fadeOut(1000,function(){
            window.location.href = "../php/adreport.php";
        });
    });
    $(window).on('load',function(){
        $(".ad_report").fadeIn(5000);
    });

    $('.lt').click(function() {
        $.ajax({
          url: '../php/logout.php',
          success: function() {
            $('body').fadeOut(500, function() {
              setTimeout(function() {
                window.location.href = '../html/index.html';
              }, 500);
            });
          }
        });
    });


});





