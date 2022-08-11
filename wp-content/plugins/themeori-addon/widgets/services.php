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


class Services extends Widget_Base
{

    public function get_name()
    {
        return 'services';
    }

    public function get_title()
    {
        return esc_html__('Service', 'themeori-addon');
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
                'default' => esc_html__('Services', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'title_left',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Creative Solutions', 'themeori-addon'),
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
                'label' => esc_html__('Service One', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'server_one_icon',
            [
                'label' => esc_html__('Icon Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'service_one_title',
            [
                'label' => esc_html__('Service Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Marketing', 'themeori-addon'),
            ]
        );


        $repeater = new Repeater();

        $repeater->add_control(
            'service_sub_title',
            [
                'label' => esc_html__('Service Title', 'themeori-addon'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('A sub service...', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'service_item_lists',
            [
                'label' => esc_html__('Service Item Lists', 'themeori-addon'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_sub_title' => esc_html__('Ui Design', 'themeori-addon'),
                    ],
                    [
                        'service_sub_title' => esc_html__('Web Development', 'themeori-addon'),
                    ],
                ],
            ]
        );

        $this->add_control(
            'service_btn_text',
            [
                'label' => esc_html__('Button Text', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Contact Us', 'themeori-addon'),
                'default' => esc_html__('Contact Us', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'service_btn_link',
            [
                'label' => esc_html__('Button Link', 'themeori-addon'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('Link Here', 'themeori-addon'),
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'service_two',
            [
                'label' => esc_html__('Service Two', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'service_two_icon',
            [
                'label' => esc_html__('Icon Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'service_two_title',
            [
                'label' => esc_html__('Service Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('App Design', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'service_feature',
            [
                'label' => esc_html__('Label', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Features', 'themeori-addon'),
            ]
        );


        $repeater = new Repeater();

        $repeater->add_control(
            'service_sub_title_2',
            [
                'label' => esc_html__('Service Title', 'themeori-addon'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('A sub service...', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'service_item_lists_2',
            [
                'label' => esc_html__('Service Item Lists', 'themeori-addon'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_sub_title_2' => esc_html__('Ui Design', 'themeori-addon'),
                    ],
                    [
                        'service_sub_title_2' => esc_html__('Web Development', 'themeori-addon'),
                    ],
                ],
            ]
        );

        $this->add_control(
            'service_two_btn_text',
            [
                'label' => esc_html__('Button Text', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Contact Us', 'themeori-addon'),
                'default' => esc_html__('Contact Us', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'service_two_btn_link',
            [
                'label' => esc_html__('Button Link', 'themeori-addon'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('Link Here', 'themeori-addon'),
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
        $description = $settings['description'];

        $server_one_icon = $settings['server_one_icon'];
        $service_one_title = $settings['service_one_title'];
        $service_btn_text = $settings['service_btn_text'];
        $service_btn_link = $settings['service_btn_link'];

        $service_two_icon = $settings['service_two_icon'];
        $service_two_title = $settings['service_two_title'];
        $service_feature = $settings['service_feature'];
        $service_two_btn_text = $settings['service_two_btn_text'];
        $service_two_btn_link = $settings['service_two_btn_link'];


?>
        <!-- Services Area Start -->
        <div class="service__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-12">
                        <div class="service__area-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service__area-left-title">
                                <span class="section-top"><?php echo esc_html($sub_title_left); ?></span>
                                <h2 class="mb-20"><?php echo esc_html($title_left); ?></h2>
                                <p><?php echo esc_html($description); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30">
                        <div class="service__area wow fadeInUp" data-wow-delay="0.8s">
                            <div class="service__area-item shape">
                                <div class="service__area-item-icon mb-20">
                                <img src="<?php echo esc_url($server_one_icon['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($server_one_icon['url']), '_wp_attachment_image_alt', true); ?>">
                                </div>
                                <div class="service__area-item-content">
                                    <h4 class="mb-20"><?php echo esc_html($service_one_title); ?></h4>
                                    <div class="service__area-item-content-list mb-25">
                                        <ul>
                                            <?php
                                            if ($settings['service_item_lists']) {
                                                foreach ($settings['service_item_lists'] as $item) {
                                            ?>
                                            <li><i class="flaticon-comment"></i><?php echo esc_html($item['service_sub_title']); ?></li>

                                            <?php }
                                            } ?>
                                        </ul>
                                    </div> <a class="theme-btn" href="<?php echo esc_url($service_btn_link['url']); ?>"><?php echo esc_html($service_btn_text); ?> <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service__area wow fadeInUp" data-wow-delay="1.2s">
                            <div class="service__area-item"> <span><?php echo esc_html($service_feature); ?></span>
                                <div class="service__area-item-icon mb-20">
                                <img src="<?php echo esc_url($service_two_icon['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($service_two_icon['url']), '_wp_attachment_image_alt', true); ?>">
                                </div>
                                <div class="service__area-item-content">
                                    <h4 class="mb-20"><?php echo esc_html($service_two_title); ?></h4>
                                    <div class="service__area-item-content-list mb-25">
                                        <ul>
                                        <?php
                                            if ($settings['service_item_lists_2']) {
                                                foreach ($settings['service_item_lists_2'] as $item) {
                                            ?>
                                            <li><i class="flaticon-comment"></i><?php echo esc_html($item['service_sub_title_2']); ?></li>

                                            <?php }
                                            } ?>
                                        </ul>
                                    </div> <a class="theme-btn" href="<?php echo esc_url($service_two_btn_link['url']); ?>"><?php echo esc_html($service_two_btn_text); ?> <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
<?php

    }

    protected function _content_template()
    {
    }
}
