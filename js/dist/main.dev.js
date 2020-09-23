"use strict";

jQuery(function ($) {
  //スマホメニュー
  $('.menu-trigger, .menu_t').on('click', function () {
    $('header').toggleClass('active');
    return false;
  });
  $('.menu_close').on('click', function () {
    $('header').removeClass('active');
    return false;
  }); //下から上に移動　フェードイン

  $('.slide_fade20').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $(this).stop().addClass('set');
    }
  });
  $('.slide_fade10').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $(this).stop().addClass('set');
    }
  }); //スティッキーヘッダー

  $(function () {
    var $win = $(window),
        $cloneNav = $('.p_header').clone().addClass('clone-nav').appendTo('body'),
        showClass = 'is-show';
    $win.on('load scroll', function () {
      var value = $(this).scrollTop();

      if (value > 400) {
        $cloneNav.addClass(showClass);
      } else {
        $cloneNav.removeClass(showClass);
      }
    });
  }); //トップページニュースティッカー

  $.simpleTicker($("#ticker-fade"), {
    'effectType': 'fade'
  }); //トップページのsummary point

  $(".s_0").t(); //マウスを乗せたら発動

  $('.s_1_hover').hover(function () {
    $(".s_1").t();
    $('.s_1').removeClass('none');
    $('.s_0, .s_2, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_2_hover').hover(function () {
    $(".s_2").t();
    $('.s_2').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_3_hover').hover(function () {
    $(".s_3").t();
    $('.s_3').removeClass('none');
    $('.s_0, .s_1, .s_2, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_4_hover').hover(function () {
    $(".s_4").t();
    $('.s_4').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_2, .s_5, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_5_hover').hover(function () {
    $(".s_5").t();
    $('.s_5').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_2, .s_6, .s_7, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_6_hover').hover(function () {
    $(".s_6").t();
    $('.s_6').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_2, .s_7, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_7_hover').hover(function () {
    $(".s_7").t();
    $('.s_7').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_2, .s_8, .s_9, .s_10').addClass('none');
  });
  $('.s_8_hover').hover(function () {
    $(".s_8").t();
    $('.s_8').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_2, .s_9, .s_10').addClass('none');
  });
  $('.s_9_hover').hover(function () {
    $(".s_9").t();
    $('.s_9').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_2, .s_10').addClass('none');
  });
  $('.s_10_hover').hover(function () {
    $(".s_10").t();
    $('.s_10').removeClass('none');
    $('.s_0, .s_1, .s_3, .s_4, .s_5, .s_6, .s_7, .s_8, .s_9, .s_2').addClass('none');
  }); //Program詳細ページの表示切り替え

  $(".p_name_1").on("click", function () {
    $(".fade, .box_1").addClass("block");
    $(".box_2, .box_3, .box_4, .box_5, .box_6, .box_7, .box_8").removeClass("block");
  });
  $(".p_name_2").on("click", function () {
    $(".fade, .box_2").addClass("block");
    $(".box_1, .box_3, .box_4, .box_5, .box_6, .box_7, .box_8").removeClass("block");
  });
  $(".p_name_3").on("click", function () {
    $(".fade, .box_3").addClass("block");
    $(".box_1, .box_2, .box_4, .box_5, .box_6, .box_7, .box_8").removeClass("block");
  });
  $(".p_name_4").on("click", function () {
    $(".fade, .box_4").addClass("block");
    $(".box_1, .box_3, .box_2, .box_5, .box_6, .box_7, .box_8").removeClass("block");
  });
  $(".p_name_5").on("click", function () {
    $(".fade, .box_5").addClass("block");
    $(".box_1, .box_3, .box_4, .box_2, .box_6, .box_7, .box_8").removeClass("block");
  });
  $(".p_name_6").on("click", function () {
    $(".fade, .box_6").addClass("block");
    $(".box_1, .box_2, .box_4, .box_5, .box_3, .box_7, .box_8").removeClass("block");
  });
  $(".p_name_7").on("click", function () {
    $(".fade, .box_7").addClass("block");
    $(".box_1, .box_3, .box_2, .box_5, .box_6, .box_4, .box_8").removeClass("block");
  });
  $(".p_name_8").on("click", function () {
    $(".fade, .box_8").addClass("block");
    $(".box_1, .box_3, .box_4, .box_2, .box_6, .box_5, .box_7").removeClass("block");
  });
});