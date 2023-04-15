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
    
    $(".formcontainer1").hide();
    
    $(".container1").prop('disabled',true);

    $('.enter').on('click',function(){
        $(".rform").submit();
    });
    
    $(".rform").on('submit',function(event){
        event.preventDefault();
        if(($(".r_id").val()!="")&& ($(".r_pass").val()!="")){
            
            $(".formcontainer").hide(1000);
            $(".formcontainer1").show(1500);
            $(".lout").show();
            
        }
        return false;
    });
    $(".lout").click(function(){
        $(".formcontainer1").hide();
        $(".formcontainer").show();

    });

    $(".admit").click(function(){
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

   

    $('input[name=mobile]').on('input', function() {
        var number = $(this).val().replace(/[^0-9]/g, '');
        var formatted = '';
        if (number.length > 0) {
            formatted = number.substring(0, 3);
        }
        if (number.length > 3) {
            formatted += ' - ' + number.substring(3, 6);
        }
        if (number.length > 6) {
            formatted += ' - ' + number.substring(6, 10);
        }
        $(this).val(formatted);
    });
      













});
