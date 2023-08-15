"use strict";

AOS.init();

(function ($) {
  // Burger Nav
  $('#burger-nav').click(function () {
    $('#burger-nav').toggleClass('open');
    $('.mobile-nav').toggleClass('open');
    $('body').toggleClass('no-scroll');
  }); // Banner

  $('#close-banner').click(function () {
    $('#banner').hide();
  }); // Progress Bar

  var progressWrap = document.getElementById('progress-wrap');

  if (progressWrap) {
    var replaceComma = function replaceComma(num) {
      return num.replace(/,/g, '');
    };

    var percentage = replaceComma($('#current-count').html()) / replaceComma($('#goal').html()) * 100;
    $($('#progress')).css('width', percentage + '%');
  }
})(jQuery);