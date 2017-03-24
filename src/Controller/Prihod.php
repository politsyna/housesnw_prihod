<?php

namespace Drupal\node_prihod\Controller;

/**
 * @file
 * Contains \Drupal\node_orders\Controller\Page.
 */
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class Prihod extends ControllerBase {

  /**
   * Page Callback.
   */
  public static function kubatura($node) {
    $diametr = $node->field_brev_diametr->value;
    $dlina = $node->field_brev_dlina->value;
    if (is_object($node)) {
      $count = (3.1416 * pow($diametr / 100, 2)) / 4 * $dlina / 1000;
    }
    return $count;
  }

}
