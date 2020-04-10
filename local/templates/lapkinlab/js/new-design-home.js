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


$(document).on('click', '.js-open-modal-case', function () {
  var id = $(this).data('modal-case')
  $('.js-modal-case').modal('hide')
  $('#' + id).modal('show')
  return false
})

$(document).on('click', '.js-close-modal-case', function () {
  $('.js-modal-case').modal('hide')
})

complexTariff.init()
