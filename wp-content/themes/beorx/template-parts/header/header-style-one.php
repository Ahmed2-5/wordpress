<?php
$enable_top_header = beorx_option('enable-top-header', false);
$enable_search_icon = beorx_option('header-search', false);
$enable_menu_cta = beorx_option('header-btn', false);
$top_header_left = beorx_option('top-header-left');
$top_header_right = beorx_option('top-header-right');
?>
<!-- Header Area Start -->
<div class="header__area">
    <div class="custom-container d-flex align-items-center">
        <div class="header__area-logo">
            <?php
            the_custom_logo();
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <div class="responsive-menu"></div>
        </div>
        <div class="header__area-center d-flex align-items-center">
            <div class="header__area-main-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'mobilemenu',
                    )
                );
                ?>
            </div>
            <?php if ($enable_search_icon == 'yes') : ?>
            <div class="header__area-search">
                <div class="search"> <span class="header__area-search-icon open"><i class="flaticon-loupe"></i></span>
                </div>
                <div class="header__area-search-box">

                    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" placeholder="<?php echo esc_attr('Search Here.....', 'beorx'); ?>" value="<?php the_search_query(); ?>" name="s">
                        <button value="Search" type="submit"><i class="flaticon-loupe"></i>
                        </button>
                    </form>
                    <span class="header__area-search-box-icon"><i class="flaticon-close"></i></span>
                </div>
            </div>
            <?php endif;?>
        </div>
        <div class="header__area-right">
            <div class="header__area-right-info d-flex align-items-center">
                <div class="header__area-right-contact d-flex align-items-center t-left">
                    <div class="header__area-right-contact-icon"> <i class="flaticon-telephone-1"></i>
                    </div>
                    <div class="header__area-right-contact-content"> <span><?php echo esc_html(beorx_option('header-btn-text'));?></span>
                        <a href="<?php echo esc_url(beorx_option('header-btn-link'));?>">
                            <p><?php echo esc_html(beorx_option('header-btn-number'));?></p>
                        </a>
                    </div>
                </div>
                <div class="header__area-right-btn  ml-40">
                    <a class="theme-btn" href="<?php echo esc_url(beorx_option('header-cta-link'));?>"><?php echo esc_html(beorx_option('header-cta-text'));?> <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->