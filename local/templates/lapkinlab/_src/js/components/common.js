/**
 * Common scripts.
 *
 * @type {{appendModal(*=, *): void, setPhoneMask(): void, init(): void, min: boolean, ajaxUrl: string, scrollToTop(): void, clearModalsContainer(): void, setEmailMask(): void, isJsonString(*=): boolean, prepareAjaxOptions(): {type: string, url: string}, modalsContainer: string}}
 */
let Common = {

    min: false,

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

        // Раскрытие тарифов
        $(document).on('click', '.js-tarif-ext', () => {
            $('.js-tarif-ext').slideUp().nextAll().slideDown().css('display', 'flex');
        });

        // Обработчики формы калькулятора
        $(document).on('click', '.form-field-radio--calculator .form-field-radio--items label.selectable', (e) => {
            $(e.currentTarget).closest('.form-field-radio--items').find('label').removeClass('active');
            $(e.currentTarget).addClass('active').closest('.form-field-radio--calculator').addClass('active');
        });
        $(document).on('click', '.form-field-radio--calculator .form-field-radio--items label.reset', (e) => {
            $(e.currentTarget).closest('.form-field-radio--items').find('label').removeClass('active');
            $(e.currentTarget).removeClass('active').closest('.form-field-radio--calculator').removeClass('active').find('input').each(function () {
                $(this).prop('checked', false).removeAttr('checked');
                $(this)[0].checked = false;
            });
        });
        $(document).on('change input', '.form-field-select--calculator select', (e) => {
            $(e.currentTarget).addClass('active').closest('.form-field-select--calculator').addClass('active');
        });

        // Преобразование полей калькулятора в сообщение
        $(document).on('click', '.calculator-form--form .js-send-form', (e) => {
            let form = $($(e.currentTarget)[0].form);
            let message = '';

            // Selects
            let selects = form.find('select.active');
            selects.each(function () {
                if (this.selectedIndex !== 0) {
                    message += `${$(this).data('label')}: ${this.options[this.selectedIndex].text}\r\n\r\n`;
                }
            });
            // Radios
            let radios = form.find('input[type="radio"]:checked');
            let values = {
                yes: 'Да',
                no: 'Нет',
                complicate: 'Затрудняюсь ответить'
            };
            radios.each(function () {
                message += `${$(this).data('label')}: ${values[this.value]}\r\n`;
                console.log(message);
            });

            form.find('.form-field-textarea[hidden] textarea').val(message);
        });

        // Обработчик после загрузки страницы
        $(document).ready(() => {
            //Common.setEmailMask();
            Common.setPhoneMask();
        });

        // Обработчик при прокрутке страницы
        $(document).scroll(() => {
            Common.scrollToTop();
        });

        // Обработчик после завершения ajax
        $(document).ajaxComplete(() => {
            //Common.setEmailMask();
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
            mask: '+7(999)999-9999',
            placeholder: '_',
        });
    },

    /**
     * Set email mask.
     */
    setEmailMask() {
        require('inputmask/dist/jquery.inputmask.bundle');
        new Inputmask('email').mask($('input[name="email"]'));
    }

};

export { Common };
