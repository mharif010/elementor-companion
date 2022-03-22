<?php
namespace GalaxyproCompanion;
use GalaxyproCompanion\Widgets\All_services;
use GalaxyproCompanion\Widgets\All_projects;
use GalaxyproCompanion\Widgets\Section_heading;
use GalaxyproCompanion\Widgets\Galaxypro_Posts;
use GalaxyproCompanion\Widgets\Galaxypro_Slider;
use GalaxyproCompanion\Widgets\Pricing_plan;
use GalaxyproCompanion\Widgets\Service_Category;
use GalaxyproCompanion\Widgets\Project_Category;
use GalaxyproCompanion\Widgets\Blog_Meta;
use GalaxyproCompanion\Widgets\Progress_Bar;
use GalaxyproCompanion\Widgets\About_Image;

/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class GalaxyproPlugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		wp_register_script( 'galaxypro-experts', plugins_url( '/assets/js/slider.js', __FILE__ ), [ 'jquery' ], false, true );
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/all-services.php' );
		require_once( __DIR__ . '/widgets/all-projects.php' );
		require_once( __DIR__ . '/widgets/section-heading.php' );
		require_once( __DIR__ . '/widgets/blog-posts.php' );
		require_once( __DIR__ . '/widgets/hero-slider.php' );
		require_once( __DIR__ . '/widgets/pricing-plan.php' );
		require_once( __DIR__ . '/widgets/service-category.php' );
		require_once( __DIR__ . '/widgets/project-category.php' );
		require_once( __DIR__ . '/widgets/blog-meta.php' );
		require_once( __DIR__ . '/widgets/progressbar.php' );
		require_once( __DIR__ . '/widgets/about-img.php' );
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new All_services() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new All_projects() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Section_heading() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Galaxypro_Posts() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Galaxypro_Slider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Pricing_plan() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Service_Category() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Project_Category() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Blog_Meta() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Progress_Bar() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new About_Image() );
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}
}

// Instantiate Plugin Class
GalaxyproPlugin::instance();
