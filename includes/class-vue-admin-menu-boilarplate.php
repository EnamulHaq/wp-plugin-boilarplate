<?php

class VA_Boilerplate_Menu {
    public function __construct() {
        add_action( 'admin_menu', [$this, 'register_menu'] );
    }

    public function register_menu() {
        add_menu_page(
            __( 'WP VA Boilerplate', 'vue-admin-boilerplate' ),
            'WP VA Boilerplate',
            'manage_options',
            'wp-va-boilerplate',
            [$this, 'admin_page'],
            'dashicons-tickets',
            6
        );
    }

    public function admin_page() {
        echo '<div class="wrap">
                <div id="app"></div>
            </div>';
    }
}

new VA_Boilerplate_Menu();