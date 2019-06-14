$.fn.clicktoggle = function(a, b) {
    return this.each(function() {
        var clicked = false;
        $(this).click(function(e) {
            e.preventDefault();
            if (clicked) {
                clicked = false;
                return b.apply(this, arguments);
            }
            clicked = true;
            return a.apply(this, arguments);
        });
    });
};
$(function() {
    $('.arrow-all').clicktoggle(function() {
        $('.ul-main-composition').fadeIn(700);
        $(this).text('�������� ������ ������');
        $('#arrow').toggleClass('img-rotate');
        $('#arrow2').toggleClass('img-rotate');
        $('#arrow3').toggleClass('img-rotate');
    }, function() {
        $('.ul-main-composition').fadeOut(700);
        $(this).text('� ��� 24 ���� �����');
        $('#arrow').toggleClass('img-rotate');
        $('#arrow2').toggleClass('img-rotate');
        $('#arrow3').toggleClass('img-rotate');
    });
    $('.arrow-down-block').clicktoggle(function() {
        $('.arrow-all').click();
    }, function() {
        $('.arrow-all').click();
    });
});