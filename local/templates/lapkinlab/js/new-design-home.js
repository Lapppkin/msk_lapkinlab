var complexTariff = {
  init: function () {
    this.$content = $('.js-complex-tariff')
    this.$contentPreview = $('.js-complex-tariff-preview')
    this.eventHandler()
  },

  eventHandler: function () {
    var self = this;

    $(document).on('click', '.js-complex-tariff-open', function () {
      self.openContent()
    })

    $(document).on('click', '.js-complex-tariff-close', function () {
      self.closeContent()
    })
  },

  openContent: function () {
    this.$contentPreview.addClass('open-content')
    this.$content.slideDown()
  },

  closeContent: function () {
    this.$contentPreview.removeClass('open-content')
    this.$content.slideUp()
  }
}

complexTariff.init()


$(document).on('click', '.js-open-modal-case', function () {
  var id = $(this).data('modal-case')
  $('.js-modal-case').modal('hide')
  $('#' + id).modal('show')
  return false
})

$(document).on('click', '.js-close-modal-case', function () {
  $('.js-modal-case').modal('hide')
})


var stocksModal = {
  init: function () {
    this.$title = $('.js-modal-anti-crisis-offer .lapkin-form--title')
    this.$theme = $('.js-modal-anti-crisis-offer .js-stocks-theme')
    this.initSlider()
    this.eventHandler()
  },

  eventHandler: function () {
    var self = this

    setTimeout(function () {
      self.openActionModal(1)
    }, 10000)

    setInterval(function () {
      self.animateButton()
    }, 3000);

    $(document).on('click', '.js-anti-crisis-offer-open', function () {
      self.animateButton()
      self.openActionModal(0)
    })

    $(document).on('click', '.js-anti-crisis-offer-form-send', function () {
      $('#anti-crisis-offer-modal').modal('hide')
    })
  },

  openActionModal(actionNumber) {
    $('#anti-crisis-offer-modal').modal('show')
    this.slider.trigger('to.owl.carousel', actionNumber);
    this.slider.owlCarousel().trigger('refresh.owl.carousel')
  },

  animateButton: function () {
    var btn = document.getElementById("bubbly-button")
    if (!btn)
      return

    btn.classList.remove('animate')
    btn.classList.add('animate')
    var intervalId = setTimeout(function () {
      btn.classList.remove('animate')
      clearTimeout(intervalId)
    }, 750);
  },

  initSlider: function () {
    var self = this;

    this.slider = $('.js-stocks-slider');

    $('.js-stocks-slider').addClass('owl-carousel').owlCarousel({
      items: 1,
      loop: true,
      nav: false,
      dots: false,
    }).
      on('mouseover', function () {
        self.slider.trigger('stop.owl.autoplay');
      }).
      on('mouseleave', function () {
        self.slider.trigger('play.owl.autoplay');
      })
      .on('changed.owl.carousel', function () {
        var $slide = $('.js-stocks-slider .owl-item.active .item')
        self.$title.text($slide.data('title'))
        self.$theme.val($slide.data('theme'))
      });

    $(document).on('click', '.js-stocks-slider-prev', function () {
      self.slider.owlCarousel().trigger('prev.owl.carousel')
    })

    $(document).on('click', '.js-stocks-slider-next', function () {
      self.slider.owlCarousel().trigger('next.owl.carousel')
    })
  }
}

stocksModal.init()
