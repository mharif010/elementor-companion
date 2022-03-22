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
class Blog_Meta extends Widget_Base {

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
		return 'galaxypro-meta';
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
		return __( 'Galaxy Blog Meta', 'elementor-galaxypro' );
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
		return 'eicon-post-info';
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
		return [ 'galaxypro-experts' ];
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
				'label' => __( 'Content', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'show_author',
			[
				'label' => __( 'Show or Hide Author', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'elementor-galaxypro' ),
				'label_off' => __( 'Hide', 'elementor-galaxypro' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'show_date',
			[
				'label' => __( 'Show or Hide Date', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'elementor-galaxypro' ),
				'label_off' => __( 'Hide', 'elementor-galaxypro' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'show_category',
			[
				'label' => __( 'Show or Hide Category', 'elementor-galaxypro' ),
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

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-hello-world' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
				'default' => '#555',
				'selectors' => [
					'{{WRAPPER}} .blog-meta ul li a' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'elementor-galaxypro' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .blog-meta ul li a',
			]
		);

        $this->add_control(
			'hover_color',
			[
				'label' => __( 'Hover Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .blog-meta ul li a:hover' => 'color: {{VALUE}}',
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
		$settings = $this->get_settings_for_display(); ?>

        <div class="blog-meta mb-4 mt-4">
            <ul class="list-unstyled d-flex mb-4" style="float:<?php echo $settings['text_align']?>;">
                <?php if ( 'yes' === $settings['show_author'] ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fa fa-user"></i><?php the_author(); ?></a>
                </li>
                <?php } 
                if ( 'yes' === $settings['show_date'] ) {
                ?>
                <li><a href="<?php
                $archive_year  = get_the_time( 'Y' ); 
                $archive_month = get_the_time( 'm' ); 
                $archive_day   = get_the_time( 'd' );
                echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><i class="fa fa-calendar-o"></i> <?php the_date('F j,Y'); ?>  </a>
                </li>
                <?php } 
                if ( 'yes' === $settings['show_category'] ) {
                ?>
                <li>
                <?php 
                $id = get_the_id();
                $categories = get_the_terms( $id, 'category' );
                
                foreach ( $categories as $category ) {
                    printf( '<a href="%1$s"><i class="fa fa-edit"></i> %2$s</a>',
                        esc_url( get_category_link( $category->term_id ) ),
                        esc_html( $category->name )
                    );
                } ?>	
                </li>
                <?php } ?>
            </ul>
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
