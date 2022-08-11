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


class Service_Item extends Widget_Base
{

    public function get_name()
    {
        return 'service-item';
    }

    public function get_title()
    {
        return esc_html__('Service Item', 'themeori-addon');
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
            'title',
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

        $this->add_control(
            'btn_title',
            [
                'label' => esc_html__('Read More Text', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'default' => esc_html__('Read More', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'btn_link',
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
                    '{{WRAPPER}} .service__area-item.t-center.thin-bg ' => 'background: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .service__area-item-content h4',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-item-content h4' => 'color: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .service__area-item-content p',
            ]
        );

        $this->add_control(
            'desc_content_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__area-item-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'subtitle_style',
            [
                'label' => esc_html__('Button', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_title_typography',
                'label' => esc_html__('Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .simple-btn',
            ]
        );

        $this->add_control(
            'btn_text_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .simple-btn' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_text_color_hover',
            [
                'label' => esc_html__('Hover', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .simple-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_border_color',
            [
                'label' => esc_html__('Border Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .simple-btn::after' => 'background: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $image_icon = $settings['image_icon'];
        $title = $settings['title'];
        $description = $settings['description'];        
        $btn_title = $settings['btn_title'];
        $btn_link = $settings['btn_link'];


?>
     <div class="service__area-item t-center thin-bg">
  <div class="service__area-item-icon mb-20 bg-white">
  <img src="<?php echo esc_url($image_icon['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($image_icon['url']), '_wp_attachment_image_alt', true); ?>">
  </div>
  <div class="service__area-item-content">
    <h4 class="mb-20"><?php echo esc_html($title);?></h4>
    <p class="mb-20">
    <?php echo esc_html($description);?>
    </p>
    <a class="simple-btn" href="<?php echo esc_url($btn_link['url']);?>"><?php echo esc_html($btn_title);?></a>
  </div>
</div>

<?php

    }

    protected function _content_template()
    {
    }
}
