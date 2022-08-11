<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme beorx for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

add_action( 'tgmpa_register', 'beorx_register_required_plugins' );

function beorx_register_required_plugins() {

	$plugins = array(

		array(
			'name'               => 'Codestar Framework', 
			'slug'               => 'codestar-framework', 
			'source'             => get_template_directory() . '/inc/plugins/codestar-framework.zip', 
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),

		array(
			'name'               => 'Recent Post Widget', 
			'slug'               => 'recent-post-widget', 
			'source'             => get_template_directory() . '/inc/plugins/recent-post-widget.zip', 
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),

		
		array(
			'name'               => 'Themeori Addons', 
			'slug'               => 'themeori-addon', 
			'source'             => get_template_directory() . '/inc/plugins/themeori-addon.zip', 
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),

		array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => false,
		),

		array(
			'name'      => 'Elementor Website Builder',
			'slug'      => 'elementor',
			'required'  => true,
		),

		array(
			'name'      => 'HTML Forms',
			'slug'      => 'html-forms',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'beorx',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                      

	);

	tgmpa( $plugins, $config );
}
