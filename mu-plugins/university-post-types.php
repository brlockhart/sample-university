<?php 
    function university_post_types() {

    //Campus post type

    register_post_type('Campus', array(
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-location-alt',
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Campus',
            //'add_new_item' => 'Add New Campus',
            'add_new' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus',
        ),
    ));

        //Event post type
        
        register_post_type('event', array(
            'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
            'has_archive' => true,
            'public' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Events',
                //'add_new_item' => 'Add New Event',
                'add_new' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event',
                ),
            ));

        //Program post type
        register_post_type('program', array(
            'supports' => array('title', 'editor', 'custom-fields'),
            'rewrite' => array('slug' => 'programs'),
            'has_archive' => true,
            'public' => true,
            'menu_icon' => 'dashicons-awards',
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new' => 'Add New Program',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singular_name' => 'Program',
            ),
        ));
        //Professor post type
        register_post_type('professor', array(
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
            'public' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Professors',
                'add_new' => 'Add New Professor',
                'edit_item' => 'Edit Professor',
                'all_items' => 'All Professors',
                'singular_name' => 'Professor',
            )
        ));
    }
add_action('init', 'university_post_types');