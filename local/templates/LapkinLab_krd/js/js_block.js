$(document).ready(function() {
    function getCookie(name) {
        let cookie_arr = document.cookie.split('; ');
        let cookie_obj = {};
        for (let i=0; i<cookie_arr.length; i++) {
            let nv = cookie_arr[i].split('=');
            cookie_obj[nv[0]] = nv[1]; 
        }
        return cookie_obj[name];
    }        

    if ( getCookie('hide_popup') == 'yes' ) {
            $(".modal").css({'opacity':'0','visibility':'hidden'}); 
    }
    // if ( getCookie('hide_popup2') == 'yes' ) {
    //         $(".modal2").css({'opacity':'0','visibility':'hidden'}); 
    // }


    //     if ( getCookie('hide_popup2') != 'yes' ) { 
    // var delay_popup = 15000;
    // setTimeout("$('.modal2').css({'opacity':'1','visibility':'visible'});", delay_popup);
    //     }



    $(".modal_close").click(function() {          
        var date = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
        document.cookie = "hide_popup=yes; path=/; expires=" + date.toUTCString();

        $(".modal").css({'opacity':'0','visibility':'hidden'}); 
    });
    // $(".modal").on('click', function(e) {     
    //     var date = new Date(new Date().getTime() + 60 * 1000);
    //     document.cookie = "hide_popup=yes; path=/; expires=" + date.toUTCString();

    //     $(".modal").css({'opacity':'0','visibility':'hidden'}); 
    // });

    //     var date = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
    //  $(".modal_close2").click(function() {          
    //    document.cookie = "hide_popup2=yes; path=/; expires=" + date.toUTCString();

    //     $(".modal2").css({'opacity':'0','visibility':'hidden'}); 
    // });

    // $(".modal2").on('click', function(e) {     
    //     var date = new Date(new Date().getTime() + 60 * 1000);
    //     document.cookie = "hide_popup2=yes; path=/; expires=" + date.toUTCString();

    //     $(".modal2").css({'opacity':'0','visibility':'hidden'}); 
    // });


    // #1 вариант (события не всплывают)
    $(".top_panel__message")
    .mouseenter(function() {
        // навели курсор на объект (не учитываются переходы внутри элемента) 
        if ( getCookie('hide_popup') != 'yes' ) { 
        $(".modal").css({'opacity':'1','visibility':'visible'}); 
        }
    })
    .mouseleave(function(){         
        // отвели курсор с объекта (не учитываются переходы внутри элемента)
    });

    // #2 вариант (события всплывают)    
    $(".top_panel__message")
    .mouseover(function() {
        // навели курсор на объект 
        if ( getCookie('hide_popup') != 'yes' ) { 
        $(".modal").css({'opacity':'1','visibility':'visible'}); 
        }
    })
    .mouseout(function(){       
        // отвели курсор с объекта  
    });

    // 3 вариант
    $(".top_panel__message").hover(function(){        
        // навели курсор на объект (не учитываются переходы внутри элемента) 
        if ( getCookie('hide_popup') != 'yes' ) { 
        $(".modal").css({'opacity':'1','visibility':'visible'}); 
        } 
    },function(){       
        // отвели курсор с объекта (не учитываются переходы внутри элемента)  
    });





});


