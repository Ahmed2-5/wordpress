<?php
/**
 * Registering meta boxes
 *
 * Using Meta Box plugin: http://www.deluxeblogtips.com/meta-box/
 *
 * @see https://docs.metabox.io/
 *
 * @param array $meta_boxes Default meta boxes. By default, there are no meta boxes.
 *
 * @return array All registered meta boxes
 */
function progrisaas_register_meta_boxes( $meta_boxes ) {
	
	// Post format's meta box
	$meta_boxes[] = array(
		'id'       => 'format_detail',
		'title'    => esc_html__( 'Format Details', 'progrisaas' ),
		'pages'    => array( 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
			array(
				'name'             => esc_html__( 'Image', 'progrisaas' ),
				'id'               => 'post_image',
				'type'             => 'image_advanced',
				'class'            => 'image',
				'max_file_uploads' => 1,
				// Image size that displays in the edit page. Possible sizes small,medium,large,original
    			'image_size'       => 'thumbnail',
			),
			array(
				'name'  			=> esc_html__( 'Gallery', 'progrisaas' ),
				'id'    			=> 'post_gallery',
				'type'  			=> 'image_advanced',
				'class' 			=> 'gallery',
				// Image size that displays in the edit page. Possible sizes small,medium,large,original
    			'image_size'       	=> 'thumbnail',
			),			
			array(
				'name'  => esc_html__( 'Audio', 'progrisaas' ),
				'id'    => 'post_audio',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'audio',
				'desc'  => 'Example: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',
			),
			array(
				'name'  => esc_html__( 'Video', 'progrisaas' ),
				'id'    => 'post_video',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'video',
				'desc'  => 'Example: https://vimeo.com/87959439',
			),
			array(
				'name'  => esc_html__( 'Background Video', 'progrisaas' ),
				'id'    => 'bg_video',
				'type'  => 'image_advanced',
				'class' => 'video',
				'max_file_uploads' => 1,
			),
			array(
				'name'  => esc_html__( 'Link', 'progrisaas' ),
				'id'    => 'post_link',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'link',
			),
			array(
				'name'  => esc_html__( 'Text Link', 'progrisaas' ),
				'id'    => 'text_link',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'link',
			),
			array(
				'name'  => esc_html__( 'Quote', 'progrisaas' ),
				'id'    => 'post_quote',
				'type'  => 'textarea',
				'class' => 'quote',
			),
			array(
				'name'  => esc_html__( 'Quote Name', 'progrisaas' ),
				'id'    => 'quote_name',
				'type'  => 'text',
				'class' => 'quote',
			)		
		),
	);

	// Page Settings
	$meta_boxes[] = array(
		'id'       => 'page-settings',
		'title'    => esc_html__( 'Page Header Settings', 'progrisaas' ),
		'pages'    => array( 'page' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
            array(
                'id'        			=> 'page_layout',
                'name'      			=> esc_html__( 'Page Layout', 'progrisaas' ),
                'type'      			=> 'image_select',
                'options'   			=> array(
                    'full-content'    	=> get_template_directory_uri() . '/inc/backend/images/full.png',
                    'content-sidebar' 	=> get_template_directory_uri() . '/inc/backend/images/right.png',
                    'sidebar-content' 	=> get_template_directory_uri() . '/inc/backend/images/left.png',
                ),
                'std'       			=> 'full-content'
            ),
            array(
                'name'             => esc_html__( 'Page Header On/Off', 'progrisaas' ),
                'id'               => 'pheader_switch',
                'type'             => 'switch',
                'style'            => 'rounded',
                'on_label'         => esc_html__( 'On', 'progrisaas' ),
                'off_label'        => esc_html__( 'Off', 'progrisaas' ),
                'std'              => 'on'
            ),
            array(
                'name'             => esc_html__( 'Background Page Header', 'progrisaas' ),
                'id'               => 'pheader_bg_image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            )
		),
	);

	$meta_boxes[] = array(
        'id'       => 'extra-settings',
        'title'    => esc_html__( 'Extra Settings', 'progrisaas' ),
        'pages'    => array( 'ot_portfolio' ),
        'context'  => 'normal',
        'priority' => 'high',
        'autosave' => true,
        'fields'   => array(
            array(
                'name'             => esc_html__( 'Page Header On/Off', 'progrisaas' ),
                'id'               => 'pheader_switch',
                'type'             => 'switch',
                'style'            => 'rounded',
                'on_label'         => 'On',
                'off_label'        => 'Off',
                'std'              => 'on'
            ),
            array(
                'name'             => esc_html__( 'Background Page Header', 'progrisaas' ),
                'id'               => 'pheader_bg_image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            )
        ),
    );
    
	$meta_boxes[] = array (
      	'id' 			=> 'select-header-footer',
      	'title' 		=> esc_html__( 'Header/Footer Settings', 'progrisaas' ),
      	'pages' 		=> array ('page'),
      	'context' 		=> 'normal',
      	'priority' 		=> 'high',
      	'autosave' 		=> false,
      	'fields' 		=>   array (  
        	array(
        		'name' 					=> esc_html__( 'Header Layout', 'progrisaas' ),
				'id' 					=> 'select_header',
				'type'  				=> 'post',
		    	'post_type'   			=> 'ot_header_builders',
		    	'field_type'  			=> 'select_advanced',
		    	'placeholder' 			=> esc_html__( 'Select a header', 'progrisaas' ),
		    	'query_args'  			=> array(
		        	'post_status'    	=> 'publish',
		        	'posts_per_page' 	=> - 1,
		        	'orderby' 		 	=> 'date',
		        	'order' 		 	=> 'ASC',
		    	),
			),
			array(
                'name'             		=> esc_html__( 'Header Transparent?', 'progrisaas' ),
                'id'               		=> 'is_trans',
				'type'             		=> 'select',
				'options'   			=> array(
                    'default'   		=> esc_html__( 'Default', 'progrisaas' ),
                    'yes' 				=> esc_html__( 'Yes', 'progrisaas' ),
                    'no' 				=> esc_html__( 'No', 'progrisaas' ),
                ),
                'std'       			=> 'default'
            ),
			array(
        		'name' 					=> esc_html__( 'Header Mobile Layout', 'progrisaas' ),
				'id' 					=> 'select_header_mobile',
				'type'  				=> 'post',
		    	'post_type'   			=> 'ot_header_builders',
		    	'field_type'  			=> 'select_advanced',
		    	'placeholder' 			=> esc_html__( 'Select a header mobile', 'progrisaas' ),
		    	'query_args'  			=> array(
		        	'post_status'    	=> 'publish',
		        	'posts_per_page' 	=> - 1,
		        	'orderby' 		 	=> 'date',
		        	'order' 		 	=> 'ASC',
		    	),
			),
			array (
        		'name' 					=> esc_html__( 'Footer Layout', 'progrisaas' ),
				'id' 					=> 'select_footer',
				'type'  				=> 'post',
		    	'post_type'   			=> 'ot_footer_builders',
		    	'field_type'  			=> 'select_advanced',
		    	'placeholder' 			=> esc_html__( 'Select a footer', 'progrisaas' ),
		    	'query_args'  			=> array(
		        	'post_status'    	=> 'publish',
		        	'posts_per_page' 	=> - 1,
		        	'orderby' 		 	=> 'date',
		        	'order' 		 	=> 'ASC',
		    	),
        	),
      	),
	);

	return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'progrisaas_register_meta_boxes' );
