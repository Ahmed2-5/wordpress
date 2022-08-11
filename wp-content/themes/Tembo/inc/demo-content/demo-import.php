<?php
/**
 * Import demo data.
 */

// Disable regenerating images while importing media
add_filter( 'ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'ocdi/disable_pt_branding', '__return_true' );

function beorx_ocdi_confirmation_dialog_options ( $options ) {
	return array_merge( $options, array(
		'width'       => 400,
		'dialogClass' => 'wp-dialog',
		'resizable'   => false,
		'height'      => 'auto',
		'modal'       => true,
	) );
}
add_filter( 'ocdi/confirmation_dialog_options', 'beorx_ocdi_confirmation_dialog_options', 10, 1 );


function beorx_import_demo_files() {
	return array(
		array(
			'import_file_name' => esc_html__('Home One', 'beorx'),

			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/content.xml',

			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/widget.wie',

			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/customizer.dat',

			'local_import_json' => array(
				array(
					'file_path'   => trailingslashit(get_template_directory()) . '/inc/demo-content/theme-options.json',
					'option_name' => 'beorx_theme_options',
				),
			),

			'import_notice' => esc_html__('Please click on the Import button only once and wait, it can take a couple of minutes.', 'beorx'),

			'preview_url'                => 'http://beorx.themeori.com/',
		),
	);
}

add_filter('ocdi/import_files', 'beorx_import_demo_files');

/**
 * Adding local_import_json
 */
if (!function_exists('beorx_after_content_import_execution')) {
	function beorx_after_content_import_execution($selected_import_files, $import_files, $selected_index) {

		$downloader = new OCDI\Downloader();

		if (!empty($import_files[$selected_index]['import_json'])) {

			foreach ( $import_files[$selected_index]['import_json'] as $index => $import ) {
				$file_path = $downloader->download_file($import['file_url'], 'demo-import-file-' . $index . '-' . date('Y-m-d__H-i-s') . '.json');
				$file_raw  = OCDI\Helpers::data_from_file($file_path);
				update_option($import['option_name'], json_decode($file_raw, true));
			}

		} else if (!empty($import_files[$selected_index]['local_import_json'])) {

			foreach ( $import_files[$selected_index]['local_import_json'] as $index => $import ) {
				$file_path = $import['file_path'];
				$file_raw  = OCDI\Helpers::data_from_file($file_path);
				update_option($import['option_name'], json_decode($file_raw, true));
			}
		}

	}

	add_action('ocdi/after_content_import_execution', 'beorx_after_content_import_execution', 3, 99);
}



/* After Import */

if (!function_exists('beorx_after_import')) {
	function beorx_after_import($selected_import) {

		//Set Menu
		$main_menu = get_term_by('name', esc_html__('Main Menu', 'beorx'), 'nav_menu');

		set_theme_mod('nav_menu_locations', array(
				'menu-1' => $main_menu->term_id,
			)
		);

		$home_page = get_page_by_title(esc_html__('Home', 'beorx'));

		//Set Front page
		if (isset($home_page->ID)) {
			update_option('page_on_front', $home_page->ID);
			update_option('show_on_front', 'page');
		}

		// Set Post Page
		$blog_page   = get_page_by_title( esc_html__('Blog','beorx' ));
		if (isset($blog_page->ID)) {
			update_option('page_for_posts', $blog_page->ID);
		}
	}
	add_action( 'ocdi/after_import', 'beorx_after_import' );
}