<?php
namespace Elementor; // Custom widgets must be defined in the Elementor namespace
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly (security measure)

/**
 * Widget Name: Search
 */
class ProgriSaaS_Search extends Widget_Base{

 	// The get_name() method is a simple one, you just need to return a widget name that will be used in the code.
	public function get_name() {
		return 'isearch';
	}

	// The get_title() method, which again, is a very simple one, you need to return the widget title that will be displayed as the widget label.
	public function get_title() {
		return __( 'OT Search', 'progrisaas' );
	}

	// The get_icon() method, is an optional but recommended method, it lets you set the widget icon. you can use any of the eicon or font-awesome icons, simply return the class name as a string.
	public function get_icon() {
		return 'eicon-search';
	}

	// The get_categories method, lets you set the category of the widget, return the category name as a string.
	public function get_categories() {
		return [ 'category_progrisaas_header' ];
	}

	protected function register_controls() {

		//Content
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'progrisaas' ),
			]
		);

		$this->add_control(
			'pre_text',
			[
				'label' => 'Pre-Text',
				'type' => Controls_Manager::TEXT,
				'default' => __( 'What are you looking for?', 'progrisaas' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'pla_text',
			[
				'label' => 'Placeholder',
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Enter keyword...', 'progrisaas' ),
				'label_block' => true,
			]
		);

		$this->end_controls_section();
		
		/*** Style ***/
		$this->start_controls_section(
			'style_icon_section',
			[
				'label' => __( 'Icon', 'progrisaas' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .toggle_search i' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'icon_hcolor',
			[
				'label' => __( 'Icon Hover Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .toggle_search i:hover' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Icon Size', 'progrisaas' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .toggle_search i:before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'style_form_section',
			[
				'label' => __( 'Form', 'progrisaas' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bg_form_color',
			[
				'label' => __( 'Background Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .h-search-form-inner' => 'background: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'text_pre_color',
			[
				'label' => __( 'Pre-Text Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .pre-text' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'text_form_color',
			[
				'label' => __( 'Text Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .h-search-form-inner input, {{WRAPPER}} .h-search-form-inner button, {{WRAPPER}} .h-search-form-inner ::placeholder' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'border_input_color',
			[
				'label' => __( 'Border Input Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .h-search-form-inner input' => 'border-color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'btn_color',
			[
				'label' => __( 'Submit Button Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .h-search-form-inner button i' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'close_color',
			[
				'label' => __( 'Close Button Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .h-search-form-inner > i' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'overlay_color',
			[
				'label' => __( 'Overlay Color', 'progrisaas' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .search-overlay' => 'background: {{VALUE}};',
				]
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
			
	    	<div class="octf-search octf-cta-header">
				<div class="toggle_search octf-cta-icons">
					<i class="ot-flaticon-magnifiying-glass"></i>
				</div>
				<!-- Form Search on Header -->
				<div class="h-search-form-field">
					<div class="search-overlay"></div>
					<div class="h-search-form-inner">
						<i class="ot-flaticon-close"></i>
						<div class="container">
						<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
						    <label>
						    	<?php if( $settings['pre_text'] ) echo '<span class="pre-text">'.$settings['pre_text'].'</span>'; ?>
							    <input type="search" class="search-field" placeholder="<?php echo $settings['pla_text']; ?>" value="<?php echo get_search_query(); ?>" name="s" />
							</label>
							<button type="submit" class="search-submit"><i class="ot-flaticon-magnifiying-glass"></i></button>
					    </form>
					    </div>
					</div>									
				</div>
			</div>
		    
	    <?php
	}

	protected function content_template() {}
}
// After the ProgriSaaS_Search class is defined, I must register the new widget class with Elementor:
Plugin::instance()->widgets_manager->register_widget_type( new ProgriSaaS_Search() );