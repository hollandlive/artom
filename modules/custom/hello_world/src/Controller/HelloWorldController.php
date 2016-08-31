<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController
 */
namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Example of Controller
 */

class HelloWorldController extends ControllerBase {
  
  public function content() {
    return array (
      '#type' => 'markup',
      '#markup' => $this->t('Hello World'),
    );
  }
}


