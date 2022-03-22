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
class Galaxypro_Posts extends Widget_Base {

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
		return 'galaxypro-posts';
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
		return __( 'Galaxy Posts', 'elementor-galaxypro' );
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
		return 'eicon-flip-box';
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
		/**
		 * -------------------------------------
		 * Blog Posts item fields content
		 * --------------------------------------------
		 */
		$this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'elementor-galaxypro'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
            );

            $this->add_control(
                'column',
                [
                    'label' => esc_html__('Column', 'elementor-galaxypro'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => array(
                        '6' => esc_html__('02 Column', 'elementor-galaxypro'),
                        '3' => esc_html__('04 Column', 'elementor-galaxypro'),
                        '4' => esc_html__('03 Column', 'elementor-galaxypro'),
                        '2' => esc_html__('06 Column', 'elementor-galaxypro')
                    ),
                    'description' => esc_html__('select grid column', 'elementor-galaxypro'),
                    'default' => '4'
                ]
            );

            $this->add_control(
                'total', 
                [
                    'label' => esc_html__('Total Posts', 'elementor-galaxypro'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => '-1',
                    'description' => esc_html__('enter how many service you want jus type the number & enter -1 for unlimited portfolio.')
                ]
            );

            $this->add_control(
                'order', 
                [
                'label' => esc_html__('Order', 'elementor-galaxypro'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array(
                    'ASC' => esc_html__('Ascending', 'elementor-galaxypro'),
                    'DESC' => esc_html__('Descending', 'elementor-galaxypro'),
                ),
                'default' => 'ASC',
                'description' => esc_html__('select order', 'elementor-galaxypro')
                ]
            );

            $this->add_control(
                'post_bg_color',
                [
                    'label' => __( 'Background', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-item' => 'background: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'show_thumb',
                [
                    'label' => __( 'Show/Hide Thumbnail', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'elementor-galaxypro' ),
                    'label_off' => __( 'Hide', 'elementor-galaxypro' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'show_title',
                [
                    'label' => __( 'Show or Hide Title', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'elementor-galaxypro' ),
                    'label_off' => __( 'Hide', 'elementor-galaxypro' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'show_excerpt',
                [
                    'label' => __( 'Show or Hide Excerpt', 'elementor-galaxypro' ),
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
                'show_read',
                [
                    'label' => __( 'Show or Hide Read more', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'elementor-galaxypro' ),
                    'label_off' => __( 'Hide', 'elementor-galaxypro' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->end_controls_section();

		/**
		 * -------------------------------------
		 * Blog Posts item fields content style
		 * --------------------------------------------
		 */
		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-galaxypro' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//Blog Posts Image field control 
		$this->add_control(
			'image_style',
			[
				'label' => __( 'Image Style', 'elementor-galaxypro' ),
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
                            'max' => 720,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 360,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-image img' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border',
                    'label' => __( 'Border', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .blog-post-image img',
                ]
            );

            $this->add_control(
                'image_radius',
                [
                    'label' => __( 'Border Radius', 'elementor-galaxypro' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'separator' => 'before',
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

		

		//Blog post title field control
		$this->add_control(
			'title_style',
			[
				'label' => __( 'Title Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->start_controls_tabs(
			'style_tabs'
		);

		$this->start_controls_tab(
			'title_normal_tab',
            [
                'label' => __('Normal Style', 'elementor-galaxypro'),
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
				'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .blog-post-title h4' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .blog-post-title h4',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'title_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .blog-post-title h4',
                ]
            );

		
        $this->end_controls_tab();
		//Blog post title hover field control
		$this->start_controls_tab(
			'title_hover_tab',
			[
				'label' => __('Hover Style', 'elementor-galaxypro'),
			]
            );

            $this->add_control(
                'title_hover_color',
                [
                    'label' => __( 'Color', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#f85032',
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-title h4 a:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );		

		$this->end_controls_tab();
		$this->end_controls_tabs();
		
		//Blog post excerpt field control
		$this->add_control(
			'exceprt_style',
			[
				'label' => __( 'Excerpt Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
            );

            $this->add_control(
                'excerpt_color',
                [
                    'label' => __( 'Color', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#767676',
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-desc p' => 'color: {{VALUE}}',
                    ],
                ]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'excerpt_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .blog-post-desc p',
                ]
            );

		//Blog post read field control
		$this->add_control(
			'read_style',
			[
				'label' => __( 'Link Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
            );

            $this->add_control(
                'read_color',
                [
                    'label' => __( 'Color', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#7e7e7e',
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-btn a' => 'color: {{VALUE}}',
                    ],
                ]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'read_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .blog-post-btn a',
                ]
            );
            $this->add_control(
                'read_hover_color',
                [
                    'label' => __( 'Hover Color', 'elementor-galaxypro' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#f85032',
                    'selectors' => [
                        '{{WRAPPER}} .blog-post-btn a:hover' => 'color: {{VALUE}}',
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

		 //query settings
         $total_posts = $settings['total'];
         $order = $settings['order'];

         //setup query
         $args = array(
            'post_type' => 'post',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'post_status' => 'publish',
        );
        $post_data = new \WP_Query($args);
          ?>
        <div class="row">    
        <?php while ( $post_data->have_posts() ) {
                $post_data->the_post(); 

				$img_id = get_post_thumbnail_id(get_the_ID()) ? get_post_thumbnail_id(get_the_ID()) : false;
				$img_url_val = $img_id ? wp_get_attachment_image_src($img_id, 'galaxypro-blog', false) : '';
				$img_url = is_array($img_url_val) && !empty($img_url_val) ? $img_url_val[0] : '';
				?>

            <div class="col-sm-6 col-lg-<?php echo esc_attr($settings['column']); ?>">
                <div class="blog-post xs-mt-30 md-mt-30">
                    <?php if ( 'yes' === $settings['show_thumb'] ) { ?>
                    <div class="blog-post-image">
                        <img class="img-fluid" src="<?php echo esc_url($img_url); ?>" alt="image">
                    </div>
                    <?php } ?>
                    <div class="blog-post-categorise justify-content-center mt-20">
                    <?php if ( 'yes' === $settings['show_date'] ) { ?>
                        <ul class="list-unstyled d-flex mb-0 blog-post-meta">
                            <li><a class="" href="<?php 
                            $archive_year  = get_the_time( 'Y' ); 
							$archive_month = get_the_time( 'm' ); 
							$archive_day   = get_the_time( 'd' );
                            echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); 
                            ?>"><?php the_date('M j'); ?><span><?php echo get_the_time('Y'); ?></span>  </a></li>
                        </ul>
                    <?php } ?>
                    </div>
                    <?php if ( 'yes' === $settings['show_title'] ) { ?>
                    <div class="blog-post-title mt-4">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>
                    <?php } 
                    if ( 'yes' === $settings['show_excerpt'] ) {
                    ?>
                    <div class="blog-post-desc">
                        <?php 
                        if( !empty(has_excerpt()) ){ ?>
                            <p class="mt-2 mb-0"><?php echo wp_trim_words(13,'...'); ?></p>
                        <?php } else{ ?>
                            <p class="mt-2 mb-0"><?php echo  excerpt(13); ?></p>
                        <?php } ?>
                    </div>
                    <?php } 
                     if ( 'yes' === $settings['show_read'] ) {
                    ?>
                    <div class="blog-post-btn mt-2">
                        <a href="<?php the_permalink(); ?>"><?php echo _e('Read more'); ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>



            <?php }
            wp_reset_query();
            ?>
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
