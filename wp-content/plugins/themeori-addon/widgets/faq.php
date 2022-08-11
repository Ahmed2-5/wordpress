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


class Faqs extends Widget_Base
{

    public function get_name()
    {
        return 'faqs';
    }

    public function get_title()
    {
        return esc_html__('Faqs', 'themeori-addon');
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
            'section_content_left',
            [
                'label' => esc_html__('Left Content', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'faq_img_one',
            [
                'label' => esc_html__('Image One', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'faq_img_two',
            [
                'label' => esc_html__('Image Two', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'youtube_video_link',
            [
                'label' => esc_html__('YouTube Video Link', 'themeori-addon'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('Link Here', 'themeori-addon'),
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'section_content_right',
            [
                'label' => esc_html__('Right Content', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'sub_title_left',
            [
                'label' => esc_html__('Sub Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Faq', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'title_left',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Frequently Asked Questions', 'themeori-addon'),
            ]
        );



        $repeater = new Repeater();


        $repeater->add_control(
            'faq_sub_title',
            [
                'label' => esc_html__('Faq Title', 'themeori-addon'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('A sub service...', 'themeori-addon'),
            ]
        );

        $repeater->add_control(
            'faq_description',
            [
                'label' => esc_html__('Description', 'themeori-addon'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator' => 'before',

            ]
        );

        $this->add_control(
            'faq_item_lists',
            [
                'label' => esc_html__('Faq Item Lists', 'themeori-addon'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_sub_title' => esc_html__('01. How do I create for my business?', 'themeori-addon'),
                        'faq_description' => esc_html__('Praesent dignissim ullamcorper turpis eu mollis. Morbi vel erat blandi', 'themeori-addon'),
                    ],
                    [
                        'faq_sub_title' => esc_html__('02. How are measured in marketing?', 'themeori-addon'),
                        'faq_description' => esc_html__('Praesent dignissim ullamcorper turpis eu mollis. Morbi vel erat blandi', 'themeori-addon'),
                    ],
                ],
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
                'selector' => '{{WRAPPER}} .service__area-left-title h2',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-left-title h2' => 'color: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .service__area-left-title p',
            ]
        );

        $this->add_control(
            'desc_content_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-left-title p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'service_items_1',
            [
                'label' => esc_html__('Service Item Typography', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'service_item_title',
                'label' => esc_html__('Title Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .service__area-item-content h4',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'service_sub_title',
                'label' => esc_html__('Item List Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .service__area-item-content-list ul li',
            ]
        );

        $this->add_control(
            'service_sub_item_color',
            [
                'label' => esc_html__('List Icon Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-item-content-list ul li i::before' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'service_one_border_color',
            [
                'label' => esc_html__('Service One Border Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-item.shape::after' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'service_two_label_bg',
            [
                'label' => esc_html__('Service Two Label BG', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-item span' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_style',
            [
                'label' => esc_html__('Button Style', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->start_controls_tabs(
            'style_tabs'
        );

        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => esc_html__('Normal', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'btn_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_color_bg',
            [
                'label' => esc_html__('Background', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => esc_html__('Hover', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'btn_hover_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_hover_bg',
            [
                'label' => esc_html__('Background', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn:hover::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $sub_title_left = $settings['sub_title_left'];
        $title_left = $settings['title_left'];

        $faq_img_one = $settings['faq_img_one'];
        $faq_img_two = $settings['faq_img_two'];
        $youtube_video_link = $settings['youtube_video_link'];



?>
        <!-- FAQ Area Start -->
        <div class="faq__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq__area-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="faq__area-left-image">
                            <img src="<?php echo esc_url($faq_img_one['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($faq_img_one['url']), '_wp_attachment_image_alt', true); ?>">
                                <div class="faq__area-left-image-2">
                                <img src="<?php echo esc_url($faq_img_two['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($faq_img_two['url']), '_wp_attachment_image_alt', true); ?>">
                                </div>
                            </div>
                            <div class="faq__area-left-video"> <a class="faq__area-left-video-icon video-popup" href="<?php echo esc_url($youtube_video_link['url']);?>"><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq__area-right wow fadeInUp" data-wow-delay="0.8s">
                            <span class="section-top"><?php echo esc_html($sub_title_left);?></span>
                            <h2 class="mb-20"><?php echo esc_html($title_left);?></h2>
                            <div class="faq__area-collapse">
                            <div class="faq__area-collapse-item">
								<div class="faq__area-collapse-item-card">
									<div class="faq__area-collapse-item-card-header">
										<h6><?php echo esc_html('01. How do I create  for my business?');?></h6>
										<i class="flaticon-remove"></i>
									</div>
									<div class="faq__area-collapse-item-card-header-content active">
										<p><?php echo esc_html('Praesent dignissim ullamcorper turpis eu mollis. Morbi vel erat blandit, finibus risus eu, ultricies dolor. Maecenas hendrerit aliquet sapien sit amet consequat. Nullam iaculis');?></p>
									</div>
								</div>
							</div>
                                <?php
                                if ($settings['faq_item_lists']) {
                                    foreach ($settings['faq_item_lists'] as $item) {
                                ?>
                                        <div class="faq__area-collapse-item">
                                            <div class="faq__area-collapse-item-card">
                                                <div class="faq__area-collapse-item-card-header">
                                                    <h6><?php echo esc_html($item['faq_sub_title']); ?></h6>
                                                    <i class="flaticon-plus"></i>
                                                </div>
                                                <div class="faq__area-collapse-item-card-header-content" style="display: none;">
                                                    <p><?php echo esc_html($item['faq_description']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Area End -->
<?php

    }

    protected function _content_template()
    {
    }
}
