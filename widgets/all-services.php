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
class All_services extends Widget_Base {

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
		return 'all-services';
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
		return __( 'Galaxy Services', 'elementor-all-services' );
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
		return 'eicon-posts-ticker';
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
		return [ 'elementor-all-services' ];
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
		 * Project Posts item fields content
		 * --------------------------------------------
		 */
		$this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'elementor-all-services'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
            );

            $this->add_control(
                'column',
                [
                    'label' => esc_html__('Column', 'elementor-all-services'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => array(
                        '6' => esc_html__('02 Column', 'elementor-all-services'),
                        '3' => esc_html__('04 Column', 'elementor-all-services'),
                        '4' => esc_html__('03 Column', 'elementor-all-services'),
                        '2' => esc_html__('06 Column', 'elementor-all-services')
                    ),
                    'description' => esc_html__('select grid column', 'elementor-all-services'),
                    'default' => '4'
                ]
            );

            $this->add_control(
                'total', 
                [
                    'label' => esc_html__('Total Posts', 'elementor-all-services'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => '-1',
                    'description' => esc_html__('enter how many service you want jus type the number & enter -1 for unlimited portfolio.')
                ]
            );

            $this->add_control(
                'order', 
                [
                'label' => esc_html__('Order', 'elementor-all-services'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array(
                    'ASC' => esc_html__('Ascending', 'elementor-all-services'),
                    'DESC' => esc_html__('Descending', 'elementor-all-services'),
                ),
                'default' => 'ASC',
                'description' => esc_html__('select order', 'elementor-all-services')
                ]
            );

            $this->add_control(
                'show_icon',
                [
                    'label' => __( 'Show/Hide Icon', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'elementor-all-services' ),
                    'label_off' => __( 'Hide', 'elementor-all-services' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'show_title',
                [
                    'label' => __( 'Show/Hide Title', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'elementor-all-services' ),
                    'label_off' => __( 'Hide', 'elementor-all-services' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'show_excerpt',
                [
                    'label' => __( 'Show/Hide Excerpt', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'elementor-all-services' ),
                    'label_off' => __( 'Hide', 'elementor-all-services' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

		$this->end_controls_section();

		/**
		 * -------------------------------------
		 * Service Posts item fields content style
		 * --------------------------------------------
		 */
		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-all-services' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
            );

            //Service Posts Box design style
            $this->add_control(
                'general_style',
                [
                    'label' => __( 'General Style', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'after',
                ]
                );
                $this->add_control(
                    'post_bg_color',
                    [
                        'label' => __( 'Background', 'elementor-all-services' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'scheme' => [
                            'type' => \Elementor\Scheme_Color::get_type(),
                            'value' => \Elementor\Scheme_Color::COLOR_1,
                        ],
                        'default' => '#fff',
                        'selectors' => [
                            '{{WRAPPER}} .service-item, .card' => 'background: {{VALUE}}',
                        ],
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'box_shadow',
                        'label' => __( 'Box Shadow', 'elementor-all-services' ),
                        'selector' => '{{WRAPPER}} .service-item, .card',
                    ]
                );
            //Service post box field style

            //Service Posts Image field control 
            $this->add_control(
                'image_style',
                [
                    'label' => __( 'Image Style', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
                );

                $this->add_control(
                    'width',
                    [
                        'label' => __( 'Size', 'elementor-all-services' ),
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
                            'size' => 70,
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-icon img' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
            //End Service post image field control
            
            //Service post title Heading field control
            $this->add_control(
                'title_style',
                [
                    'label' => __( 'Title Style', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
                );
                //Service post title tabs field style
                $this->start_controls_tabs(
                    'style_tabs'
                    );

                    $this->start_controls_tab(
                        'icon_normal_tab',
                        [
                            'label' => __('Normal Style', 'elementor-all-services'),
                        ]
                    );
                    
                    $this->add_control(
                        'title_color',
                        [
                            'label' => __( 'Color', 'elementor-all-services' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'scheme' => [
                                'type' => \Elementor\Scheme_Color::get_type(),
                                'value' => \Elementor\Scheme_Color::COLOR_1,
                            ],
                            'default' => '#111',
                            'selectors' => [
                                '{{WRAPPER}} .service-item-info .title' => 'color: {{VALUE}}',
                            ],
                        ]
                    );		
                    
                    $this->add_group_control(
                        \Elementor\Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'elementor-all-services' ),
                            'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .service-item-info .title',
                        ]
                    );
                    
                    $this->add_group_control(
                        \Elementor\Group_Control_Text_Shadow::get_type(),
                        [
                            'name' => 'title_shadow',
                            'label' => __( 'Text Shadow', 'elementor-all-services' ),
                            'selector' => '{{WRAPPER}} .service-item-info .title',
                        ]
                    );
                    

                    $this->end_controls_tab();

                    //Service post title hover field control
                    $this->start_controls_tab(
                        'title_hover_tab',
                        [
                            'label' => __('Hover Style', 'elementor-all-services'),
                        ]
                    );

                    $this->add_control(
                        'title_hover_color',
                        [
                            'label' => __( 'Color', 'elementor-all-services' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'scheme' => [
                                'type' => \Elementor\Scheme_Color::get_type(),
                                'value' => \Elementor\Scheme_Color::COLOR_1,
                            ],
                            'default' => '#ffc400',
                            'selectors' => [
                                '{{WRAPPER}} .service-item-info .title a:hover' => 'color: {{VALUE}}',
                            ],
                        ]
                    );		
                    
                    $this->add_group_control(
                        \Elementor\Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_hover_typography',
                            'label' => __( 'Typography', 'elementor-all-services' ),
                            'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .service-item-info .title a:hover',
                        ]
                    );
                    
                    $this->add_group_control(
                        \Elementor\Group_Control_Text_Shadow::get_type(),
                        [
                            'name' => 'title_hover_shadow',
                            'label' => __( 'Text Shadow', 'elementor-all-services' ),
                            'selector' => '{{WRAPPER}} .service-item-info .title a:hover',
                        ]
                    );

                    $this->end_controls_tab();
                $this->end_controls_tabs();
                //End Service post title tabs
            //Service post title Heading field control    
            
            //Service post Excerpt field control
            $this->add_control(
                'excerpt_style',
                [
                    'label' => __( 'Excerpt Style', 'elementor-all-services' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'after',
                ]
                );

                $this->add_control(
                    'excerpt_color',
                    [
                        'label' => __( 'Color', 'elementor-all-services' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'scheme' => [
                            'type' => \Elementor\Scheme_Color::get_type(),
                            'value' => \Elementor\Scheme_Color::COLOR_1,
                        ],
                        'default' => '#7e7e7e',
                        'selectors' => [
                            '{{WRAPPER}} .service-item-info .text' => 'color: {{VALUE}}',
                        ],
                    ]
                );		
                
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'excerpt_typography',
                        'label' => __( 'Typography', 'elementor-all-services' ),
                        'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                        'selector' => '{{WRAPPER}} .service-item-info .text',
                    ]
                );
            //End Service post Excerpt field control    
            

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

         //query setup
         $args = array(
            'post_type' => 'service',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'post_status' => 'publish',
        );
        $post_data = new \WP_Query($args); ?>
       
        <!-- query layout -->
       <div class="row">    
            <?php while ( $post_data->have_posts() ) {
                $post_data->the_post(); 
				?>

            <div class="col-lg-<?php echo esc_attr($settings['column']); ?> col-md-6 col-sm-6">
                <div class="service-item mb-30">
                    <div class="card about-card">
                        <div class="row g-0">
                            <?php if ( 'yes' === $settings['show_icon'] ) { ?>
                            <div class="col-md-2 col-3 col-sm-3">
                                <div class="service-icon">
                                <?php 
                                $image = get_field('icon_image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-md-10 col-9 col-sm-9">
                                <div class="card-body">
                                    <div class="service-item-info">
                                    <?php if ( 'yes' === $settings['show_title'] ) { ?>
                                        <h5 class="title mb-0">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php echo wp_trim_words( get_the_title(),4,'' ); ?>
                                            </a>
                                        </h5>
                                        <?php } 
                                        if ( 'yes' === $settings['show_excerpt'] ) {
                                            if( empty(has_excerpt()) ){ ?>
                                                <p class="text mt-10 mb-0"><?php echo wp_trim_words(17,'...'); ?></p>
                                            <?php } else{ ?>
                                                <p class="text mt-10 mb-0"><?php echo excerpt(17); ?></p>
                                        <?php } } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
