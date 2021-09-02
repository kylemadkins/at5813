<?php

add_action( 'init', 'init_projects' );

function init_projects() {
    register_post_type( 'projects', array(
        'labels' => array(
            'name' => __( 'Projects' ),
            'singular_name' => __( 'Project' ),
            'add_new_item' => __( 'Add New Project' ),
            'all_items' => __( 'All Projects' ),
            'view_item' => __( 'View Project' ),
            'edit_item' => __( 'Edit Project' ),
            'update_item' => __( 'Update Project' ),
            'search_items' => __( 'Search Projects' )
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor' )
    ) );
}
