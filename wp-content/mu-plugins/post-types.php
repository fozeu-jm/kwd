<?php

function theme_post_types() {
    register_post_type('services', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'Services'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Ajouter un Service',
            'edit_item' => 'Modifier un Service',
            'all_items' => 'Tous les Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-tickets',
    ));
    
    register_post_type('projets', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'Projets'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Projets',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier un projet',
            'all_items' => 'Tous les projets',
            'singular_name' => 'Projet'
        ),
        'menu_icon' => 'dashicons-video-alt',
    ));
    
    register_post_type('team', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'Equipe'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => "L'Équipe",
            'add_new_item' => 'Ajouter un membre',
            'edit_item' => 'Modifier un membre',
            'all_items' => 'Tous les membres',
            'singular_name' => 'Équipe'
        ),
        'menu_icon' => 'dashicons-groups',
    ));
    
    register_post_type('testimonial', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'Equipe'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => "Témoignages",
            'add_new_item' => 'Ajouter un temoignage',
            'edit_item' => 'Modifier temoignage',
            'all_items' => 'Tous les temoignage',
            'singular_name' => 'Témoignage'
        ),
        'menu_icon' => 'dashicons-format-quote',
    ));
    
    register_post_type('package', array(
        'rewrite' => array('slug' => 'package'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => "Packages",
            'add_new_item' => 'Ajouter un package',
            'edit_item' => 'Modifier package',
            'all_items' => 'Tous les package',
            'singular_name' => 'Package'
        ),
        'menu_icon' => 'dashicons-archive',
    ));
    
    register_post_type('carousel', array(
        'rewrite' => array('slug' => 'carousel'),
        'public' => true,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => "Diaporama",
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier Diapositive',
            'all_items' => 'Toutes les diapositives',
            'singular_name' => 'Diapositive'
        ),
        'menu_icon' => 'dashicons-slides',
    ));
}

add_action('init', 'theme_post_types');
