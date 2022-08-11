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


class Section_Title extends Widget_Base
{

	public function get_name()
	{
		return 'section-title';
	}

	public function get_title()
	{
		return esc_html__('Section Title', 'themeori-addon');
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
				'placeholder' => esc_html__('Were The best', 'themeori-addon'),
				'default' => esc_html__('Were The best', 'themeori-addon'),
			]
		);
		
		$this->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'themeori-addon'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'separator' => 'before',
				'placeholder' => esc_html__('We believe in creativity', 'themeori-addon'),
				'default' => esc_html__('We believe in creativity', 'themeori-addon'),
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
			'section_style',
			[
				'label' => esc_html__('Style', 'themeori-addon'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_responsive_control(
			'section_alignment_style',
			[
				'label' => esc_html__('Alignment', 'themeori-addon'),
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
					'{{WRAPPER}} .beorx__area-section-title' => 'text-align: {{VALUE}};',
				],
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
				'selector' => '{{WRAPPER}} .beorx__area-section-title span ',
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => esc_html__('Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .beorx__area-section-title span ' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'sub_title_border',
			[
				'label' => esc_html__('Border Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .beorx__area-section-title span::before ' => 'background: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .beorx__area-section-title h2',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__('Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .beorx__area-section-title h2' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .beorx__area-section-title p',
			]
		);

		$this->add_control(
			'desc_content_color',
			[
				'label' => esc_html__('Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .beorx__area-section-title p' => 'color: {{VALUE}}',
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
		$description = $settings['description'];

?>
	<div class="beorx__area-section-title">
        <span class="section-top"><?php echo esc_html($sub_title); ?></span>
		<h2><?php echo esc_html($title); ?></h2>
        <?php if(!empty($description)):?>
        <p class="mt-20"><?php echo esc_html($description); ?></p>
        <?php endif;?>
	</div>

<?php

	}

	protected function _content_template()
	{
	}
}
