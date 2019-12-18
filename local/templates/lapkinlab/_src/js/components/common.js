/**
 * Common scripts.
 *
 * @type {{init(): void, min: boolean, scrollToTop: Common.scrollToTop, modalsContainer: null}}
 */
let Common = {

    min: false,

    /**
     * Init.
     */
    init() {

        $(document).ready(function () {

            Common.setPhoneMask();

        });

        // Прокрутка страницы по хешу
        $(document).on('click', 'a[href^="#top"]', (e) => {
            let id = $(e.target).attr('href');
            let $id = $(id);
            if ($id.length === 0) {
                return;
            }
            e.preventDefault();
            let pos = $id.offset().top;
            $('body, html').animate({scrollTop: pos});
        });

        // Открытие/закрытие мобильного меню
        $(document)
            .on('click', '.js-mobile-menu', () => {
                $('.mobile-menu').addClass('active');
                $('body, #top').addClass('mobile-menu-open');
            })
            .on('click', '.js-mobile-menu--close', () => {
                $('.mobile-menu').removeClass('active');
                $('body, #top').removeClass('mobile-menu-open');
            })
            .on('mouseup', (e) => {
                let div = $('.mobile-menu');
                if (!div.is(e.target) && div.has(e.target).length === 0) {
                    div.removeClass('active');
                    $('body, #top').removeClass('mobile-menu-open');
                }
            });

        // Раскрытие тарифов
        $(document).on('click', '.js-tarif-ext', () => {
            $('.js-tarif-ext').slideUp().nextAll().slideDown().css('display', 'flex');
        });

        // Обработчик при прокрутке страницы
        $(document).scroll(() => {
            Common.scrollToTop();
        });

        $(document).ajaxComplete(() => {
            Common.setPhoneMask();
        });

    },

    /**
     * Scroll to top.
     */
    scrollToTop() {
        let scrollingAtTop = $(document).scrollTop();
        if (scrollingAtTop > 480 && !Common.min) {
            $('#scroll-to-top').addClass('active');
            Common.min = true;
        }
        if (scrollingAtTop <= 480 && Common.min) {
            $('#scroll-to-top').removeClass('active');
            Common.min = false;
        }
    },

    /**
     * Append content to modals container.
     *
     * @param content
     */
    appendModal(content) {
        $('#ajax-modals-container').append(content);
    },

    /**
     * Set phone masks.
     */
    setPhoneMask() {
        require('inputmask/dist/jquery.inputmask.bundle');
        let phoneMask = {
            mask: '+7 999 999-99-99',
            placeholder: '_',
        };
        $('input[name="PHONE"]').inputmask(phoneMask);
    }

};

export { Common };
