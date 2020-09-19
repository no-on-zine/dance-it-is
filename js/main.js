/*--------- Menu ---------*/

jQuery(function() {
    jQuery('.menu-trigger').on('click', function() {
        jQuery('header').toggleClass('active');
        return false;
    });
});

jQuery(function() {
    jQuery('.menu_close').on('click', function() {
        jQuery('header').removeClass('active');
        return false;
    });
});

jQuery(function() {
    jQuery('.menu_t').on('click', function() {
        jQuery('header').toggleClass('active');
        return false;
    });
});

jQuery(function() {
    jQuery('.menu_close').on('click', function() {
        jQuery('header').removeClass('active');
        return false;
    });
});



/*--------- 下から上に移動　フェードイン ---------*/

jQuery(function() {
    jQuery('.slide_fade20').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            jQuery(this).stop().addClass('set');
        }
    });

    jQuery('.slide_fade10').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            jQuery(this).stop().addClass('set');
        }
    });
});

/*--------- スティッキーヘッダー ---------*/
jQuery(function($) {
    $(function() {
        var $win = $(window),
            $cloneNav = $('.p_header').clone().addClass('clone-nav').appendTo('body'),
            showClass = 'is-show';

        $win.on('load scroll', function() {
            var value = $(this).scrollTop();
            if (value > 400) {
                $cloneNav.addClass(showClass);
            } else {
                $cloneNav.removeClass(showClass);
            }
        });
    });

});

jQuery(function($) {
    $.simpleTicker($("#ticker-fade"), { 'effectType': 'fade' });
});

jQuery(function($) {
    $(".s_0").t()

    //マウスを乗せたら発動
    $('.s_1_hover').hover(function() {
        $(".s_1").t()
        $('.s_1').removeClass('none');
        $('.s_0, .s_2, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');

    });
    $('.s_2_hover').hover(function() {
        $(".s_2").t()
        $('.s_2').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
    });
    $('.s_3_hover').hover(function() {
        $(".s_3").t()
        $('.s_3').removeClass('none');
        $('.s_0, .s_1, .s_2, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
    });
    $('.s_4_hover').hover(function() {
        $(".s_4").t()
        $('.s_4').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_2, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
    });
    $('.s_5_hover').hover(function() {
        $(".s_5").t()
        $('.s_5').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_2, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
    });
    $('.s_6_hover').hover(function() {
        $(".s_6").t()
        $('.s_6').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_2, .s_7, .s_8, .s_9, .s_10').addClass('none');
    });
    $('.s_7_hover').hover(function() {
        $(".s_7").t()
        $('.s_7').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_2, .s_8, .s_9, .s_10').addClass('none');
    });
    $('.s_8_hover').hover(function() {
        $(".s_8").t()
        $('.s_8').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_2, .s_9, .s_10').addClass('none');
    });
    $('.s_9_hover').hover(function() {
        $(".s_9").t()
        $('.s_9').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_2, .s_10').addClass('none');
    });
    $('.s_10_hover').hover(function() {
        $(".s_10").t()
        $('.s_10').removeClass('none');
        $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_2').addClass('none');
    });
});