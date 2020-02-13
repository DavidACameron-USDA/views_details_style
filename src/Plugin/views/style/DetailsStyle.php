<?php

namespace Drupal\views_details_style\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render rows grouped in HTML5 details elements.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "details",
 *   title = @Translation("HTML5 Details"),
 *   help = @Translation("Displays rows grouped in HTML5 details elements."),
 *   theme = "views_view_details",
 *   display_types = {"normal"}
 * )
 */
class DetailsStyle extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;

}

