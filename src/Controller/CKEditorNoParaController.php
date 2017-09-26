<?php

namespace Drupal\ckeditor_nopara\Controller;

use Drupal\Core\Controller\ControllerBase;

class CKEditorNoParaController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    );
  }

}
