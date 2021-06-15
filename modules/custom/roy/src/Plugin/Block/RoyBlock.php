<?php

namespace Drupal\roy\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "rajesh_block",
 *   admin_label = @Translation("Rajesh block"),
 *   category = @Translation("Rajesh World"),
 * )
 */
class RoyBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!, abc sdfgsdgfads'),
      '#cache' => ['max-age' => 0],
    ];
  }

}
