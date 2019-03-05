<?php

namespace Drupal\ghe_deg_prog\Plugin\Block;

/**
 * @file
 * Custom block for displaying degree programs.
 */

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DegProgBlock' block.
 *
 * @Block(
 *  id = "explore_degree_programs",
 *  admin_label = @Translation("Explore Degree Programs"),
 * )
 */
class DegProgBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['explore_degree_programs'] = [
      '#markup' => '<div id="ghe-deg-prog"></div>',
      '#attached' => [
        'library' => [
          'themekit/ghe-deg-prog',
        ],
      ],
    ];
    return $build;
  }

}
