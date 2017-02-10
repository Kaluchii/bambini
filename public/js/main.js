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

    $('.expand').on('click', function () {
        var par = $(this).closest('.col-1-2');
        var text = par.find('.more-text').slideToggle();
    });

    $('.ask').magnificPopup({
        type:'inline',
        midClick: true
    });
    $('.lesson').magnificPopup({
        type:'inline',
        midClick: true
    });

    $('.call_certs').on('click', function () {
        // инициализация самой галлереи
        $('.call_certs').magnificPopup({
            callbacks: {},
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1],
                tCounter: '%curr% из %total%'
            }
        });
        // возврат false что бы не было перехода по ссылке
        return false;
    });
    // Магия без которой при первом клике галлерея не работает
    $('.call_certs').click();
    $('.mfp-close').click();

    $('.certs_gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });
});