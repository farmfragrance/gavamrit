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

namespace Drupal\animate\Plugin\field_group\FieldGroupFormatter;

use Drupal\field_group\Plugin\field_group\FieldGroupFormatter\HtmlElement;

/**
 * Plugin implementation of the 'animated_html_element' formatter.
 *
 * @FieldGroupFormatter(
 *   id = "animated_html_element",
 *   label = @Translation("Animated HTML element"),
 *   description = @Translation("This fieldgroup renders the inner content in a HTML element with classes and attributes and some animation."),
 *   supported_contexts = {
 *     "form",
 *     "view",
 *   }
 * )
 */
class AnimatedHtmlElement extends HtmlElement {

  /**
   * {@inheritdoc}
   */
  public function process(&$element, $processed_object) {

    // Keep using preRender parent for BC.
    parent::process($element, $processed_object);

    $attributes = &$element['#attributes'];

    // adding effecct
    if(!empty($this->getSetting('effect')) ||
      $this->getSetting('effect') != 'none'){
      $attributes->setAttribute('data-animation', $this->getSetting('effect'));
    }

    // Add speed
    $attributes->setAttribute('data-speed', $this->getSetting('speed'));

    // add animated class
    $attributes->addClass('animated');

    // Add object type
    $element['#objectType'] = 'animated_html_element';

    // Add animation library
    $element['#attached']['library'][] = 'animate/animate';
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm() {
    // Build parent form
    $form = parent::settingsForm();
    // Unset speed key
    if(array_key_exists('speed',$form)){
      unset($form['speed']);
    }
    // Unset effect key
    if(array_key_exists('effect',$form)){
      unset($form['effect']);
    }
    // Add effect item back with animation
    $anim_classes = \Drupal::service('animate')->getAnimationClasses();
    $form['effect'] = [
      '#title' => $this->t('Effect'),
      '#type' => 'select',
      '#options' => $anim_classes,
      '#default_value' => $this->getSetting('effect'),
      '#weight' => 6,
      '#attributes' => [
        'data-fieldgroup-selector' => 'effect',
      ],
    ];

    return $form;
  }
}
