<?php
// Tutorial here https://www.youtube.com/watch?v=WtP6TEiY984&list=PLNqG1qGUllk2pukgHP385ll0ENmRr9E_M&index=7

/**
 * Plugin Name: Techiepress Elementor Widgets
 * Plugin URI: https://omukiguy.com
 * Autor: TechiePress
 * Autor URI: https://omukiguy.com
 * Description: Elementor Widgets from Techiepress like the donate button for payments
 * Version: 0.1.0
 * Licence: 0.1.0
 * Licence URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: techiepress-elementor-widgets
 */

if (! defined('ABSPATH')) {
  exit;
}

final class TechiepressElementorWidget {

  const VERSION = '0.1.0';
  const ELEMENTOR_MINIMUM_VERSION = '3.0.0';
  const PHP_MINIMUM_VERSION = '7.0';

  private static $_instance = null;

  public function __construct()
  {
    add_action('init', array($this, 'i18n'));
    add_action('plugins_loaded', array($this, 'init_plugin'));
  }

  public function i18n()
  {
    load_plugin_textdomain('techiepress-elementor-widgets');
  }

  public function init_plugin()
  {
    // check version php version
    // check elementor instalation
    // bring in the widget classes
    // bring in the controls
  }

  public function init_controls()
  {

  }

  public function init_widgets()
  {

  }

  public static function get_instance()
  {
    if (null == self::$_instance) {
      self::$_instance = new Self();
    }
    
    return self::$_instance;
  }


}

// TechiepressElementorWidget::get_instance();

add_action('techiepress_do_action', 'echo_header_2');

function echo_header_2()
{
  echo '<h2>' . apply_filters('techipress_title', 'This is our header two') . '</h2>';
}

add_filter('techipress_title', 'techipress_modify_title');

function techipress_modify_title($title)
{
  $title = 'Hello title -' . $title;

  return $title;
}
