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


class Solution extends Widget_Base
{

	public function get_name()
	{
		return 'solution';
	}

	public function get_title()
	{
		return esc_html__('Solution', 'themeori-addon');
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
				'placeholder' => esc_html__('Design Solution', 'themeori-addon'),
				'default' => esc_html__('Design Solution', 'themeori-addon'),
			]
		);
		
		$this->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'themeori-addon'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'separator' => 'before',
				'placeholder' => esc_html__('Creative solutions', 'themeori-addon'),
				'default' => esc_html__('Creative solutions', 'themeori-addon'),
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
			'section_content_icon',
			[
				'label' => esc_html__('Section Image', 'themeori-addon'),
			]
		);


		$this->add_control(
			'banner_background',
			[
				'label' => esc_html__('Left Image', 'themeori-addon'),
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
					'{{WRAPPER}} .section-top' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .solution__area-right h2',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__('Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .solution__area-right h2' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .solution__area-right p',
			]
		);

		$this->add_control(
			'desc_content_color',
			[
				'label' => esc_html__('Color', 'themeori-addon'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .solution__area-right p' => 'color: {{VALUE}}',
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

		$sub_title = $settings['sub_title'];
		$title = $settings['title'];
		$description = $settings['description'];
		$btn_text = $settings['btn_text'];
		$btn_link = $settings['btn_link'];
		$banner_background = $settings['banner_background'];

?>
	<!-- Solution  Area Start -->
	<div class="solution__area section-padding">
		<div class="solution__area-left" data-background="<?php echo esc_url($banner_background['url']); ?>"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6"></div>
				<div class="col-xl-6 col-lg-6">
					<div class="s-table">
						<div class="s-tablec">
							<div class="solution__area-right wow fadeInUp" data-wow-delay="0.3s">
								<p class="section-top"><?php echo esc_html($sub_title); ?></p>
								<h2 class="mb-20"><?php echo esc_html($title); ?></h2>
								<p class="mb-25"><?php echo esc_html($description); ?></p>	
                                <a class="theme-btn" href="<?php echo esc_url($btn_link['url']); ?>"><?php echo esc_html($btn_text); ?> <i class="flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Solution Area End -->

<?php

	}

	protected function _content_template()
	{
	}
}
