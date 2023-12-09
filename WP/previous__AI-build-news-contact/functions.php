<?php
    function add_custom_script() {
        wp_register_script('custom_script', get_template_directory_uri() . '/main.min.js');
        wp_enqueue_script('custom_script');
    }
    add_action( 'wp_enqueue_scripts', 'add_custom_script' );

    function no_more_jquery(){
        wp_deregister_script('jquery');
    }
    add_action('wp_enqueue_scripts', 'no_more_jquery');

    function disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    }
    add_action( 'init', 'disable_emojis' );

    function disable_emojis_tinymce($plugins) {
        if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
        } else {
        return array();
        }
    }

    function mvwpform_autop_filter() {
        if (class_exists('MW_WP_Form_Admin')) {
            $mw_wp_form_admin = new MW_WP_Form_Admin();
            $forms = $mw_wp_form_admin->get_forms();
            foreach ($forms as $form) {
            add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
            }
        }
    }
    mvwpform_autop_filter();
    
    //change number of posts per page
    function my_cptui_change_posts_per_page( $query ) {
        if ( is_admin() || ! $query->is_main_query() ) {
        return;
        }

        if ( is_post_type_archive( 'news' ) ) {
        $query->set( 'posts_per_page', 2 );
        }
    }
    add_filter( 'pre_get_posts', 'my_cptui_change_posts_per_page' );
?>