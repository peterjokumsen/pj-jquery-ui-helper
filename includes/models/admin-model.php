<?php

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class PJJUH_Admin_Model extends PJ_Admin_Model {
  private $plugin_version = '1.0.1';
  private $plugin_settings_groups;
  
  public function __construct() {
    $this->plugin_settings_groups = array(
      'pjjuh_settings_group'=> array(
          'title'=> 'PJ jQuery UI Helper Settings',
          'description'=> 'General settings for PJ jQuery UI Helper',
          'name'=>'pjjuh_settings',
          'items'=> array(
              'theme'=> array(
                  'title'=> 'CSS Theme',
                  'description'=> 'The CSS Theme to use for jQuery UI.',
                  'type'=> 'drop_down',
                  'accepted_items'=> array('blue', 'base'),
                  'default'=> 'base'
              )
          )  
      ),
      'pjjuh_dialog_settings_group'=> array(
          'title'=> 'jQuery UI Dialog Settings',
          'description'=> 'Settings for the Dialog in jQuery UI',
          'name'=>'pjjuh_dialog_settings',
          'items'=> array(
              'width'=> array(
                  'title'=> 'Dialog Width',
                  'description'=> 'The width to use globally for dialogs created with jQuery UI',
                  'type'=> 'int',
                  'default'=> 300
              ),
              'height'=> array(
                  'title'=> 'Dialog Height',
                  'description'=> 'The height to use globally for dialogs created with jQuery UI',
                  'type'=> 'int',
                  'default'=> 400
              ),
              'modal'=> array(
                  'title'=> 'Modal',
                  'description'=> 'Default all dialogs to be Modal.',
                  'type'=> 'checkbox',
                  'default'=> true
              )
          ),
      )
  );
    add_action('admin_init', array($this, 'register_settings'));
  }
  
  /*
   * Register settings for use in Admin Menu
   */
  public function register_settings() {
    register_setting('pjjuh_settings', 'pjjuh_settings');
  }
  
  public function register_model() {
    $current_version = get_option('pjjuh_version');
    if (!$current_version)
    {
      $default_pjjuh_settings = array(
        'theme'=>'blue'
      );
      $default_pjjuh_dialog_settings = array(
        'width'=>300,
        'height'=>400,
        'modal'=>'true'
      );
      add_option('pjjuh_settings', $default_pjjuh_settings);
      add_option('pjjuh_dialog_settings', $default_pjjuh_dialog_settings);
      add_option('pjjuh_verison', $this->plugin_version);
    }
  }
}