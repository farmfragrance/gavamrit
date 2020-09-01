/**
 * @file
 * Commerce Popup Cart javascript functions.
 */

(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.cartpopup_behavior = {
    attach: function(context, settings) {
      // Shopping cart block contents.
      if ($.isFunction($.fn.hoverIntent)) {
        $("#block-commerce-popup-cart-commerce-popup-cart").click(function(){
          var wrapper = $(this).find('#commerce-cart-pop-block');
          wrapper.toggle();
        });
        $("#block-commerce-popup-cart-commerce-popup-cart").hoverIntent({
          sensitivity: 7,
          interval: 50,
          over: function () {
              console.log('show')
              $('#commerce-cart-pop-block').show();
            var wrapper = $(this).find('#commerce-cart-pop-block');
            wrapper.show();
          },
          timeout: 500,
          out: function () {
              console.log('hide');
            $('#commerce-cart-pop-block').hide();
          }
        });
      }
    }
  }
})(jQuery, Drupal, this, this.document);
