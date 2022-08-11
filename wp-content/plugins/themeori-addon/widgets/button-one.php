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


class Button_One extends Widget_Base
{

	public function get_name()
	{
		return 'button-one';
	}

	public function get_title()
	{
		return esc_html__('Button One', 'themeori-addon');
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
			'btn_text',
			[
				'label' => esc_html__('Button Text', 'themeori-addon'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__('Contact Us', 'themeori-addon'),
				'default' => esc_html__('Contact Us', 'themeori-addon'),
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


		$this->add_responsive_control(
			'team_content_box',
			[
				'label' => esc_html__('Content Alignment', 'themeori-addon'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'themeori-addon'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'themeori-addon'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'themeori-addon'),
						'icon' => 'eicon-text-align-right',
					],
				],
				'devices' => ['desktop', 'tablet', 'mobile'],
				'selectors' => [
					'{{WRAPPER}} .theme-btn-alignment' => 'text-align: {{VALUE}};',
				],
			]
		);


		$this->add_control(
			'banner_btn_title',
			[
				'label' => esc_html__('Button Typography', 'themeori-addon'),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'label' => esc_html__('Typography', 'themeori-addon'),
				'selector' => '{{WRAPPER}} .theme-btn',
			]
		);

		$this->add_control(
			'banner_btn_style',
			[
				'label' => esc_html__('Button Color', 'themeori-addon'),
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
					'{{WRAPPER}} .theme-btn' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'social_icon_color_bg',
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
			'social_icon_hover_color',
			[
				'label' => esc_html__('Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .theme-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'social_icon_hover_bg',
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

		$btn_text = $settings['btn_text'];
		$btn_link = $settings['btn_link'];


?>
		<?php if (!empty($btn_text)) : ?>
			<div class="theme-btn-alignment">
				<a class="theme-btn" href="<?php echo esc_url($btn_link['url']); ?>"><?php echo esc_html($btn_text); ?> <i class="flaticon-right-arrow"></i></a>
			</div>
		<?php endif; ?>
<?php

	}

	protected function _content_template()
	{
	}
}
