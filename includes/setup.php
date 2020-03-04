<?php

use Timber\Site;
use Timber\Timber;
use Timber\Menu;

$timber = new Timber;

class Theme extends Site
{
  public function __construct()
  {
    add_action('init', array($this, 'add_menus'));
    add_action('after_setup_theme', array($this, 'theme_supports'));
    add_filter('timber/context', array($this, 'add_to_context'));

    parent::__construct();
  }

  public function add_menus()
  {
    register_nav_menu('main-menu', __('Menu principal'));
  }

  public function theme_supports()
  {
    add_theme_support('editor-styles');
    add_theme_support('title-tag');
    add_theme_support('align-wide');
  }

  public function add_to_context($context)
  {
    $main_menu = new Menu('main-menu');
    $context['main_menu'] = $main_menu;

    $context['options'] = get_fields('option');

    return $context;
  }
}

new Theme();
