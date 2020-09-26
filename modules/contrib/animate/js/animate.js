(function ($, Drupal, drupalSettings, window) {

  /**
   * Animate - Adding animation functionality to blocks
   *
   * @package     animate
   * @author      Udit Rawat <eklavyarwt@gmail.com>
   * @license     GPL-2.0+
   * @link        http://sarovarcreative.com/
   * @copyright   SarovarCreative
   * Date:        15/04/2020
   * Time:        07:39 AM
   */

  "use strict";

  // Windows vars
  let win = $(window);

  /**
   * Drupal Ajax behaviours and ajax prototypes
   * @type {{attach: attach, detach: detach}}
   */
  Drupal.behaviors.animate = {
    attach: function (context, settings) {
      $('.animated',context).once('anim-processed').waypoint(function(direction) {
        if (direction === 'down') {
          let anim_class_in = $(this.element).attr('data-animation');
          if(anim_class_in){
            $(this.element).addClass(anim_class_in);
          }
        }
      }, {
        triggerOnce: true,
        offset: '100%'
      });
    },
    detach: function (context) {
    }
  };

}(jQuery, Drupal, drupalSettings, window));
