<!-- Yandex.Metrika counter -->
<script>
    (function(m, e, t, r, i, k, a) {
        m[i]   = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments);
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a);
    })
    (window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');
    ym(45994323, 'init', {
        clickmap:            true,
        trackLinks:          true,
        accurateTrackBounce: true,
        webvisor:            true,
        trackHash:           true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/45994323" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71801643-15"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-71801643-15');
</script>

<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', 'e15a222f8520098c4edb39b3c778f3d0');
</script>

<!--<script>-->
<!--        (function(w,d,u){-->
<!--                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);-->
<!--                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);-->
<!--        })(window,document,'https://cdn.bitrix24.ru/b8927137/crm/site_button/loader_2_dt8ie7.js');-->
<!--</script>-->
<script async src="//cdn.callbackhunter.com/cbh.js?hunter_code=d2a52b897791ef4220f5e04952280447" charset="UTF-8"></script>

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