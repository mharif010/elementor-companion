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
class All_projects extends Widget_Base {

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
		return 'all-projects';
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
		return __( 'Galaxy Projects', 'elementor-all-projects' );
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
		 * Project Posts item fields content
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
					'label' => __( 'Background Hover Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#000000b3',
					'selectors' => [
						'{{WRAPPER}} .grid-item .portfolio-item:before' => 'background: {{VALUE}}',
					],
				]
			);

			$this->add_control(
				'show_title',
				[
					'label' => __( 'Show/Hide Title', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => __( 'Show', 'elementor-galaxypro' ),
					'label_off' => __( 'Hide', 'elementor-galaxypro' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'show_type',
				[
					'label' => __( 'Show/Hide Project type', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => __( 'Show', 'elementor-galaxypro' ),
					'label_off' => __( 'Hide', 'elementor-galaxypro' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'show_icon',
				[
					'label' => __( 'Show/Hide Icon', 'elementor-galaxypro' ),
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
		 * Project Posts item fields content style
		 * --------------------------------------------
		 */
		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-galaxypro' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//Project Posts Image field control 
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
							'max' => 920,
							'step' => 1,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 360,
					],
					'selectors' => [
						'{{WRAPPER}} .portfolio-item img' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border',
					'label' => __( 'Border', 'elementor-galaxypro' ),
					'selector' => '{{WRAPPER}} .portfolio-item img',
				]
			);

			$this->add_control(
				'image_radius',
				[
					'label' => __( 'Border Radius', 'elementor-galaxypro' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .portfolio-item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		//Project post title field control
		$this->add_control(
			'title_style',
			[
				'label' => __( 'Title Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
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
						'{{WRAPPER}} .grid-item .portfolio-item .portfolio-info .portfolio-title h6' => 'color: {{VALUE}}',
					],
				]
			);		
			
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => __( 'Typography', 'elementor-galaxypro' ),
					'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .grid-item .portfolio-item .portfolio-info .portfolio-title h6',
				]
			);

			$this->add_control(
				'title_color_hover',
				[
					'label' => __( 'Hover Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#f85032',
					'selectors' => [
						'{{WRAPPER}} .grid-item .portfolio-item .portfolio-info .portfolio-title h6 a:hover' => 'color: {{VALUE}}',
					],
				]
			);

		//Project type field style 
		$this->add_control(
			'type_style',
			[
				'label' => __( 'Type Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
			);

			$this->add_control(
				'type_color',
				[
					'label' => __( 'Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#fff',
					'selectors' => [
						'{{WRAPPER}} .portfolio-category span' => 'color: {{VALUE}}',
					],
				]
			);		
			
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'type_typography',
					'label' => __( 'Typography', 'elementor-galaxypro' ),
					'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .portfolio-category span',
				]
			);	

		//Project post icon field control
		$this->add_control(
			'icon_style',
			[
				'label' => __( 'Icon Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
			);

			$this->start_controls_tabs(
				'style_tabs'
			);

			$this->start_controls_tab(
				'icon_normal_tab',
				[
					'label' => __('Normal Style', 'elementor-galaxypro'),
				]
			);
			
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border_icon',
					'label' => __( 'Border', 'elementor-galaxypro' ),
					'selector' => '{{WRAPPER}} .grid-item .portfolio-item .portfolio-icon i',
				]
			);

			$this->add_control(
				'icon_bg_color',
				[
					'label' => __( 'Background Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#FF000000',
					'selectors' => [
						'{{WRAPPER}} .grid-item .portfolio-item .portfolio-icon i' => 'background: {{VALUE}}',
					],
				]
			);		
			
			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Icon Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#fff',
					'selectors' => [
						'{{WRAPPER}} .grid-item .portfolio-item .portfolio-icon i' => 'color: {{VALUE}}',
					],
				]
			);	
		

		$this->end_controls_tab();

		//Project post icon hover field control
		$this->start_controls_tab(
			'icon_hover_tab',
			[
				'label' => __('Hover Style', 'elementor-galaxypro'),
			]
			);
		
		   $this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border_hover_icon',
					'label' => __( 'Border', 'elementor-galaxypro' ),
					'selector' => '{{WRAPPER}} .grid-item .portfolio-item .portfolio-icon i:hover',
				]
			);

			$this->add_control(
				'icon_hover_bg_color',
				[
					'label' => __( 'Background Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#f85032',
					'selectors' => [
						'{{WRAPPER}} .grid-item .portfolio-item .portfolio-icon i:hover' => 'background: {{VALUE}}',
					],
				]
			);
			
			$this->add_control(
				'icon_hover_color',
				[
					'label' => __( 'Icon Color', 'elementor-galaxypro' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'default' => '#fff',
					'selectors' => [
						'{{WRAPPER}} .grid-item .portfolio-item .portfolio-icon i:hover' => 'color: {{VALUE}}',
					],
				]
			);

		$this->end_controls_tab();
		$this->end_controls_tabs();

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
            'post_type' => 'project',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'post_status' => 'publish',
        );
        $post_data = new \WP_Query($args);
        ?>
            <div class="col-md-12">
                <div class="filters-group mb-2 mb-lg-5">
                    <button class="btn-filter  active" data-group="all"><span>All</span></button>
                    <?php 
                    $menu_item = get_terms('project_cat');
                    foreach( $menu_item as $item){
                    ?>
                    <button class="btn-filter" data-group="<?php echo $item->slug; ?>"><span><?php echo $item->name; ?></span></button>
                    <?php } ?>
                </div>
                <div class="my-shuffle-container columns-<?php echo esc_attr($settings['column']); ?> popup-gallery">
                <?php while ( $post_data->have_posts() ) {
                $post_data->the_post(); 

				$img_id = get_post_thumbnail_id(get_the_ID()) ? get_post_thumbnail_id(get_the_ID()) : false;
				$img_url_val = $img_id ? wp_get_attachment_image_src($img_id, 'galaxypro-blog', false) : '';
				$img_url = is_array($img_url_val) && !empty($img_url_val) ? $img_url_val[0] : '';
				?>

                    <!-- Item Start -->
                    <div class="grid-item" data-groups='[<?php 
                            $project_cat = get_the_terms(get_the_ID(), 'project_cat');
                            $last_key = array_key_last(array_keys($project_cat));
                            foreach ($project_cat as $key => $cat) {
                                if ($key == $last_key) {
                                    echo '"';
                                    echo $cat->slug;
                                    echo '"';
                                } else {
                                    echo '"';
                                    echo $cat->slug;
                                    echo '", ';
                                }
                            }
                            ?>]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="<?php echo esc_url($img_url) ?>" alt="">
                            <div class="portfolio-info">
							<?php if ( 'yes' === $settings['show_type'] ) { ?>
                                <div class="portfolio-category">
									<?php $project_cat = get_the_terms(get_the_ID(), 'project_cat');
									$last_key = array_key_last(array_keys($project_cat)); 
									foreach($project_cat as $key => $newcat){
										if ($key == $last_key) {
										echo '<span>';
										echo $newcat->name;
										echo '</span>';
									} else {
										echo '<span>';
										echo $newcat->name;
										echo ', </span>';
									}
									}
									?>
                                   
                                </div>
								<?php }
								 if ( 'yes' === $settings['show_title'] ) { ?>
                                <div class="portfolio-title">
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                </div>
								<?php } ?>
                            </div>
							<?php if ( 'yes' === $settings['show_icon'] ) { ?>
                            <div class="portfolio-icon">
                                <a class="portfolio-img" href="<?php echo esc_url($img_url) ?>">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                    <!-- Item End -->
                    <?php }
                    wp_reset_query();
                    ?>
                </div>
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
