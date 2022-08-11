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


class Team_Slide extends Widget_Base
{

    public function get_name()
    {
        return 'team-slide';
    }

    public function get_title()
    {
        return esc_html__('Team Slide', 'themeori-addon');
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
                'label' => esc_html__('Section Content', 'themeori-addon'),
            ]
        );

       
        $this->add_control(
            'sub_title_left',
            [
                'label' => esc_html__('Sub Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Team', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'title_left',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Expert Team', 'themeori-addon'),
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
            'section_content_right',
            [
                'label' => esc_html__('Team Items', 'themeori-addon'),
            ]
        );

    
        $repeater = new Repeater();


        $repeater->add_control(
            'team_name',
            [
                'label' => esc_html__('Name', 'themeori-addon'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
            ]
        );

        $repeater->add_control(
            'team_content',
            [
                'label' => esc_html__('Description', 'themeori-addon'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator' => 'before',

            ]
        );

        $repeater->add_control(
            'team_image',
            [
                'label' => esc_html__('Team Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'team_items',
            [
                'label' => esc_html__('Team Items', 'themeori-addon'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'team_name' => esc_html__('Sodubi Mosa', 'themeori-addon'),
                        'team_content' => esc_html__('Web Designer', 'themeori-addon'),
                    ],
                    [
                        'team_name' => esc_html__('Jhone Deo', 'themeori-addon'),
                        'team_content' => esc_html__('SEO Manger', 'themeori-addon'),
                    ],
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'section_content_image',
            [
                'label' => esc_html__('Shape Image', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'shape_image_one',
            [
                'label' => esc_html__('Shape One', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_image_two',
            [
                'label' => esc_html__('Shape Two', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_image_three',
            [
                'label' => esc_html__('Shape Three', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_image_four',
            [
                'label' => esc_html__('Shape Four', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
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
                'selector' => '{{WRAPPER}} .team__area-left-content h2',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-left-content h2' => 'color: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .team__area-left-content p',
            ]
        );

        $this->add_control(
            'desc_content_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-left-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'team_items_1',
            [
                'label' => esc_html__('Team Item Typography', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team_item_title',
                'label' => esc_html__('Title Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .team__area-right-slide-item-content h4',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team_sub_title',
                'label' => esc_html__('Content Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .team__area-right-slide-item-content p',
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

        $shape_image_one = $settings['shape_image_one'];
        $shape_image_two = $settings['shape_image_two'];
        $shape_image_three = $settings['shape_image_three'];
        $shape_image_four = $settings['shape_image_four'];






?>
	<!-- Team Area Start -->
	<div class="team__area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-lg-5 lg-mb-30">
					<div class="team__area-left  wow fadeInUp" data-wow-delay="0.4s">
						<div class="team__area-left-bg" data-background="<?php echo esc_url($shape_image_one['url']); ?>"></div>
						<div class="team__area-left-content mb-15">	<span class="section-top"><?php echo esc_html($sub_title_left);?></span>
							<h2 class="mb-20"><?php echo esc_html($title_left);?></h2>	
							<p><?php echo esc_html($description);?></p>
						</div>
						<div class="team__area-left swiper-pagination"></div>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7">
					<div class="team__area-right swiper team-slider t-center wow fadeInUp" data-wow-delay="0.8s">
						<div class="team__area-right-shape-1 up-down-animate">
                        <img src="<?php echo esc_url($shape_image_two['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($shape_image_two['url']), '_wp_attachment_image_alt', true); ?>">
						</div>
						<div class="team__area-right-shape-2">
                        <img src="<?php echo esc_url($shape_image_three['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($shape_image_three['url']), '_wp_attachment_image_alt', true); ?>">
						</div>
						<div class="team__area-right-shape-3">
                        <img src="<?php echo esc_url($shape_image_four['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($shape_image_four['url']), '_wp_attachment_image_alt', true); ?>">
						</div>
						<div class="team__area-right-slide swiper-wrapper">
                            
						
                        <?php
                            if ($settings['team_items']) {
                                foreach ($settings['team_items'] as $item) {
                            ?>
							<div class="team__area-right-slide-item swiper-slide">
								<div class="team__area-right-slide-item-image">
                                <img src="<?php echo esc_url($item['team_image']['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['team_image']['url']), '_wp_attachment_image_alt', true); ?>">
								</div>
								<div class="team__area-right-slide-item-content">
									<h4><?php echo esc_html($item['team_name']); ?></h4>
									<p><?php echo esc_html($item['team_content']); ?></p>
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
	<!-- Team Area End -->
<?php

    }

    protected function _content_template()
    {
    }
}
