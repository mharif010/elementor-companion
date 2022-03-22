<?php
namespace GalaxyproCompanion\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class About_Image extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'about-img';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Galaxy Image', 'elementor-galaxypro' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-image';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-galaxypro' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'elementor-galaxypro' ),
			]
		);
    
        $this->add_control(
			'image',
			[
				'label' => __( 'Prime Image', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$this->add_control(
			'widget_title',
			[
				'label' => __( 'Title', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Default title', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type your title here', 'elementor-galaxypro' ),
			]
		);
		
	    $this->add_control(
			'image_2',
			[
				'label' => __( 'Second Image', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
	

		$this->end_controls_section();
		
    		$this->start_controls_section(
    			'section_style_2',
    			[
    				'label' => __( 'Box Style', 'elementor-galaxypro' ),
    				'tab' => Controls_Manager::TAB_STYLE,
    			]
    		);
    		
    		$this->add_control(
    			'more_options',
    			[
    				'label' => __( 'Prime Image Style', 'elementor-galaxypro' ),
    				'type' => \Elementor\Controls_Manager::HEADING,
    				'separator' => 'after',
    			]
    		);

	    	$this->add_control(
				'width',
				[
					'label' => __( 'Width', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 920,
							'step' => 1,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 360,
					],
					'selectors' => [
						'{{WRAPPER}} .thumb img' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border',
					'label' => __( 'Border', 'elementor-galaxypro' ),
					'selector' => '{{WRAPPER}} .thumb img',
				]
			);

			$this->add_control(
				'image_radius',
				[
					'label' => __( 'Border Radius', 'elementor-galaxypro' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		
		    $this->add_control(
    			'more_options_1',
    			[
    				'label' => __( 'Text Style', 'elementor-galaxypro' ),
    				'type' => \Elementor\Controls_Manager::HEADING,
    				'separator' => 'before',
    			]
    		);
		    $this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#767676',
					'selectors' => [
						'{{WRAPPER}} .about-logo' => 'color: {{VALUE}}',
					],
				]
			);		
			
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => __( 'Typography', 'elementor-galaxypro' ),
					'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .about-logo',
				]
			);
			
			$this->add_control(
    			'more_options_2',
    			[
    				'label' => __( 'Second Image Style', 'elementor-galaxypro' ),
    				'type' => \Elementor\Controls_Manager::HEADING,
    				'separator' => 'before',
    			]
    		);

	    	$this->add_control(
				'width_2',
				[
					'label' => __( 'Width', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 920,
							'step' => 1,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 360,
					],
					'selectors' => [
						'{{WRAPPER}} .about-img .about-inner-img img' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border_2',
					'label' => __( 'Border', 'elementor-galaxypro' ),
					'selector' => '{{WRAPPER}} .about-img .about-inner-img img',
				]
			);

			$this->add_control(
				'image_radius_2',
				[
					'label' => __( 'Border Radius', 'elementor-galaxypro' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .about-img .about-inner-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);


		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
        ?>
       <div class="about-img">
            <div class="thumb">
                <img src="<?php echo $settings['image']['url']; ?>" alt="image">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-logo">
                        <span class="about-logo"><?php echo $settings['widget_title']; ?></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner-img">
                        <img src="<?php echo $settings['image_2']['url']; ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		
	}
}