<!-- Yandex.Metrika counter -->
<script>
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(45994323, "init", {
        clickmap:true,
        trackLinks:true,
        trackHash:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45994323" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
    /* Yandex Metrika Reach Goal */
    function ymReachGoal (target) {
        if (typeof ym === 'function') {
            ym(45994323, 'reachGoal', target, {}, goalCallback, target);
        }
        return true;
    }

    /* Yandex Metrika Reach Goal callback */
    function goalCallback () {
        console.log('Yandex.Metrics target: \'' + this + '\'');
    }

    /* Yandex Metrika targets */
    var YMtargets = {
        index: {
            slider: {
                el: '.slider .js-send-form',
                name: 'push'
            },
            cases_button: {
                el: '.section--cases .js-open-modal',
                name: 'zakaz'
            },
            cases_form: {
                el: '.modal-audit .js-send-form',
                name: 'zakazat_usl'
            },
            brief: {
                el: '.section--love--abilities-hello a.btn',
                name: 'brif'
            },
            bottom_form: {
                el: '.section--contact-form .js-send-form',
                name: 'otpravka'
            }
        },
        seo: {},
        complex: {},
        ppc: {
            slider: {
                el: '.slider .js-send-form',
                name: 'strategy'
            },
            tarifs_button: {
                el: '.ppc-price .js-open-modal',
                name: 'reklama'
            },
            tarifs_form: {
                el: '.modal-ppc .js-send-form',
                name: 'zakazrekl'
            },
            bottom_form: {
                el: '.section--contact-form .js-send-form',
                name: 'otpravkakont'
            }
        },
        smm: {},
        sites: {
            slider: {
                el: '.slider .js-send-form',
                name: 'razrabotka'
            },
        },
        chat_bot: {},
        amocrm: {},
        blog: {},
        contacts: {},
        all: {
            callback_button: {
                el: '.header--top-buttons--callback .js-open-modal',
                name: 'zvonok'
            },
            callback_form: {
                el: '.modal-callback .js-send-form',
                name: 'zakazat_zvonok'
            },
            audit_button: {
                el: '.header--top-buttons--audit .js-open-modal',
                name: 'audit'
            },
            audit_form: {
                el: '.modal-audit .js-send-form',
                name: 'zakaza_audit'
            },
            brief_button: {
                el: '.header--top-buttons--brief a.btn',
                name: 'brief'
            }
        }
    };

    var pageName = document.getElementsByTagName('body').item(0).className;
    /* цели для страниц */
    for (var page in YMtargets) {
        if (Object.keys(YMtargets[page]).length !== 0 && pageName === page) {
            for (var tg in YMtargets[page]) {
                if (YMtargets[page][tg].el !== '') {
                    $(YMtargets[page][tg].el).data('metrika-target', YMtargets[page][tg].name);
                }
            }

        }
    }
    /* общие цели */
    for (var tg in YMtargets.all) {
        if (YMtargets.all[tg].el !== '') {
            $(YMtargets.all[tg].el).data('metrika-target', YMtargets.all[tg].name);
        }
    }

</script>
