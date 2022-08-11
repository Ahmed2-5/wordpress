<?php
/**
 * Theme Setup 
 */
require get_template_directory() . '/inc/theme-install.php';

/**
 * Register Widget 
 */
require get_template_directory() . '/inc/widget.php';

/**
 * Enqueue Assets
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Install Plugins
 */
require get_template_directory() . '/lib/class-tgm-plugin-activation.php';

require get_template_directory() . '/inc/plugins/install.php';

/**
 * Default Theme Options
 */

require get_template_directory() . '/inc/options-default.php';

/**
 * Theme Options 
 */

require get_template_directory() . '/inc/theme-options.php';

/**
 * Theme Options 
 */

require get_template_directory() . '/inc/metabox.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
// custom comment form
require get_template_directory() . '/inc/comment-form.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Demo Import
 */
require get_template_directory() . '/inc/demo-content/demo-import.php';