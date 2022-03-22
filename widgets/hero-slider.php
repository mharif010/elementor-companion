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
class Galaxypro_Slider extends Widget_Base {

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
		return 'galaxypro-slider';
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
		return __( 'Galaxy Slider', 'elementor-galaxypro' );
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
		return 'eicon-slider-push';
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
		return [ 'galaxypro-slider' ];
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
		/**
		 * -------------------------------------
		 * Hero slider item fields content
		 * --------------------------------------------
		 */
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'elementor-galaxypro' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Hero slider repeater start
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'sub_title', [
				'label' => __( 'Sub title', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'CEO, Lorem Ipsum' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'title', [
				'label' => __( 'Title part one', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Plumbing' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'title_1', [
				'label' => __( 'Title part two', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Services' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'button_txt', [
				'label' => __( 'Button text', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Read more' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'button_url', [
				'label' => __( 'Button url', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '#' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);
		

		$this->add_control(
			'list',
			[
				'label' => __( 'Hero Slider Items', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => __( 'Plumbing Service', 'elementor-galaxypro' ),
						'content' => __( 'Our highly trained and skilled plumbers offer a full range of services for residential plumbing and commercial plumbing.', 'elementor-galaxypro' ),
					],
					[
						'title' => __( 'Plumbing Service', 'elementor-galaxypro' ),
						'content' => __( 'Our highly trained and skilled plumbers offer a full range of services for residential plumbing and commercial plumbing.', 'elementor-galaxypro' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Background Image', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'show_dots',
			[
				'label' => __( 'Show Dots', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'elementor-galaxypro' ),
				'label_off' => __( 'Hide', 'elementor-galaxypro' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'text_align',
			[
				'label' => __( 'Alignment', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor-galaxypro' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor-galaxypro' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor-galaxypro' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->end_controls_section(); 

		/**
		 * -------------------------------------
		 * Hero slider item fields style
		 * --------------------------------------------
		 */
		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'elementor-galaxypro' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//Hero subtitle field control
		$this->add_control(
			'subtitle_style',
			[
				'label' => __( 'Subtitle Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		$this->add_control(
			'subtitle_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .hero-content h3' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'elementor-galaxypro' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .hero-content h3',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'subtitle_shadow',
				'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
				'selector' => '{{WRAPPER}} .hero-content h3',
			]
		);

		//Hero Slider Title field control
		$this->add_control(
			'title_style',
			[
				'label' => __( 'Title Style', 'elementor-galaxypro' ),
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
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .hero-content h1' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'elementor-galaxypro' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .hero-home .swiper-container .swiper-slide .hero .hero-title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'title_shadow',
				'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
				'selector' => '{{WRAPPER}} .hero-content h1',
			]
		);

		//Hero Slider Title part-2 field control
		$this->add_control(
			'title_2_style',
			[
				'label' => __( 'Title Part-2 Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title_2_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .hero-home .swiper-container .swiper-slide .hero .hero-title span' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_2_typography',
				'label' => __( 'Typography', 'elementor-galaxypro' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .hero-home .swiper-container .swiper-slide .hero .hero-title span',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'title_2_shadow',
				'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
				'selector' => '{{WRAPPER}} .hero-home .swiper-container .swiper-slide .hero .hero-title span',
			]
		);

		//Hero slider button field control
		$this->add_control(
			'designation_style',
			[
				'label' => __( 'Button Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label' => __( 'Button Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .hero-home .swiper-container .swiper-slide .hero .hero-content a' => 'background-color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'button_hover_color',
			[
				'label' => __( 'Button Color Hover', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .hero-home .swiper-container .swiper-slide .hero .hero-content a:hover' => 'background-color: {{VALUE}}',
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

		if ( $settings['list'] ) { ?>
        <section id="hero-section" class="hero-home style-1" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo $settings['image']['url']?>);">
            <div class="swiper-container">
                <div class="swiper-wrapper position-relative">
			<?php 
			foreach (  $settings['list'] as $item ) {
                 ?>
                 
                <div class="swiper-slide">
                    <div class="hero align-items-center d-flex">
                        <div class="swipeinner container">
                            <div class="row h-100">
                                <div class="col-lg-12">
                                    <div class="hero-content" style="text-align:<?php echo $settings['text_align']?>;">
                                        <h3 class="text-uppercase mb-3" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s"><?php echo $item['sub_title']; ?></h3>
                                        <h1 class="text-uppercase hero-title" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="1.0s"><?php echo $item['title']; ?> <span class="d-block"><?php echo $item['title_1']; ?></span></h1>
                                        <a href="<?php echo $item['button_url']; ?>" class="btn btn-primary btn-lg mt-3" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="1.5s"><?php echo $item['button_txt']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
           
				<?php 
                }?>
			 </div>
			 <?php if ( 'yes' === $settings['show_dots'] ) { ?>
			<div class="swiper-pagination"></div>
			<?php } ?>
            </div>
		</section>
			<?php
		}
	   
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

