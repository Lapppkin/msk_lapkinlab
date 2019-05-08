(function($){

    
        //TOP SLIDER
        //Р’С‹СЂР°РІРЅРёРІР°РµРј РЅР° СѓР·РєРёС… СЌРєСЂР°РЅР°С… СЃР»Р°Р№РґС‹ РїРѕ РІС‹СЃРѕС‚Рµ
        // $(window).on('load resize', function(){
        // 	if ( window.matchMedia("(max-width: 959px)").matches ) {
        // 		var wrapH = 0;
        // 		$.each($('.amocrm-top__wrap'), function(index, wrap) {
        // 			if ( $(wrap).height() > wrapH ) wrapH = $(wrap).height();
        // 		});
        // 		$('.amocrm-top__wrap').height(wrapH);
    
        // 		wrapH = 0;
        // 		$.each($('.top__wrap'), function(index, wrap) {
        // 			if ( $(wrap).height() > wrapH ) wrapH = $(wrap).height();
        // 		});
        // 		$('.top__wrap').height(wrapH);
    
        // 		wrapH = 0;
        // 		$.each($('.slider-top__desc'), function(index, wrap) {
        // 			if ( $(wrap).height() > wrapH ) wrapH = $(wrap).height();
        // 		});
        // 		$('.slider-top__desc').height(wrapH);
        // 	}
        // });
    
    
        var autoplaySpeed = 7000,
            speed = 500;
        $.each( $('#top-slider .desc-1'), function(index, header) {
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

    
        //TOP SLIDER
        //Р’С‹СЂР°РІРЅРёРІР°РµРј РЅР° СѓР·РєРёС… СЌРєСЂР°РЅР°С… СЃР»Р°Р№РґС‹ РїРѕ РІС‹СЃРѕС‚Рµ
        // $(window).on('load resize', function(){
        // 	if ( window.matchMedia("(max-width: 959px)").matches ) {
        // 		var wrapH = 0;
        // 		$.each($('.amocrm-top__wrap'), function(index, wrap) {
        // 			if ( $(wrap).height() > wrapH ) wrapH = $(wrap).height();
        // 		});
        // 		$('.amocrm-top__wrap').height(wrapH);
    
        // 		wrapH = 0;
        // 		$.each($('.top__wrap'), function(index, wrap) {
        // 			if ( $(wrap).height() > wrapH ) wrapH = $(wrap).height();
        // 		});
        // 		$('.top__wrap').height(wrapH);
    
        // 		wrapH = 0;
        // 		$.each($('.slider-top__desc'), function(index, wrap) {
        // 			if ( $(wrap).height() > wrapH ) wrapH = $(wrap).height();
        // 		});
        // 		$('.slider-top__desc').height(wrapH);
        // 	}
        // });
    
    
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