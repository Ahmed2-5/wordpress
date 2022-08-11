<?php

namespace ThemeOri_Addon\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Repeater;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Image_Size;
use Elementor\Icons_Manager;
use Elementor\Utils;

if (!defined('ABSPATH')) exit;


class Blog_Grid extends Widget_Base
{

    public function get_name()
    {
        return 'blog-grid';
    }

    public function get_title()
    {
        return esc_html__('Blog Grid', 'themeori-addon');
    }

    public function get_icon()
    {
        return 'eicon-posts-ticker';
    }

    public function get_categories()
    {
        return ['themeori-addon'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'section_content',
            [
                'label' => esc_html__('Content', 'themeori-addon'),
            ]
        );


        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('Blog', 'themeori-addon'),
                'default' => esc_html__('Blog', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('News article', 'themeori-addon'),
                'default' => esc_html__('News article', 'themeori-addon'),
            ]
        );


        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__('Button Text', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Read More', 'themeori-addon'),
                'default' => esc_html__('Read More', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'post_per_page',
            [
                'label' => esc_html__('Post Per Page', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('3', 'themeori-addon'),
                'default' => esc_html__('3', 'themeori-addon'),
            ]
        );


        $this->end_controls_section();

     
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Style', 'themeori-addon'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'subtitle_style',
            [
                'label' => esc_html__('Sub Title', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'label' => esc_html__('Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .blog__area-section-title span ',
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__area-section-title span ' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'sub_title_border',
            [
                'label' => esc_html__('Border Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__area-section-title span::before ' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'title_style',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .blog__area-section-title h2',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__area-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );

    
        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $btn_text = $settings['btn_text'];
        $post_per_page = $settings['post_per_page'];


?>
        <?php

        $args = array(
            'posts_per_page'   => $post_per_page,
            'post_type'        => 'post',
        );
        $the_query = new \WP_Query($args); ?>
        <!-- Blog Area Start -->
        <div class="blog__area ">
            <div class="container">
                <!-- <div class="row mb-60">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="blog__area-section-title t-center"> <span class="section-top"><?php echo esc_html($sub_title); ?></span>
                            <h2><?php echo esc_html($title); ?></h2>
                        </div>
                    </div>
                </div> -->
                <div class="row">

                    <?php if ($the_query->have_posts()) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="col-xl-6 col-lg-6 lg-mb-30">
                                <div class="blog__area-item">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="blog__area-item-image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="blog__area-item-content">
                                    <div class="blog__area-item-image-date"> <span><a href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format')) ?></a></span>
                                            </div>
<!-- 
                                        <div class="blog__area-item-content-meta">
                                            <ul>
                                                <li><i class="flaticon-user"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                                                <li><i class="flaticon-chat"></i><a href="<?php the_permalink(); ?>"><?php echo esc_html('Comment'); ?> (<?php echo get_comments_number($the_query->ID); ?>)</a></li>
                                            </ul>
                                        </div> -->
                                        <h3 class="mb-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php echo wp_trim_words(get_the_excerpt(),8, '') ?></p>
                                        <div class="blog__area-item-content-btn"> <a href="<?php the_permalink(); ?>"> <img src="/wp-content/uploads/2022/07/btn-blog.svg"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <p><?php echo esc_html('Sorry, no posts matched from this blog.'); ?></p>
    <?php endif; ?>

<?php

    }

    protected function _content_template()
    {
    }
}
