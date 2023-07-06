<?php

    function customtheme_theme_support() {
        add_theme_support('title-tag');
    }

    add_action('after_theme_setup', 'customtheme_theme_support');

    function customtheme_menus() {
        $locations = array(
            'primary'=>'Primary Desktop Navigation',
            'footer'=>'Footer Sitemap'
        );

        register_nav_menus($locations);
    }

    add_action('init', 'customtheme_menus');

    function customtheme_enqueue_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('customtheme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
        wp_enqueue_style('customtheme-google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Nunito+Sans:wght@400;700;900&family=Work+Sans:wght@500&display=swap', false);
        wp_enqueue_style('customtheme-google-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', false);
    }

    add_action('wp_enqueue_scripts', 'customtheme_enqueue_styles');

    function customtheme_enqueue_scripts() {
        wp_enqueue_script('customtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('customtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
        wp_enqueue_script('customtheme-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'customtheme_enqueue_scripts');

    function customtheme_speakers_card() {
        if( function_exists('acf_register_block') ) {
            acf_register_block(array(
                'name'				=> 'speakers-card',
                'title'				=> __('Speakers Card'),
                'description'		=> __('A custom card for speakers'),
                'render_template'	=> 'template-parts/blocks/speakers-card.php',
                'category'			=> 'layout',
                'icon'				=> 'excerpt-view',
                'keywords'			=> array( 'cards' ),
            ));
        }
    }
    
    add_action('acf/init', 'customtheme_speakers_card');

    add_action('wp_enqueue_scripts', 'customtheme_enqueue_scripts');

    function customtheme_events_card() {
        if( function_exists('acf_register_block') ) {
            acf_register_block(array(
                'name'				=> 'events-card',
                'title'				=> __('Events Card'),
                'description'		=> __('A custom card for events'),
                'render_template'	=> 'template-parts/blocks/events-card.php',
                'category'			=> 'layout',
                'icon'				=> 'excerpt-view',
                'keywords'			=> array( 'cards' ),
            ));
        }
    }
    
    add_action('acf/init', 'customtheme_events_card');

?>