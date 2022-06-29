<?php

namespace PSP\Includes;

class Admin
{
  function __construct()
  {
    add_action('admin_menu', [$this, 'psp_admin_menu']);
  }

  public function psp_admin_menu()
  {
    $hook = add_menu_page(
      __('Plugin Structure', 'plugin-structure'),
      __('Plugin Structure', 'plugin-structure'),
      'manage_options',
      'plugin-structure',
      [$this, 'admin_menu_page'],
      'dashicons-text',
      10
    );

    add_action('load-' . $hook, [$this, 'init_hooks']);
  }

  public function init_hooks()
  {
    add_action('admin_enqueue_scripts', [$this, 'enqueue_scripts']);
  }

  public function admin_menu_page()
  {
    echo '<div id="psp-admin-app"></div>';
  }

  public function enqueue_scripts()
  {
    // wp_enqueue_style('wpsfb-admin-style');
    wp_enqueue_script('psp-admin-script');
  }
}