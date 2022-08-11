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


class Icon_Box extends Widget_Base
{

    public function get_name()
    {
        return 'icon-box';
    }

    public function get_title()
    {
        return esc_html__('Contact Icon Box', 'themeori-addon');
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
            'image_icon',
            [
                'label' => esc_html__('Icon Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        
        $this->add_control(
            'btn_title',
            [
                'label' => esc_html__('Text One', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('0923254235', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'btn_link',
            [
                'label' => esc_html__('Text One Link', 'themeori-addon'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('tel:023423542', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'btn_title_two',
            [
                'label' => esc_html__('Text Two', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('email@example.com', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'btn_link_two',
            [
                'label' => esc_html__('Text Two Link', 'themeori-addon'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('mailto:email@example.com', 'themeori-addon'),
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
            'box_bg',
            [
                'label' => esc_html__('Box Background', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'box_bg_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact__list-item' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'box_bg_color_hover',
            [
                'label' => esc_html__('Hover', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact__list-item:hover' => 'background: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .contact__list-item p',
            ]
        );

        $this->add_control(
            'desc_content_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact__list-item p' => 'color: {{VALUE}}',
                ],
            ]
        );

        
        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $image_icon = $settings['image_icon'];
        $btn_title = $settings['btn_title'];
        $btn_link = $settings['btn_link'];
        $btn_title_two = $settings['btn_title_two'];
        $btn_link_two = $settings['btn_link_two'];


?>
        <div class="contact__list-item">
            <div class="contact__list-item-icon">
            <img src="<?php echo esc_url($image_icon['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($image_icon['url']), '_wp_attachment_image_alt', true); ?>">
            </div>
            <?php if (!empty($btn_title)) :?>
            <a href="<?php echo esc_url($btn_link['url']);?>">
                <p><?php echo esc_html($btn_title);?></p>
            </a>
            <?php endif;?>  
            <?php if (!empty($btn_title_two)) :?>
            <a href="<?php echo esc_url($btn_link_two['url']);?>">
                <p><?php echo esc_html($btn_title_two);?></p>
            </a>
            <?php endif;?>    
        </div>

<?php

    }

    protected function _content_template()
    {
    }
}
