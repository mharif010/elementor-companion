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
class Pricing_plan extends Widget_Base {

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
		return 'pricing-plan';
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
		return __( 'Galaxy Pricing', 'elementor-pricing-plan' );
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
		return [ 'pricing-plan' ];
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
				'label' => __( 'Content', 'elementor-pricing-plan' ),
			]
		);

		$this->add_control(
			'main_sub_title', [
				'label' => __( 'Sub title', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Our Price Plan' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'main_title', [
				'label' => __( 'Title', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'CHOOSE YOUR PLAN' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'main_description',
			[
				'label' => __( 'Description', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'rows' => 10,
				'default' => __( 'Set your description here', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type your description here', 'elementor-galaxypro' ),
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
				'default' => 'left',
				'toggle' => true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_1',
			[
				'label' => __( 'Item Plans', 'elementor-pricing-plan' ),
			]
		);
		//Hero slider repeater start
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'sub_title', [
				'label' => __( 'Sub title', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Basic Plan' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'title', [
				'label' => __( 'Plan Price', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '56.99' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'item_description',
			[
				'label' => __( 'Description', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Default description', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type your description here', 'elementor-galaxypro' ),
			]
		);

		$repeater->add_control(
			'button_txt', [
				'label' => __( 'Button text', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Choose plan' , 'elementor-galaxypro' ),
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

		$repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		

		$this->add_control(
			'list',
			[
				'label' => __( 'Monthly Plans', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				
			]
		);


		//Hero slider repeater start
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'sub_title_2', [
				'label' => __( 'Sub title', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Basic plan' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'title_2', [
				'label' => __( 'Plan Price', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '178.99' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'item_description_2',
			[
				'label' => __( 'Description', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Default description', 'elementor-galaxypro' ),
				'placeholder' => __( 'Type your description here', 'elementor-galaxypro' ),
			]
		);

		$repeater->add_control(
			'button_txt_2', [
				'label' => __( 'Button text', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Choose plan' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'button_url_2', [
				'label' => __( 'Button url', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '#' , 'elementor-galaxypro' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'image_2',
			[
				'label' => __( 'Choose Image', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'list_2',
			[
				'label' => __( 'Yearly Plans', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-pricing-plan' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//Pricing sub title field style
		$this->add_control(
			'main_sub_style',
			[
				'label' => __( 'Sub Title Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'main_sub_title_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .pricing-title .subtitle' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'main_sub_title_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .pricing-title .subtitle',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'main_sub_title_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .pricing-title .subtitle',
                ]
            );

		//Pricing title field style
		$this->add_control(
			'main_title_style',
			[
				'label' => __( 'Title Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'main_title_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .pricing-title .title' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'main_title_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .pricing-title .title',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'main_title_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .pricing-title .title',
                ]
            );

		//Pricing description field style
		$this->add_control(
			'main_desc_style',
			[
				'label' => __( 'Description Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'main_description_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#767676',
				'selectors' => [
					'{{WRAPPER}} .pricing-title .text' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'main_description_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .pricing-title .text',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'main_description_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .pricing-title .text',
                ]
            );
	

		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_style_2',
			[
				'label' => __( 'Item Box Style', 'elementor-pricing-plan' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//Pricing Box sub title field style
		$this->add_control(
			'price_box_style',
			[
				'label' => __( 'General Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'price_box_color',
			[
				'label' => __( 'Background Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .pricing-plan .price-item' => 'background: {{VALUE}}',
				],
			]
            );

			$this->add_control(
				'price_box_padding',
				[
					'label' => __( 'Padding', 'elementor-workhouse' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator' => 'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .pricing-plan .price-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'price_box_shadow',
					'label' => __( 'Box Shadow', 'elementor-galaxypro' ),
					'selector' => '{{WRAPPER}} .pricing-plan .price-item',
				]
			);

		//Pricing Box sub title field style
		$this->add_control(
			'price_sub_style',
			[
				'label' => __( 'Sub Title Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'price_sub_title_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .price-item .subtitle' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'price_sub_title_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .price-item .subtitle',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'price_sub_title_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .price-item .subtitle',
                ]
            );

		//Pricing box title field style
		$this->add_control(
			'price_title_style',
			[
				'label' => __( 'Price Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'price_title_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .price-item .price' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'price_title_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .price-item .price',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'price_title_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .price-item .price',
                ]
            );

		//Pricing box description field style
		$this->add_control(
			'price_desc_style',
			[
				'label' => __( 'Description Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'price_description_color',
			[
				'label' => __( 'Color', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#767676',
				'selectors' => [
					'{{WRAPPER}} .price-item .desc' => 'color: {{VALUE}}',
				],
			]
            );		
            
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'price_description_typography',
                    'label' => __( 'Typography', 'elementor-galaxypro' ),
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .price-item .desc',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'price_description_shadow',
                    'label' => __( 'Text Shadow', 'elementor-galaxypro' ),
                    'selector' => '{{WRAPPER}} .price-item .desc',
                ]
            );

		//Button style 
		$this->start_controls_tabs(
			'style_tabs'
		);

		// Normal
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => __( 'Normal', 'plugin-name' ),
			]
		);

		$this->add_control(
			'btn_style',
			[
				'label' => __( 'Button Style', 'elementor-galaxypro' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'btn_text_color',
			[
				'label' => __( 'Text Color', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_bg_color',
			[
				'label' => __( 'Background Color', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_border_style',
			[
				'label' => __( 'Border Style', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'none',
				'options' => [
					'none' => __( 'None', 'plugin-domain' ),
					'solid'  => __( 'Solid', 'plugin-domain' ),
					'dashed' => __( 'Dashed', 'plugin-domain' ),
					'dotted' => __( 'Dotted', 'plugin-domain' ),
					'double' => __( 'Double', 'plugin-domain' ),
				],
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'border-style: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_border_width',
			[
				'label' => __( 'Border Width', 'elementor-workhouse' ),
				'type' => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'btn_border_style!' => '',
				],
			]
		);

		$this->add_control(
			'btn_border_color',
			[
				'label' => __( 'Border Color', 'elementor-workhouse' ),
				'type' => Controls_Manager::COLOR,				
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'btn_border_style!' => '',
				],
			]
		);

		$this->add_control(
			'btn_border_radius',
			[
				'label' => __( 'Border Radius', 'elementor-workhouse' ),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'btn_padding',
			[
				'label' => __( 'Padding', 'elementor-workhouse' ),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .btn-primary' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);	

		$this->end_controls_tab();

		// Hover
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => __( 'Hover', 'plugin-name' ),
			]
		);

		$this->add_control(
			'btn_text_hover_color',
			[
				'label' => __( 'Text Color', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#f85032',
				'selectors' => [
					'{{WRAPPER}} .btn-primary:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_bg_hover_color',
			[
				'label' => __( 'Background Color', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .btn-primary:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_hover_border_style',
			[
				'label' => __( 'Border Style', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'none',
				'options' => [
					'none' => __( 'None', 'plugin-domain' ),
					'solid'  => __( 'Solid', 'plugin-domain' ),
					'dashed' => __( 'Dashed', 'plugin-domain' ),
					'dotted' => __( 'Dotted', 'plugin-domain' ),
					'double' => __( 'Double', 'plugin-domain' ),
				],
				'selectors' => [
					'{{WRAPPER}} .btn-primary:hover' => 'border-style: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_hover_border_width',
			[
				'label' => __( 'Border Width', 'elementor-workhouse' ),
				'type' => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .btn-primary:hover' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'btn_hover_border_style!' => '',
				],
			]
		);

		$this->add_control(
			'btn_hover_border_color',
			[
				'label' => __( 'Border Color', 'elementor-workhouse' ),
				'type' => Controls_Manager::COLOR,				
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .btn-primary:hover' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'btn_hover_border_style!' => '',
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
        ?>
        <div class="row">
         <div class="col-lg-5 offset-lg-0 col-md-10 offset-md-1">
            <div class="pricing-title" style="text-align:<?php echo $settings['text_align']?>;">
                <span class="subtitle"><?php echo $settings['main_sub_title']; ?></span>
                <h2 class="title"><?php echo $settings['main_title']; ?></h2>
                <p class="text mb-15"><?php echo $settings['main_description']; ?></p>
               
            </div>
            
            <nav style="text-align:<?php echo $settings['text_align']?>;">
                <div class="nav nav-tabs pricing-nav mt-30" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><?php _e('Monthly', 'galaxypro'); ?></button>
                    
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><?php _e('Yearly', 'galaxypro'); ?></button>
                </div>
            </nav>
        </div>
        <div class="col-lg-7 offset-lg-0 col-md-10 offset-md-1">
            <div class="pricing-plan">
				
                <div class="tab-content" id="nav-tabContent">
				<?php if ( $settings['list'] ) { ?>
                    <div class="tab-pane  fade show active text-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
						<?php 
							foreach (  $settings['list'] as $item ) {
								?>
                            <div class="col-lg-6 col-sm-6">
                                <div class="price-item xs-mt-30">
                                    <div class="shape">
                                        <img src="<?php echo $item['image']['url']?>" >
                                    </div>
                                    <div>
                                        <h5 class="subtitle"><?php echo $item['sub_title']; ?></h5>
                                    </div>
                                    <div>
                                        <h3 class="price">$<?php echo $item['title']; ?></h3>
                                    </div>
									<div class="desc"><?php echo $item['item_description']; ?></div>
                                    <div class="pricing-btn mt-30">
                                        <a href="<?php echo $item['button_url']; ?>" class="btn btn-primary"><?php echo $item['button_txt']; ?></a>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div>
					<?php }
					if ( $settings['list_2'] ) {
					?>
                    <div class="tab-pane fade  text-center" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
						<?php 
							foreach (  $settings['list_2'] as $item_2 ) {
								?>
                            <div class="col-lg-6 col-sm-6">
                                <div class="price-item xs-mt-30">
                                    <div class="shape">
                                        <img src="<?php echo $item_2['image_2']['url']?>" alt="">
                                    </div>
                                    <div>
                                        <h5 class="subtitle"><?php echo $item_2['sub_title_2']; ?></h5>
                                    </div>
                                    <div>
                                        <h3 class="price">$<?php echo $item_2['title_2']; ?></h3>
                                    </div>
									<?php echo $item_2['item_description_2']; ?>
                                    <div class="pricing-btn mt-30">
                                        <a href="<?php echo $item_2['button_url_2']; ?>" class="btn btn-primary"><?php echo $item_2['button_txt_2']; ?></a>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div>
					<?php } ?>
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
