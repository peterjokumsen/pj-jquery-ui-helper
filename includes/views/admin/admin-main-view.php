<?php

class PJJUH_Admin_View extends PJ_Admin_View {
  
  public function __construct() {
    $this->view_content = '';
  }
  
  public function create_admin_menu() {
    $capability = 'install_plugins';
    $slug = 'pj-jquery-ui-helper';
    //create new admin menu page, calls temp_admin_menu_page for now 
    add_menu_page( 
      'PJ Plugins', 
      'PJ Plugins', 
      $capability, 
      $slug);
    //create admin sub-menu page, calls temp_admin_menu_page for now 
    //same slug as parent to have it overwrite the parent page
    add_submenu_page(
      $slug,
      'PJ Jquery UI Helper',
      'PJ Jquery UI Helper',
      $capability,
      $slug,
      array($this, 'display_sub_menu'));
    //create admin sub-menu page, calls temp_admin_menu_page for now
    add_submenu_page(
      $slug,
      'PJJUH SUB MENU',
      'PJJUH SUB MENU',
      $capability,
      $slug . '_sub',
      array($this, 'display_sub_menu'));
  }
  
  public function display_sub_menu() {
    $include_path = plugin_dir_path(__FILE__);
    include $include_path . 'admin-menu-header.php';
    
    settings_fields('pjjuh_settings');
    do_settings_sections('pjjuh_settings');
    
    include $include_path . 'admin-menu-footer.php';
  }
  
  public function general_settings_section_text() {
    echo '<p>' . __('general settings section', 'pj-jquery-ui-helper') . '</p>';
  }
  
  public function plugin_setting_string() {
    $options = get_option('pjjuh_settings');
    echo '<input id="pjjuh_settings" name="pjjuh_settings[theme]" size="40" type="text" value="'. $options['theme'] .'"/>';
  }
  
  public function plugin_setting_dropdown() {
    global $wp_current_filter;
    $options = get_option('pjjuh_settings');
    $selected_option = $options['theme'];
    echo '<select id="pjjuh_settings" name="pjjuh_settings[theme]">'.
      '<option value="blue"'. ($selected_option == 'blue' ? ' selected' : '') .'>blue</option>'.
      '<option value="base"'. ($selected_option == 'base' ? ' selected' : '') .'>base</option>'.
      '</select>';
  }
  
  public function admin_sub_menu_page() {
    //$include_path = plugin_dir_path(__FILE__);
    //include $include_path . 'admin-menu-header.php';
    echo '<h2>' . get_admin_page_title() . '</h2>';
    
    //include $include_path . 'admin-menu-footer.php';    
  }
}



/*
     <form name="f" method="post" action="post.php">
     
     <table width="100%" border="0">
       <tr>
         <td width="45%"><h1>Login Widget AFO Settings</h1></td>
       <td width="55%">&nbsp;</td>
       </tr>
       <tr>
         <td><strong>Login Redirect Page:</strong></td>
       <td><?php
           $args = array(
           'depth'            => 0,
           'selected'         => $redirect_page,
           'echo'             => 1,
           'show_option_none' => '-',
           'id' 			   => 'redirect_page',
           'name'             => 'redirect_page'
           );
           wp_dropdown_pages( $args ); 
         ?></td>
       </tr>

        <tr>
         <td><strong>Logout Redirect Page:</strong></td>
        <td><?php
           $args1 = array(
           'depth'            => 0,
           'selected'         => $logout_redirect_page,
           'echo'             => 1,
           'show_option_none' => '-',
           'id' 			   => 'logout_redirect_page',
           'name'             => 'logout_redirect_page'
           );
           wp_dropdown_pages( $args1 ); 
         ?></td>
       </tr>

       <tr>
         <td><strong>Link in Username:</strong></td>
       <td><?php
           $args2 = array(
           'depth'            => 0,
           'selected'         => $link_in_username,
           'echo'             => 1,
           'show_option_none' => '-',
           'id' 			   => 'link_in_username',
           'name'             => 'link_in_username'
           );
           wp_dropdown_pages( $args2 ); 
         ?></td>
       </tr>

       <tr>
         <td>&nbsp;</td>
         <td><input type="submit" name="submit" value="Save" class="button button-primary button-large" /></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td colspan="2">Use <span style="color:#000066;">[login_widget]</span> shortcode to display login form in post or page.<br />
        Example: <span style="color:#000066;">[login_widget title="Login Here"]</span></td>
       </tr>
     </table>
     </form>
*/