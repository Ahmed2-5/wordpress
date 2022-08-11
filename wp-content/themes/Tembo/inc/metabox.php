<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $beorx_meta_box = 'beorx_meta_options';

  //
  // Create a metabox
  CSF::createMetabox( $beorx_meta_box, array(
    'title'     => esc_html__( 'Settings', 'beorx' ),
    'post_type' => array( 'page', 'post'),
  ) );

  //
  // Create a section
  CSF::createSection( $beorx_meta_box, array(
    'title'     => esc_html__( 'Banner Setting', 'beorx' ),
    'fields'    => array(

        array(
            'id'      => 'banner-header-show',
            'type'    => 'button_set',
            'title'   => esc_html__('Show Banner Header', 'beorx'),
            'options' => array(
              'yes'   => esc_html__('Yes', 'beorx'),
              'no'    => esc_html__('No', 'beorx'),
            ),
            'default' => 'yes',
          ),

        array(
            'id'                    => 'banner-header-bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Background', 'beorx'),
            'output'                => '.page__banner',
            'background_gradient'   => false,
            'background_origin'     => false,
            'background_clip'       => false,
            'background_blend_mode' => false,
            'background-color'      => false,
            'dependency'            => array('banner-header-show', '==', 'yes'),
          ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $beorx_meta_box, array(
    'title'     => esc_html__( 'Content Padding', 'beorx' ),
    'fields' => array(

          array(
            'id'    => 'banner-header-padding',
            'type'  => 'spacing',
            'left'  => false,
            'right' => false,
            'title'       => esc_html__('Padding', 'beorx'),
            'output_mode' => 'padding',
            'output'      => '.site-content-padding',
          ),

    )
  ) );

}