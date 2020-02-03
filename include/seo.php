<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71801643-15"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-71801643-15');
</script>

<?php/*
<!-- Bitrix 24 -->
<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn.bitrix24.ru/b8927137/crm/site_button/loader_2_dt8ie7.js');
</script>
*/?>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '754412144956224');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=754412144956224&ev=PageView&noscript=1">
</noscript>
<!-- End Facebook Pixel Code -->

<script>
    $(function() {
        $(document).on('submit', function() {
            fbq('track', 'Lead');
        });
    });
</script>

<!-- Roistat -->
<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', 'e15a222f8520098c4edb39b3c778f3d0');
</script>

<!-- Marquiz script start -->

<script>
    function loadMarquiz() {
        var marquizScript = document.createElement('script');
        marquizScript.src = '//script.marquiz.ru/v1.js';
        document.body.appendChild(marquizScript);
    }
    function initMarquiz() {
        var marquizDiv = document.createElement('div');
        marquizDiv.classList.add('marquiz-pops', 'marquiz-pops_position_bottom-left', 'marquiz-pops_rounded', 'marquiz-pops_shadowed', 'marquiz-pops_blicked', 'marquiz-pops_position');
        marquizDiv.innerHTML = '<a class="marquiz-pops__body" href="#popup:marquiz_5ca62b76c65e5c004473ab22" data-marquiz-pop-text-color="#32324a" data-marquiz-pop-background-color="#3afad5" data-marquiz-pop-svg-color="#32324a" data-marquiz-pop-close-color="#fff" data-marquiz-pop-color-pulse="rgba(58, 250, 213, 0.4)" data-marquiz-pop-color-pulse-alpha="rgba(58, 250, 213, 0)" data-marquiz-pop-bonuses="0" data-marquiz-pop-delay="10s" data-marquiz-pop="true"><span class="marquiz-pops__icon"></span><span class="marquiz-pops__content"><span class="marquiz-pops__content-title">Узнать стоимость</span><span class="marquiz-pops__content-text">&laquo;SEO продвижения&raquo;</span></span><span class="marquiz-pops__bonus">Ваша скидка: 5 000 ₽</span></a>';
        document.body.append(marquizDiv);
        Marquiz.init({
            id: '5dfb57fa6ae42400447a6bc6',
            autoOpen: false,
            autoOpenFreq: 'always',
            openOnExit: true
        });
    }
    window.onload = function () {
        setTimeout(loadMarquiz, 5000);
        setTimeout(initMarquiz, 6000);
    };
</script>
<!-- Marquiz script end -->

<script async src="//cdn.callbackhunter.com/cbh.js?hunter_code=d2a52b897791ef4220f5e04952280447" charset="UTF-8"></script>
