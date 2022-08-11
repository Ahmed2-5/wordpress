<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {
  //
  // Set a unique slug-like ID
  $beorx_theme_option = 'beorx_theme_options';
  //
  // Theme Options
  CSF::createOptions($beorx_theme_option, array(
    'menu_title'      => esc_html__('Theme Options', 'beorx'),
    'framework_title' => wp_kses(
      sprintf(__("Beorx Options <small>By ThemeOri</small>", 'beorx')),
      array('small'   => array())
    ),
    'menu_slug'       => 'beorx-options',
    'menu_parent'     => 'themes.php',
    'menu_type'       => 'submenu',
    'show_search'     => false,
    'footer_credit'   => wp_kses(
      __('Developed by: <a target="_blank" href="https://themeforest.net/user/themeori/portfolio">ThemeOri</a>', 'beorx'),
      array(
        'a'           => array(
          'href'      => array(),
          'target'    => array()
        ),
      )
    ),
    'defaults'        => beorx_default_options(),
  ));

  //
  // Global Settings
  //
  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Global Settings', 'beorx'),
    'icon'   => 'far fa-circle',
    'id'     => 'global-settings',
    'fields' => array(

      array(
        'id'      => 'preloader',
        'type'    => 'button_set',
        'title'   => esc_html__('Preloader', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'    => esc_html__('No', 'beorx'),
        ),
        'default' => 'no',
        'desc'    => esc_html__('Enable or Disable', 'beorx'),
      ),

      array(
        'id'          => 'preloader-bg',
        'type'        => 'color',
        'title'       => esc_html__('Preloader Background', 'beorx'),
        'desc'        => esc_html__('Select a Background', 'beorx'),
        'output'      => '.theme-loader',
        'output_mode' => 'background-color',
        'dependency'  => array('preloader', '==', 'yes') // 
      ),
      array(
        'id'             => 'body-typography',
        'type'           => 'typography',
        'title'          => esc_html__('Body Typography', 'beorx'),
        'output'         => 'body',
        'text_align'     => false,
        'text_transform' => false,
        'extra_styles'   => true,
        'default'        => array(
          'font-family'  => 'Inter',
          'type'         => 'google',
          'font-weight'  => '400',
          'unit'         => 'px',
          'extra-styles' => array('400', '500', '600','700'),
        ),
      ),

      array(
        'id'             => 'heading-typography',
        'type'           => 'typography',
        'title'          => esc_html__('Heading Typography', 'beorx'),
        'output'         => 'h1,h2,h3,h4,h5,h6',
        'extra_styles'   => true,
        'text_align'     => false,
        'text_transform' => false,
        'default'        => array(
          'font-family'  => 'DM Serif Display',
          'type'         => 'google',
          'font-weight'  => '400',
          'unit'         => 'px',
          'extra-styles' => array('400'),
        ),
      ),

    )
  ));

  //
  // Header Options
  //
  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Header Options', 'beorx'),
    'icon'   => 'fas fa-heading',
    'id'     => 'header-options',
  ));

  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Header Style', 'beorx'),
    'icon'   => 'fas fa-th-large',
    'parent' => 'header-options',
    'fields' => array(

      array(
        'id'      => 'header_styles',
        'type'    => 'select',
        'title'   => esc_html__('Layout', 'beorx'),
        'options' => array(
          'default-header' => esc_html__('Default Header', 'beorx'),
          'header-one'     => esc_html__('Header Style One', 'beorx'),
        ),
        'default' => 'default-header',
        'desc'    => esc_html__('Select Header Style', 'beorx'),
      ),

      array(
        'id'      => 'header-search',
        'type'    => 'button_set',
        'title'   => esc_html__('Enable Search', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'no',
        'desc'    => esc_html__('Enable or Disable', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),

      
      array(
        'id'      => 'header-btn',
        'type'    => 'heading',
        'content'   => esc_html__('Menu Call Button', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),

      array(
        'id'         => 'header-btn-text',
        'type'       => 'text',
        'title'      => esc_html__('Title', 'beorx'),
        'default'    => esc_html__('Call Now', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),
      array(
        'id'         => 'header-btn-number',
        'type'       => 'text',
        'title'      => esc_html__('Number', 'beorx'),
        'default'    => esc_html__('0122324324', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),
      array(
        'id'         => 'header-btn-link',
        'type'       => 'text',
        'title'      => esc_html__('Link', 'beorx'),
        'default'    => esc_attr__('tel:01234567890', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),

      array(
        'id'      => 'header-cta-btn',
        'type'    => 'heading',
        'content'   => esc_html__('Menu CTA Button', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),

      array(
        'id'         => 'header-cta-text',
        'type'       => 'text',
        'title'      => esc_html__('Text', 'beorx'),
        'default'    => esc_html__('Quote Now', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),
      array(
        'id'         => 'header-cta-link',
        'type'       => 'text',
        'title'      => esc_html__('Link', 'beorx'),
        'default'    => esc_attr__('tel:01234567890', 'beorx'),
        'dependency' => array('header_styles', '==', 'header-one') 
      ),

    )
  ));
 

  //
  // Page Headers
  //
  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Header Banner', 'beorx'),
    'icon'   => 'fas fa-pager',
    'id'     => 'header-banner',
    'fields' => array(

      array(
        'id'                    => 'banner-header-bg',
        'type'                  => 'background',
        'title'                 => esc_html__('Background', 'beorx'),
        'output'                => '.page__banner',
        'background_gradient'   => false,
        'background_origin'     => false,
        'background_clip'       => false,
        'background_blend_mode' => false,
        'background-color' => false,
      ),

      array(
        'id'      => 'page-header-opacity',
        'type'    => 'slider',
        'title'   => esc_html__('Opacity', 'beorx'),
        'min'     => 10,
        'max'     => 100,
        'step'    => 10,
        'default' => 80,
        'unit'    => '%',
        'output'      => '.page__banner::after',
        'output_mode' => 'opacity',
      ),

      array(
        'id'          => 'page-header-opacity-color',
        'type'        => 'color',
        'title'   => esc_html__('Opacity Color', 'beorx'),
        'output'      => '.page__banner::after',
        'output_mode' => 'background-color',
      ),

      array(
        'id'    => 'banner-header-padding',
        'type'  => 'spacing',
        'left'  => false,
        'right' => false,
        'default'     => array(
          'top'       => '125',
          'bottom'    => '125',
          'unit'      => 'px',
        ),
        'title'  => esc_html__('Spacing', 'beorx'),
        'output_mode' => 'padding',
        'output'      => '.page__banner',
      ),

      array(
        'id'      => 'banner-breadcrumb',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Breadcrumb', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),


    )
  ));

  //
  // Blog page
  //
  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Blog Page', 'beorx'),
    'icon'   => 'fas fa-reply',
    'id'     => 'blog-page',
    'fields' => array(

      array(
        'id'      => 'blog-page-title',
        'type'    => 'text',
        'title'  => esc_html__('Blog Title', 'beorx'),
      ),

      array(
        'id'      => 'blog-list-date',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Date', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog-list-author',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Author', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog-list-comment',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Comment', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog-cta-btn',
        'type'    => 'text',
        'title'  => esc_html__('Button Text', 'beorx'),
      ),

    )
  ));

  //
  // blog Single
  //
  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Single Blog', 'beorx'),
    'icon'   => 'fas fa-search',
    'id'     => 'single-blog',
    'fields' => array(

      array(
        'id'      => 'blog-single-date',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Date', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog-single-author',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Author', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog-single-comment',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Comment', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
      ),

    )
  ));

  //
  // 404 Error
  //
  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('404 Error', 'beorx'),
    'icon'   => 'fas fa-exclamation-circle',
    'id'     => '404-error',
    'fields' => array(


      array(
        'id'    => 'error-page-title',
        'type'  => 'text',
        'title'  => esc_html__('Not Found Title', 'beorx'),
      ),

      array(
        'id'    => 'error-page-subtitle',
        'type'  => 'text',
        'title'  => esc_html__('Not Found Sub Title', 'beorx'),
      ),

      array(
        'id'            => 'error-page-content',
        'type'          => 'wp_editor',
        'title'         => esc_html__('Not Found Content', 'beorx'),
        'media_buttons' => false,
        'quicktags'     => true,
        'tinymce'       => true,
        'height'        => '100px',
      ),

      array(
        'id'      => 'error-page-btn',
        'type'    => 'button_set',
        'title'   => esc_html__('Home Button', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'    => esc_html__('No', 'beorx'),
        ),
        'default' => 'yes',
        'desc'    => esc_html__('Enable or Disable', 'beorx'),
      ),

      array(
        'id'    => 'error-page-btn-text',
        'type'  => 'text',
        'title'  => esc_html__('Button Text', 'beorx'),
        'dependency'  => array('error-page-btn', '==', 'yes'),
      ),

    )
  ));

  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Footer Options', 'beorx'),
    'icon'   => 'fas fa-heading',
    'id'     => 'footer-main-options',
  ));
  //
  // Footer Options
  //
CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('General Options', 'beorx'),
    'icon'   => 'fas fa-cogs',
    'id'     => 'footer-options',
    'parent' => 'footer-main-options',
    'fields' => array(


      array(
        'id'                    => 'footer-bg',
        'type'                  => 'background',
        'title'                 => esc_html__('Background', 'beorx'),
        'output'                => '.footer-widget.footer__area.section-padding.secondary-bg',
        'background_gradient'   => false,
        'background_origin'     => false,
        'background_clip'       => false,
        'background_blend_mode' => false,
      ),


      array(
        'id'     => 'footer-widget-padding',
        'type'   => 'spacing',
        'left'   => false,
        'right'  => false,
        'title'  => esc_html__('Spacing', 'beorx'),
        'output' => '.footer-widget.footer__area.section-padding.secondary-bg',
      ),


      array(
        'id'          => 'footer_column',
        'type'        => 'select',
        'title'       => esc_html__('Footer Column', 'beorx'),
        'desc'        => esc_html__('Select Column', 'beorx'),
        'options'     => array(
          'col-lg-12' => esc_html__('Column 1', 'beorx'),
          'col-lg-6'  => esc_html__('Column 2', 'beorx'),
          'col-lg-3'  => esc_html__('Column 3', 'beorx'),
          'col-lg-4'  => esc_html__('Column 4', 'beorx'),
        ),
        'default'     => 'col-lg-4',
      ),

      array(
        'id'          => 'footer-bottom-border',
        'type'        => 'color',
        'title'       => esc_html__('Bottom Background', 'beorx'),
        'output'      => '.copyright__area.secondary-bg',
        'output_mode' => 'background',
        'desc'        => esc_html__('Select a Background', 'beorx'),
      ),

      array(
        'id'      => 'footer-menu',
        'type'    => 'button_set',
        'title'   => esc_html__('Footer Menu', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'  => esc_html__('No', 'beorx'),
        ),
        'default' => 'no',
        'desc'    => esc_html__('Enable or Disable', 'beorx'),
      ),

      array(
        'id'            => 'footer-copyright',
        'type'          => 'wp_editor',
        'title'         => esc_html__('Copyright Text', 'beorx'),
        'tinymce'       => true,
        'quicktags'     => true,
        'media_buttons' => false,
        'height'        => '50px',
      ),

      array(
        'id'      => 'scroll-up-arrow',
        'type'    => 'button_set',
        'title'   => esc_html__('Scroll Up', 'beorx'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'beorx'),
          'no'    => esc_html__('No', 'beorx'),
        ),
        'default' => 'no',
        'desc'    => esc_html__('Enable or Disable', 'beorx'),
      ),

      array(
        'id'         => 'scroll-up-icon',
        'type'       => 'icon',
        'title'      => esc_html__('Arrow Icon', 'beorx'),
        'default'    => 'fas fa-long-arrow-alt-up',
        'dependency' => array('scroll-up-arrow', '==', 'yes'),
      ),


    )
  ));



  //
  // Backup options
  //

  CSF::createSection($beorx_theme_option, array(
    'title'  => esc_html__('Backup', 'beorx'),
    'icon'   => 'fas fa-file-alt',
    'fields' => array(
      array(
        'type' => 'backup',
      ),
    )
  ));
}
