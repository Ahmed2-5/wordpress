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


class About_US extends Widget_Base
{

    public function get_name()
    {
        return 'about-us';
    }

    public function get_title()
    {
        return esc_html__('About Us', 'themeori-addon');
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
                'label' => esc_html__('Content Left', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'sub_title_left',
            [
                'label' => esc_html__('Sub Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('About Us', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'title_left',
            [
                'label' => esc_html__('Title', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Best Software', 'themeori-addon'),
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
                'label' => esc_html__('Content Right', 'themeori-addon'),
            ]
        );


        $this->add_control(
            'title',
            [
                'label' => esc_html__('Experience', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('Years Experiences', 'themeori-addon'),
                'default' => esc_html__('Years Experiences', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'pointer',
            [
                'label' => esc_html__('Pointer', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('23', 'themeori-addon'),
                'default' => esc_html__('23', 'themeori-addon'),
            ]
        );




        $this->add_control(
            'pointer_after',
            [
                'label' => esc_html__('Pointer After', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('+', 'themeori-addon'),
                'default' => esc_html__('+', 'themeori-addon'),
            ]
        );


        $this->add_control(
            'image_right',
            [
                'label' => esc_html__('About Image', 'themeori-addon'),
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
                'selector' => '{{WRAPPER}} .about__area-left-title h2',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__area-left-title h2' => 'color: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .about__area-left-title p',
            ]
        );

        $this->add_control(
            'desc_content_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__area-left-title p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'right_content_type',
            [
                'label' => esc_html__('Right Typography', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'pointer_typography',
                'label' => esc_html__('Pointer Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .about__area-right-content b span',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'experience_typography',
                'label' => esc_html__('Experiences Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .about__area-right-content p',
            ]
        );

        $this->add_control(
            'pointer_bg_style',
            [
                'label' => esc_html__('Pointer BG Color', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'pointer_color_bg',
            [
                'label' => esc_html__('Background', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__area-right-content' => 'background-color: {{VALUE}}',
                ],
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
        $title = $settings['title'];
        $pointer = $settings['pointer'];
        $pointer_after = $settings['pointer_after'];
        $image_right = $settings['image_right'];

?>
        <!-- About Area Start -->
        <div class="about__area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 lg-mb-30">
                        <div class="about__area-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="about__area-left-title">
                                <span class="section-top"><?php echo esc_html($sub_title_left); ?></span>
                                <h2 class="mb-20"><?php echo esc_html($title_left); ?></h2>
                                <p><?php echo esc_html($description); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about__area-right t-right wow fadeInUp" data-wow-delay="0.8s">
                            <div class="about__area-right-image">
                                <img src="<?php echo esc_url($image_right['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($image_right['url']), '_wp_attachment_image_alt', true); ?>">
                            </div>
                            <div class="about__area-right-content">
                                <b><span class="counter"><?php echo esc_html($pointer); ?></span><?php echo esc_html($pointer_after); ?></b>
                                <p><?php echo esc_html($title); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
<?php

    }

    protected function _content_template()
    {
    }
}
