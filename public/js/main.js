$(document).ready(function(){

    $('.photos a').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1], // Will preload 0 - before current, and 1 after the current image
            tCounter: '%curr% из %total%'
        }
    });
    $('.more-photo').on('click',function(){
        $('.photos a').first().click()
    });
    $('.fact a').on('click',function(){
        var top = $( "#"+$(this).attr('href') ).offset().top;
       $('body').animate({
           scrollTop: top
       },500);
        return false;
    });



    $('.ask').magnificPopup({
        type:'inline',
        midClick: true
    });
    $('.lesson').magnificPopup({
        type:'inline',
        midClick: true
    });


});