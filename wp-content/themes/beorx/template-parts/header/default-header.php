<?php
$enable_top_header = beorx_option('enable-top-header', false);
$enable_search_icon = beorx_option('header-search', false);
$enable_menu_cta = beorx_option('header-btn', false);
$top_header_left = beorx_option('top-header-left');
$top_header_right = beorx_option('top-header-right');
?>
<!-- Box Header Area Start -->
<div class="box__header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3">
                <div class="box__header-logo">
                    <?php
                    the_custom_logo();
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <div class="responsive-menu"></div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9">
                <div class="header__area-main-menu t-right">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'mobilemenu',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Box Header Area End -->