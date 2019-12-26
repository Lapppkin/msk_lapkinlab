/**
 * Common scripts.
 *
 * @type {{appendModal(*=, *): void, setPhoneMask(): void, init(): void, min: boolean, ajaxUrl: string, scrollToTop(): void, clearModalsContainer(): void, setEmailMask(): void, isJsonString(*=): boolean, prepareAjaxOptions(): {type: string, url: string}, modalsContainer: string}}
 */
let Common = {

    min: false,
    modalsContainer: '#ajax-modals-container',
    ajaxUrl: '/ajax/', // '/local/php_interface/ajax.php';

    /**
     * Init.
     */
    init() {

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

        // Открытие модалки
        $(document).on('click', '.js-open-modal', (e) => {
            let modalId = $(e.currentTarget).data('modal');
            let options = this.prepareAjaxOptions();
            options.data = {
                action: $(e.currentTarget).data('action'),
                modalId: modalId,
            };
            $.ajax(options)
                .done((response) => {
                    if (!Common.isJsonString(response)) {
                        Common.appendModal(response, modalId);
                    } else {
                        console.error(response);
                    }
                })
                .fail(error => console.error(error));
        });

        // Отправка формы
        $(document).on('click', '.js-send-form', (e) => {



        });

        // Раскрытие тарифов
        $(document).on('click', '.js-tarif-ext', () => {
            $('.js-tarif-ext').slideUp().nextAll().slideDown().css('display', 'flex');
        });

        // Обработчик после загрузки страницы
        $(document).ready(function () {
            Common.setEmailMask();
            Common.setPhoneMask();
        });

        // Обработчик при прокрутке страницы
        $(document).scroll(() => {
            Common.scrollToTop();
        });

        // Обработчик после завершения ajax
        $(document).ajaxComplete(() => {
            Common.setEmailMask();
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
     * @param modalId
     */
    appendModal(content, modalId) {
        $(this.modalsContainer).append(content);
        $('#' + modalId + '-modal').modal().on('hidden.bs.modal', () => {
            $('#' + modalId + '-modal').remove();
        });
    },

    /**
     * Clear modals container.
     */
    clearModalsContainer() {
        $(this.modalsContainer).empty();
    },

    /**
     * @return {boolean}
     */
    isJsonString(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    },

    /**
     * Set phone mask.
     */
    setPhoneMask() {
        require('inputmask/dist/jquery.inputmask.bundle');
        $('input[name="PHONE"], input[name="phone"]').inputmask({
            mask: '+7 999 999-99-99',
            placeholder: '_',
        });
    },

    /**
     * Set email mask.
     */
    setEmailMask() {
        require('inputmask/dist/jquery.inputmask.bundle');
        new Inputmask('email').mask($('input[name="email"]'));
    },

    /**
     * Prepare Ajax options.
     *
     * @returns {{type: string, url: string}}
     */
    prepareAjaxOptions() {
        return {
            url: Common.ajaxUrl,
            type: 'post'
        };
    },

};

export { Common };
