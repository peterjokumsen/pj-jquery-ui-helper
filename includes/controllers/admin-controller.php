<?php

/* 
 * Admin controller
 */

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

/** Include Model and View */
require_once $pjjuh_plugin_dir . 'models/admin-model.php';
require_once $pjjuh_plugin_dir . 'views/admin/admin-main-view.php';

class PJJUH_Admin_Controller extends PJ_Admin_Controller {
  
  private $class_name;
  
  public function __construct() {
    if (!$this->classes['model']) {
      $this->classes['model'] = new PJJUH_Admin_Model();
    }
    if (!$this->classes['view']) {
      $this->classes['view'] = new PJJUH_Admin_View();
    }    
    add_action('admin_menu', array($this->classes['view'], 'create_admin_menu'));
    add_action('admin_init', array($this, 'register_settings'));
  }
  
  public function register_settings() {
    $this->classes['model']->register_settings();
    add_settings_section('pjjuh_general_settings', 'General Settings', array($this->classes['view'], 'general_settings_section_text'), 'pjjuh_settings');
    add_settings_field('theme', 'CSS Theme', array($this->classes['view'], 'plugin_setting_dropdown'), 'pjjuh_settings', 'pjjuh_general_settings');
  }
  
  //this to be moved into model
  public function pjjuh_init_settings()
  {
    if (!$this->classes['model']) {
      $this->classes['model'] = new PJJUH_Admin_Model();
    }
    $this->classes['model']->register_model();
  }
}