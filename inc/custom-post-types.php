<?php
function elips_post_types() {
    register_post_type('exame', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt','comments','tags', 'thumbnail'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
          'name' => 'exames',
          'add_new_item' => 'Add New exame',
          'edit_item' => 'Edit exame',
          'all_items' => 'All exames',
          'singular_name' => 'exame'
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-clipboard'
      ));
    
      register_post_type('disciplina', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'public' => true,
        'labels' => array(
          'name' => 'disciplinas',
          'add_new_item' => 'Add New disciplina',
          'edit_item' => 'Edit disciplina',
          'all_items' => 'All disciplinas',
          'singular_name' => 'disciplina'
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-book'
      ));

      register_post_type('noticia', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt','comments','tags', 'thumbnail'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
          'name' => 'noticias',
          'add_new_item' => 'Add New noticia',
          'edit_item' => 'Edit noticia',
          'all_items' => 'All noticias',
          'singular_name' => 'noticia'
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-media-document'
      ));
}