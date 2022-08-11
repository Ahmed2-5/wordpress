<?php

/**
 * Plugin Name: Themeori Addons For Elementor 
 * Description: Custom Elements Pixel Perfect Design with Customizable 
 * Plugin URI:  https://themeforest.net/user/themeori
 * Version:     1.0.1
 * Author:      ThemeOri
 * Author URI:  https://themeforest.net/user/themeori
 * Text Domain: themeori-addon
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if (!defined('ABSPATH')) exit;

final class ThemeOri_Addon
{

	const VERSION = '1.0.1';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct()
	{

		// Load translation
		add_action('init', array($this, 'i18n'));

		// Init Plugin
		add_action('plugins_loaded', array($this, 'init'));
	}

	public function i18n()
	{
		load_plugin_textdomain('themeori-addon');
	}

	public function init()
	{

		if (!did_action('elementor/loaded')) {
			add_action('admin_notices', array($this, 'admin_notice_missing_main_plugin'));
			return;
		}

		if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
			add_action('admin_notices', array($this, 'admin_notice_minimum_elementor_version'));
			return;
		}

		if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
			add_action('admin_notices', array($this, 'admin_notice_minimum_php_version'));
			return;
		}

		require_once('plugin.php');
	}

	public function admin_notice_missing_main_plugin()
	{
		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}

		$message = sprintf(
			esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'themeori-addon'),
			'<strong>' . esc_html__('ThemeOri Addons For Elementor ', 'themeori-addon') . '</strong>',
			'<strong>' . esc_html__('Elementor', 'themeori-addon') . '</strong>'
		);

		printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
	}

	public function admin_notice_minimum_elementor_version()
	{
		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}

		$message = sprintf(
			esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'themeori-addon'),
			'<strong>' . esc_html__('ThemeOri Addons For Elementor ', 'themeori-addon') . '</strong>',
			'<strong>' . esc_html__('Elementor', 'themeori-addon') . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
	}

	public function admin_notice_minimum_php_version()
	{
		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}

		$message = sprintf(
			esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'themeori-addon'),
			'<strong>' . esc_html__('ThemeOri Addons For Elementor ', 'themeori-addon') . '</strong>',
			'<strong>' . esc_html__('PHP', 'themeori-addon') . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
	}
}

new ThemeOri_Addon();
