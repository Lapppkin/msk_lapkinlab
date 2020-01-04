(function($){

    var autoplaySpeed = 7000,
        speed = 500;
    $.each($('#top-slider .desc-1'), function(index, header) {
        setTimeout(function(){
            texting( $(header) );
        }, autoplaySpeed * index + speed + 100);
    });

    $('#top-slider').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: autoplaySpeed,
        arrows: false,
        fade: true,
        pauseOnFocus: true,
        pauseOnHover: false,
        speed: speed,
        touchMove: false,
        swipe: false,
        adaptiveHeight: true,
    });

    function texting(header) {
        var text = $(header).find('.desc-1__unvisible').text();
        $(header).append('<span class="desc-1__animation"></span>');
        var i = 0;
        var textInterval = setInterval(function () {
              $(header).find('.desc-1__animation').html( $(header).find('.desc-1__animation').html() + text[i] );
              i++;
              if (i == text.length) {
                clearInterval(textInterval);
              }
        }, 62);
    }

})(jQuery);

(function($){

    var autoplaySpeed = 7000,
        speed = 500;
    $.each( $('#top-slider2 .desc-1'), function(index, header) {
        setTimeout(function(){
            texting( $(header) );
        }, autoplaySpeed * index + speed + 100);
    });

    $('#top-slider2').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: autoplaySpeed,
        arrows: false,
        fade: true,
        pauseOnFocus: true,
        pauseOnHover: false,
        speed: speed,
        touchMove: false,
        swipe: false,
        adaptiveHeight: true,
    });

    function texting(header) {
        var text = $(header).find('.desc-1__unvisible').text();
        $(header).append('<span class="desc-1__animation"></span>');
        var i = 0;
        var textInterval = setInterval(function () {
              $(header).find('.desc-1__animation').html( $(header).find('.desc-1__animation').html() + text[i] );
              i++;
              if (i == text.length) {
                clearInterval(textInterval);
              }
        }, 62);
    }

})(jQuery);
