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
class Section_heading extends Widget_Base {

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
		return 'section-heading';
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
		return __( 'Galaxy Heading', 'elementor-galaxypro' );
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
		return 'eicon-site-title';
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
			'heading_title',
			[
				'label' => __( 'Title part-one', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Our', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type title part here', 'elementor-galaxypro' ),
			]
		);
        $this->add_control(
			'heading_title_2',
			[
				'label' => __( 'Title part-two', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Services', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type title part here', 'elementor-galaxypro' ),
			]
		);
        $this->add_control(
			'heading_subtitle',
			[
				'label' => __( 'Title placeholder', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Services', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type title placeholder here', 'elementor-galaxypro' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-galaxypro' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        //Heading title field control
		$this->add_control(
			'heading_style',
			[
				'label' => __( 'Title part-one Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
        $this->add_control(
			'heading_style_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .section-title .title' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_style_typography',
				'label' => __( 'Typography', 'elementor-galaxypro' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section-title .title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'heading_style_shadow',
				'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
				'selector' => '{{WRAPPER}} .section-title .title',
			]
		);

         //Heading title field control
		$this->add_control(
			'heading_2_style',
			[
				'label' => __( 'Title part-two Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
        $this->add_control(
			'heading_style_2_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .section-title .title span' => 'color: {{VALUE}}',
				],
			]
		);

        //Heading title field control
		$this->add_control(
			'heading_subtitle_style',
			[
				'label' => __( 'Title placeholder Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
        $this->add_control(
			'heading_subtitle_2_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#767676',
				'selectors' => [
					'{{WRAPPER}} .section-title .sub-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_subtitle_typography',
				'label' => __( 'Typography', 'elementor-galaxypro' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section-title .sub-title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'heading_subtitle_shadow',
				'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
				'selector' => '{{WRAPPER}} .section-title .sub-title',
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
		<div class="section-title d-flex justify-content-center">
            <span class="sub-title"><?php echo $settings['heading_subtitle']; ?> </span>
            <h2 class="title"><?php echo $settings['heading_title']; ?> <span><?php echo $settings['heading_title_2']; ?></span></h2>
        </div>
        
	<?php }

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
