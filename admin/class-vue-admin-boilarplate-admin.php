<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://enamulhaq.me
 * @since      1.0.0
 *
 * @package    Vue_Admin_Boilarplate
 * @subpackage Vue_Admin_Boilarplate/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Vue_Admin_Boilarplate
 * @subpackage Vue_Admin_Boilarplate/admin
 * @author     Enamul <mdenamulhaq6263@gmail.com>
 */
class Vue_Admin_Boilarplate_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

        add_action('admin_enqueue_scripts', [$this, 'loadAssets']);
        add_filter('script_loader_tag', [$this, 'loadScriptAsModule'], 10, 3);

        add_action( 'admin_init', [$this, 'crunchify_remove_plugin_stylesheet'], 100 );

	}
    public function crunchify_remove_plugin_stylesheet() {
        if(isset($_GET['page']) && $_GET['page'] === 'wp-va-boilerplate') {
//            wp_deregister_style('wp-admin');
        }
    }
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vue_Admin_Boilarplate_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vue_Admin_Boilarplate_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/vue-admin-boilarplate-admin.css', array(), $this->version, 'all' );

	}

    public function loadScriptAsModule($tag, $handle, $src) {
        if ('wp-vue-core' !== $handle) {
            return $tag;
        }
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        return $tag;
    }

    public function loadAssets() {
        $pluginUrl = plugin_dir_url(__FILE__);
        wp_enqueue_script('wp-vue-core', 'http://localhost:5173/src/main.js', [], time(), true);
        wp_localize_script('wp-vue-core', 'wpvue', [
            'url' => $pluginUrl,
            'nonce' => wp_create_nonce( 'wp_rest' )
        ]);
    }
	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vue_Admin_Boilarplate_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vue_Admin_Boilarplate_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */



		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/vue-admin-boilarplate-admin.js', array( 'jquery' ), $this->version, false );

	}

}
