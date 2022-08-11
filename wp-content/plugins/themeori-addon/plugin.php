<?php

namespace ThemeOri_Addon;

class Plugin
{

	private static $_instance = null;

	public static function instance()
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	public function register_widgets( $widgets_manager ) {
		// Its is now safe to include Widgets files
		require_once(__DIR__ . '/widgets/home-banner.php');
		require_once(__DIR__ . '/widgets/section-title.php');
		require_once(__DIR__ . '/widgets/about-us.php');
		require_once(__DIR__ . '/widgets/services.php');
		require_once(__DIR__ . '/widgets/marketing.php');
		require_once(__DIR__ . '/widgets/grow-business.php');
		require_once(__DIR__ . '/widgets/solution.php');
		require_once(__DIR__ . '/widgets/faq.php');
		require_once(__DIR__ . '/widgets/team-slide.php');
		require_once(__DIR__ . '/widgets/blog-grid.php');
		require_once(__DIR__ . '/widgets/service-item.php');
		require_once(__DIR__ . '/widgets/team-item.php');
		require_once(__DIR__ . '/widgets/icon-box.php');
		require_once(__DIR__ . '/widgets/button-one.php');

		// Register Widgets
		$widgets_manager->register(new Widgets\Home_Banner());
		$widgets_manager->register(new Widgets\Section_Title());
		$widgets_manager->register(new Widgets\About_Us());
		$widgets_manager->register(new Widgets\Services());
		$widgets_manager->register(new Widgets\Marketing());
		$widgets_manager->register(new Widgets\Grow_Business());
		$widgets_manager->register(new Widgets\Solution());
		$widgets_manager->register(new Widgets\Faqs());
		$widgets_manager->register(new Widgets\Team_Slide());
		$widgets_manager->register(new Widgets\Blog_Grid());
		$widgets_manager->register(new Widgets\Service_Item());
		$widgets_manager->register(new Widgets\Team_Item());
		$widgets_manager->register(new Widgets\Icon_Box());
		$widgets_manager->register(new Widgets\Button_One());
	}
	// Category Registered
	public function add_elementor_widget_categories($elements_manager)
	{

		$elements_manager->add_category(
			'themeori-addon',
			[
				'title' => esc_html__('ThemeOri Addons', 'themeori-addon'),
				'icon' => 'eicon-custom',
			]
		);
	}

	// Custom CSS
	public function themeori_widget_styles()
	{
		wp_register_style('themeori-css', plugins_url('/assets/css/themeori-addon.css', __FILE__));
		wp_enqueue_style('themeori-css');
	}

	// Custom JS
	public function themeori_widget_scripts()
	{
		wp_register_script('themeori-js', plugins_url('assets/js/custom.js', __FILE__),array( 'jquery' ));
		wp_enqueue_script('themeori-js');
	}

	public function __construct()
	{

	// Register widgets
	add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );

	// Register Category
	add_action('elementor/elements/categories_registered',  [$this, 'add_elementor_widget_categories']);

	// Custom CSS
	add_action('elementor/frontend/after_enqueue_styles', [$this, 'themeori_widget_styles']);

	// Custom JS
	add_action('elementor/frontend/after_register_scripts', [$this, 'themeori_widget_scripts']);
	}
}

Plugin::instance();
