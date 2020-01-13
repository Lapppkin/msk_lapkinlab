let TarifSlider = {

    instance: {},
    options: {
        items: 3,
        loop: false,
        nav: false,
        dots: true,
        dotsContainer: '.section--tarif--navigation',
        dotsEach: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            1280: {
                items: 3,
                dots: false,
            }
        }
    },

    init() {

        require('jquery');
        require('owl.carousel');

        $(document).ready(() => {
            let owlTarifSlider = $('.section--tarif--types-wrapper');
            this.instance = owlTarifSlider;
            if (owlTarifSlider.length !== 0) {
                owlTarifSlider.addClass('owl-carousel').owlCarousel(TarifSlider.options);
            }

            $(document).on('click', '.slide-nav', function () {
                let slide = $(this).data('slide');
                owlTarifSlider.trigger('to.owl.carousel', slide - 1);
            });

            $(window).on('resize', function () {
                owlTarifSlider.trigger('destroy.owl.carousel').owlCarousel(TarifSlider.options);
            });
        });

    }

};

export { TarifSlider };
