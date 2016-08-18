<?php

add_action('init', 'create_post_type');

function create_post_type() {
  

//FEATURED JOB OPENINGS
  register_post_type('hernan', array(
      'labels' => array(
          'name' => __('Hernan'),
          'singular_name' => __('Hernan'),
          'menu_name' => __('Hernan Road Rebellion')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array('title', 'editor', 'revisions', 'thumbnail', 'trackbacks' ),
      'menu_position' => 4,
      'rewrite' => array(
          'slug' => 'hernan-road-rebellion'
      ),
      'has_archive' => true
    )
  );
  
  



//FEATURED JOB OPENINGS
  register_post_type('teenstories', array(
      'labels' => array(
          'name' => __('Teen Stories'),
          'singular_name' => __('Teen Stories'),
          'menu_name' => __('Teen Stories')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array('title', 'editor', 'revisions', 'thumbnail', 'trackbacks' ),
      'menu_position' => 4,
      'rewrite' => array(
          'slug' => 'teen-stories'
      ),
      'has_archive' => true,
	   'taxonomies' => array('category')
    ));
  
  
  
  
  
}

?>