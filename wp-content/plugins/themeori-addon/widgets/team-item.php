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


class Team_Item extends Widget_Base
{

    public function get_name()
    {
        return 'team-item';
    }

    public function get_title()
    {
        return esc_html__('Team Member', 'themeori-addon');
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
            'team_name',
            [
                'label' => esc_html__('Name', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before',
                'placeholder' => esc_html__('William Michael', 'themeori-addon'),
                'default' => esc_html__('William Michael', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'team_image',
            [
                'label' => esc_html__('Choose Image', 'themeori-addon'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'team_position',
            [
                'label' => esc_html__('Position', 'themeori-addon'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Web Designer', 'themeori-addon'),
                'default' => esc_html__('Web Designer', 'themeori-addon'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_content_icon',
            [
                'label' => esc_html__('Social Icon', 'themeori-addon'),
            ]
        );


        $this->add_control(
            'show_social_icon',
            [
                'label' => esc_html__('Show Icon', 'themeori-addon'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'themeori-addon'),
                'label_off' => esc_html__('Hide', 'themeori-addon'),
                'separator' => 'after',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );


        $repeater = new Repeater();

        $repeater->add_control(
            'team_icon',
            [
                'label' => esc_html__('Social Icon', 'themeori-addon'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'team_icon_link',
            [
                'label' => esc_html__('Social Icon Link', 'themeori-addon'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('Write Icon Link Here', 'themeori-addon'),
            ]
        );

        $this->add_control(
            'team_social_list',
            [
                'label' => esc_html__('Social Icon Lists', 'themeori-addon'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'condition' => [
                    'show_social_icon' => 'yes'
                ]
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
            'team_title_heading',
            [
                'label' => esc_html__('Team Name', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team_title_typography',
                'label' => esc_html__('Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .team__area-item-content h4',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-content h4' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'team_post_heading',
            [
                'label' => esc_html__('Position', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team_post_typography',
                'label' => esc_html__('Typography', 'themeori-addon'),
                'selector' => '{{WRAPPER}} .team__area-item-content p',
            ]
        );

        $this->add_control(
            'title_post_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'team_image_hover',
            [
                'label' => esc_html__('Share Icon', 'themeori-addon'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'team_image_hover_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-image-social-share i' => 'background: {{VALUE}}',
                ],
            ]
        );



        $this->add_control(
            'team_social_color_title',
            [
                'label' => esc_html__('Social Icon', 'themeori-addon'),
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
            'social_icon_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-image-social-icon ul li a i::before' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'social_icon_color_bg',
            [
                'label' => esc_html__('Background', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-image-social-icon ul li a i::before' => 'background: {{VALUE}}',
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
            'social_icon_hover_color',
            [
                'label' => esc_html__('Color', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-image-social-icon ul li a i:hover::before' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_bg',
            [
                'label' => esc_html__('Background', 'themeori-addon'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team__area-item-image-social-icon ul li a i:hover::before' => 'background: {{VALUE}}',
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

        $team_name = $settings['team_name'];
        $team_position = $settings['team_position'];
        $team_image = $settings['team_image'];
        $show_social_icon = $settings['show_social_icon'];

?>
        <!-- Team Area Start -->
        <div class="team__area-item">
            <div class="team__area-item-image">
                <img src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($team_image['url']), '_wp_attachment_image_alt', true); ?>">
                <?php if ($show_social_icon === 'yes') : ?>
                    <div class="team__area-item-image-social">
                        <div class="team__area-item-image-social-icon">
                            <ul>
                                <?php
                                if ($settings['team_social_list']) {
                                    foreach ($settings['team_social_list'] as $item) {
                                ?>
                                        <li><a href="<?php echo esc_url($item['team_icon_link']['url']); ?>"><i class="<?php echo esc_attr($item['team_icon']['value']); ?>"></i></a></li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                        <div class="team__area-item-image-social-share">
                            <i class="fas fa-share-alt"></i>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="team__area-item-content">
                <h4><?php echo esc_html($team_name); ?></h4>
                <p><?php echo esc_html($team_position); ?></p>
            </div>
        </div>
        <!-- Team Area End -->
<?php

    }

    protected function _content_template()
    {
    }
}
