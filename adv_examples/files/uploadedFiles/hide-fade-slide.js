$(document).ready(function(){


   

    //empty remove
    $('#emt').click(function(){
        $('#parent').empty();
    });


    $('#rm').click(function(){
        $('#parent').remove();
    });

    // hide show toggle
    $('#hd').click(function(){
        $('#parent').hide("slow");
    });


    $('#sh').click(function(){
        $('#parent').show(3000);
    });

    $('#tg').click(function(){
        $('#parent').toggle(1000);
    });

    // fade
    $('#fi').click(function(){
        $('#parent').fadeIn("slow");
    });


    $('#fo').click(function(){
        $('#parent').fadeOut(3000);
    });

    $('#ft').click(function(){
        $('#parent').fadeToggle(1000);
    });

    $('#fto').click(function(){
        $('#parent').fadeTo(1000,0.5);
    });

    // slide
    $('#si').click(function(){
        $('#parent').slideUp("slow");
    });


    $('#so').click(function(){
        $('#parent').slideDown(2000);
    });

    $('#st').click(function(){
        $('#parent').slideToggle(2000);
    });

});