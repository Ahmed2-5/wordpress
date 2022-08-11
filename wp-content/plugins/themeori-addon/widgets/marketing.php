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


class Marketing extends Widget_Base
{

    public function get_name()
    {
        return 'marketing';
    }

    public function get_title()
    {
        return esc_html__('Marketing', 'themeori-addon');
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
            'marketing_img',
            [
                'label' => esc_html__('Marketing Images', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'marketing_img_one',
            [
                'label' => esc_html__('Image One', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'marketing_img_two',
            [
                'label' => esc_html__('Image Two', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'marketing_shape_one',
            [
                'label' => esc_html__('Shape One', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'marketing_shape_two',
            [
                'label' => esc_html__('Shape Two', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'section_content_left',
            [
                'label' => esc_html__('Sections Content', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'sub_title_left',
            [
                'label' => esc_html__('Sub Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Marketing', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'title_left',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Marketing Problems', 'themeori-addon'),
            ]
        );


        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'themeori-addon'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('Description', 'themeori-addon'),
                'default' => esc_html__('Pellentesque convallis posuere leo faucibus mollis. Sed a laoreet augue. Etiam pretium sagittis', 'themeori-addon'),

            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'service_one',
            [
                'label' => esc_html__('Item One', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'item_one_icon',
            [
                'label' => esc_html__('Icon Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'item_one_title',
            [
                'label' => esc_html__('Service Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Marketing', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'item_one_description',
            [
                'label' => esc_html__('Description', 'themeori-addon'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('Description', 'themeori-addon'),
                'default' => esc_html__('Pellentesque convallis posuere leo faucibus mollis. Sed a laoreet augue. Etiam pretium sagittis', 'themeori-addon'),

            ]
        );




        $this->end_controls_section();

        $this->start_controls_section(
            'service_two',
            [
                'label' => esc_html__('Item Two', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'item_two_icon',
            [
                'label' => esc_html__('Icon Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'item_two_title',
            [
                'label' => esc_html__('Service Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('App Design', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'item_two_description',
            [
                'label' => esc_html__('Description', 'themeori-addon'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('Description', 'themeori-addon'),
                'default' => esc_html__('Pellentesque convallis posuere leo faucibus mollis. Sed a laoreet augue. Etiam pretium sagittis', 'themeori-addon'),

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
                'selector' => '{{WRAPPER}} .section-top',
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-top ' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'sub_title_border',
            [
                'label' => esc_html__('Border Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-top::before ' => 'background: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .marketing__area-right h2',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .marketing__area-right h2' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'desc_content',
            [
                'label' => esc_html__('Description', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'desc_content_typography',
                'label' => esc_html__('Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .marketing__area-right > p',
            ]
        );

        $this->add_control(
            'desc_content_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .marketing__area-right > p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'service_items_1',
            [
                'label' => esc_html__('Item Typography', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'item_title_seb',
                'label' => esc_html__('Title Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .marketing__area-right-item h4',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'item_sub_desc',
                'label' => esc_html__('Description Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .marketing__area-right-item p',
            ]
        );

    
        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $sub_title_left = $settings['sub_title_left'];
        $title_left = $settings['title_left'];
        $description = $settings['description'];

        $marketing_img_one = $settings['marketing_img_one'];
        $marketing_img_two = $settings['marketing_img_two'];
        $marketing_shape_one = $settings['marketing_shape_one'];
        $marketing_shape_two = $settings['marketing_shape_two'];

        $item_one_icon = $settings['item_one_icon'];
        $item_one_title = $settings['item_one_title'];
        $item_one_description = $settings['item_one_description'];

        $item_two_icon = $settings['item_two_icon'];
        $item_two_title = $settings['item_two_title'];
        $item_two_description = $settings['item_two_description'];



?>
        <!-- Marketing Area Start -->
        <div class="marketing__area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="marketing__area-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="marketing__area-left-image">
                                <img src="<?php echo esc_url($marketing_img_one['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($marketing_img_one['url']), '_wp_attachment_image_alt', true); ?>">
                                <div class="marketing__area-left-image-2">
                                    <img src="<?php echo esc_url($marketing_img_two['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($marketing_img_two['url']), '_wp_attachment_image_alt', true); ?>">
                                </div>
                            </div>
                            <div class="marketing__area-left-shape-1 up-down-animate">
                                <img src="<?php echo esc_url($marketing_shape_one['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($marketing_shape_one['url']), '_wp_attachment_image_alt', true); ?>">
                            </div>
                            <div class="marketing__area-left-shape-2 up-down-animate">
                                <img src="<?php echo esc_url($marketing_shape_two['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($marketing_shape_two['url']), '_wp_attachment_image_alt', true); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="marketing__area-right wow fadeInUp" data-wow-delay="0.8s">
                            <span class="section-top"><?php echo esc_html($sub_title_left); ?></span>
                            <h2 class="mb-20"><?php echo esc_html($title_left); ?></h2>
                            <p><?php echo esc_html($description); ?></p>
                            <div class="row mt-40">
                                <div class="col-sm-6 sm-mb-30">
                                    <div class="marketing__area-right-item">
                                        <div class="marketing__area-right-item-icon mb-20">
                                            <img src="<?php echo esc_url($item_one_icon['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item_one_icon['url']), '_wp_attachment_image_alt', true); ?>">
                                        </div>
                                        <h4 class="mb-20"><?php echo esc_html($item_one_title); ?></h4>
                                        <p><?php echo esc_html($item_one_description); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="marketing__area-right-item">
                                        <div class="marketing__area-right-item-icon mb-20">
                                            <img src="<?php echo esc_url($item_two_icon['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item_two_icon['url']), '_wp_attachment_image_alt', true); ?>">
                                        </div>
                                        <h4 class="mb-20"><?php echo esc_html($item_two_title); ?></h4>
                                        <p><?php echo esc_html($item_two_description); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Marketing Area End -->
<?php

    }

    protected function _content_template()
    {
    }
}
