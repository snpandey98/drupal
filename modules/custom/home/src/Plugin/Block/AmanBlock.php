<?php

namespace Drupal\home\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "aman_block",
 *   admin_label = @Translation("Aman block"),
 *   category = @Translation("Aman World"),
 * )
 */
class AmanBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!, abc'),
    ];
  }

}
