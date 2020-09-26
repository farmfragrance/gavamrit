<?php
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

namespace Drupal\animate;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

class AnimateService {

  /**
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  private $config;

  /**
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  private $logger;

  /**
   * AnimateService constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $configFactory
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $loggerChannelFactory
   */
  public function __construct(ConfigFactoryInterface $configFactory,
                              LoggerChannelFactoryInterface $loggerChannelFactory) {
    $this->config = $configFactory;
    $this->logger = $loggerChannelFactory->get('animate');
  }

  /**
   * Return animation class
   *
   * @return array
   */
  public function getAnimationClasses(){
    return [
      "none" => "N/A",
      "Attention Seekers" => [
        "bounce" => "bounce",
        "flash" => "flash",
        "pulse" => "pulse",
        "rubberBand" => "rubberBand",
        "shake" => "shake",
        "swing" => "swing",
        "tada" => "tada",
        "wobble" => "wobble",
        "jello" => "jello",
        "heartBeat" => "heartBeat"
      ],
      "Bouncing Entrances" => [
        "bounceIn" => "bounceIn",
        "bounceInDown" => "bounceInDown",
        "bounceInLeft" => "bounceInLeft",
        "bounceInRight" => "bounceInRight",
        "bounceInUp" => "bounceInUp"
      ],
      "Fading Entrances" => [
        "fadeIn" => "fadeIn",
        "fadeInDown" => "fadeInDown",
        "fadeInDownBig" => "fadeInDownBig",
        "fadeInLeft" => "fadeInLeft",
        "fadeInLeftBig" => "fadeInLeftBig",
        "fadeInRight" => "fadeInRight",
        "fadeInRightBig" => "fadeInRightBig",
        "fadeInUp" => "fadeInUp",
        "fadeInUpBig" => "fadeInUpBig"
      ],
      "Flippers" => [
        "flip" => "flip",
        "flipInX" => "flipInX",
        "flipInY" => "flipInY",
      ],
      "Lightspeed" => [
        "lightSpeedIn" => "lightSpeedIn",
      ],
      "Rotating Entrances" => [
        "rotateIn" => "rotateIn",
        "rotateInDownLeft" => "rotateInDownLeft",
        "rotateInDownRight" => "rotateInDownRight",
        "rotateInUpLeft" => "rotateInUpLeft",
        "rotateInUpRight" => "rotateInUpRight"
      ],
      "Sliding Entrances" => [
        "slideInUp" => "slideInUp",
        "slideInDown" => "slideInDown",
        "slideInLeft" => "slideInLeft",
        "slideInRight" => "slideInRight"

      ],
      "Zoom Entrances" => [
        "zoomIn" => "zoomIn",
        "zoomInDown" => "zoomInDown",
        "zoomInLeft" => "zoomInLeft",
        "zoomInRight" => "zoomInRight",
        "zoomInUp" => "zoomInUp"
      ],
      "Specials" => [
        "hinge" => "hinge",
        "jackInTheBox" => "jackInTheBox",
        "rollIn" => "rollIn",
      ]
    ];
  }
}
