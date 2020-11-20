<?php

function satner_setup(){
      add_theme_support('title-tag');
      //language include
      load_theme_textdomain('satlang',get_template_directory_uri().'/languages');

      //feature image
      add_theme_support('post-thumbnails');
      set_post_thumbnail_size(555,280,true);
      add_image_size('post-tb',555,280);

      //menu register
      register_nav_menus([
        'primary_menu' => __('Primary Menu','satlang'),
        'top_menu' => __('Top Menu','satlang')
      ]);

}
add_action('after_setup_theme','satner_setup');


function satner_script(){
  wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css');
  wp_enqueue_style('linericon',get_template_directory_uri().'/vendors/linericon/style.css');
  wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
  wp_enqueue_style('owl-carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css');
  wp_enqueue_style('magnific-popup',get_template_directory_uri().'/css/magnific-popup.css');
  wp_enqueue_style('nice-select',get_template_directory_uri().'/vendors/nice-select/css/nice-select.css');
  wp_enqueue_style('style-css',get_template_directory_uri().'/css/style.css');
  wp_enqueue_style('main-style',get_template_directory_uri().'/style.css');

 //js
  wp_enqueue_script('jquery');
  wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.js',[],'1.0',true);
  wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',[],'1.0',true);
  wp_enqueue_script('stellar',get_template_directory_uri().'/js/stellar.js',[],'1.0',true);
  wp_enqueue_script('magnific-popup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',[],'1.0',true);
  wp_enqueue_script('nice-select',get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js',[],'1.0',true);
  wp_enqueue_script('imagesloaded',get_template_directory_uri().'/vendors/isotope/imagesloaded.pkgd.min.js',[],'1.0',true);
  wp_enqueue_script('isotope-min',get_template_directory_uri().'/vendors/isotope/isotope-min.js',[],'1.0',true);
  wp_enqueue_script('owl-carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js',[],'1.0',true);
  wp_enqueue_script('ajaxchimp',get_template_directory_uri().'/js/jquery.ajaxchimp.min.js',[],'1.0',true);
  wp_enqueue_script('mail-script',get_template_directory_uri().'/js/mail-script.js',[],'1.0',true);
  wp_enqueue_script('gmaps-min',get_template_directory_uri().'/js/gmaps.min.js',[],'1.0',true);
  wp_enqueue_script('theme-js',get_template_directory_uri().'/js/theme.js',[],'1.0',true);
}
add_action('wp_enqueue_scripts','satner_script');

//Register widget


function satner_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'satlang' ),
        'id'            => 'right-sidebar',
        'description'   => __( 'right sidebar desc.', 'satlang' ),
        'before_widget' => '<aside id="%1$s" class="single_sidebar_widget %2$s">',
        'after_widget'  => '<div class="br"></div></aside>',
        'before_title'  => '<h3 class="widget_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Top Widget', 'satlang' ),
        'id'            => 'foo-wd',
        'description'   => __( '.......', 'satlang' ),
        'before_widget' => '<div id="%1$s" class="footer_social %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'satner_widgets_init' );
//register service type
function satner_services(){
 $ls =array(
        'name'                  => __( 'Services' , 'satlang' ),
        'singular_name'         => __( 'Service', 'satlang' ),
        'menu_name'             => __( 'Services', 'satlang' ),
        'name_admin_bar'        => __( 'Service','satlang' ),
        'add_new'               => __( 'Add New', 'satlang' ),
        'add_new_item'          => __( 'Add New Service', 'satlang' ),
        'new_item'              => __( 'New Service', 'satlang' ),
        'edit_item'             => __( 'Edit Service', 'satlang' ),
        'view_item'             => __( 'View Service', 'satlang' ),
        'all_items'             => __( 'All Service', 'satlang' ),
        'search_items'          => __( 'Search Service', 'satlang' ),
        'parent_item_colon'     => __( 'Parent Service:', 'satlang' ),
        'not_found'             => __( 'No Service found.', 'satlang' ),
        'not_found_in_trash'    => __( 'No Service found in Trash.', 'satlang' )

   );
  $args = [
    'labels'         => $ls,
    'public'         => true,
    'menu_position'  => 21,
    'menu_icon'      => 'dashicons-plugins-checked',
    'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
    'supports'       => ['title','editor','thumbnail']
  ];
  register_post_type('service',$args);

$ls2 =array(
       'name'                  => __( 'Projects' , 'satlang' ),
       'singular_name'         => __( 'Project', 'satlang' ),
       'menu_name'             => __( 'Projects', 'satlang' ),
       'name_admin_bar'        => __( 'Project','satlang' ),
       'add_new'               => __( 'Add New Project', 'satlang' ),
       'add_new_item'          => __( 'Add New Project', 'satlang' ),
       'new_item'              => __( 'New Project', 'satlang' ),
       'edit_item'             => __( 'Edit Project', 'satlang' ),
       'view_item'             => __( 'View Project', 'satlang' ),
       'all_items'             => __( 'All Project', 'satlang' ),
       'search_items'          => __( 'Search Project', 'satlang' ),
       'parent_item_colon'     => __( 'Parent Project:', 'satlang' ),
       'not_found'             => __( 'No Project found.', 'satlang' ),
       'not_found_in_trash'    => __( 'No Project found in Trash.', 'satlang' )

  );
 $args2 = [
   'labels'         => $ls2,
   'public'         => true,
   'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'project' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
   'supports'       => ['title','editor','thumbnail']
 ];
 register_post_type('project',$args);
}


add_action('init','satner_services');
//register project type
function satner_project(){

$ls2 =array(
       'name'                  => __( 'Projects' , 'satlang' ),
       'singular_name'         => __( 'Project', 'satlang' ),
       'menu_name'             => __( 'Projects', 'satlang' ),
       'name_admin_bar'        => __( 'Project','satlang' ),
       'add_new'               => __( 'Add New Project', 'satlang' ),
       'add_new_item'          => __( 'Add New Project', 'satlang' ),
       'new_item'              => __( 'New Project', 'satlang' ),
       'edit_item'             => __( 'Edit Project', 'satlang' ),
       'view_item'             => __( 'View Project', 'satlang' ),
       'all_items'             => __( 'All Project', 'satlang' ),
       'search_items'          => __( 'Search Project', 'satlang' ),
       'parent_item_colon'     => __( 'Parent Project:', 'satlang' ),
       'not_found'             => __( 'No Project found.', 'satlang' ),
       'not_found_in_trash'    => __( 'No Project found in Trash.', 'satlang' )

  );
 $args2 = [
   'labels'         => $ls2,
   'public'         => true,
   'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'project' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
   'supports'       => ['title','editor','thumbnail']
 ];
 register_post_type('project',$args2);
}

add_action('init','satner_project');

// taxonomy for project type
function satner_project_taxonomy(){
  $labels = array(
          'name'              => _x( 'Category', 'taxonomy general name', 'satlang' ),
          'singular_name'     => _x( 'Category', 'taxonomy singular name', 'satlang' ),
          'search_items'      => __( 'Search Category', 'satlang' ),
          'all_items'         => __( 'All Category', 'satlang' ),
          'parent_item'       => __( 'Parent Category', 'satlang' ),
          'parent_item_colon' => __( 'Parent Category:', 'satlang' ),
          'edit_item'         => __( 'Edit Category', 'satlang' ),
          'update_item'       => __( 'Update Category', 'satlang' ),
          'add_new_item'      => __( 'Add New Category', 'satlang' ),
          'new_item_name'     => __( 'New Category Name', 'satlang' ),
          'menu_name'         => __( 'Category', 'satlang' ),
      );

      $args = array(
          'hierarchical'      => true,
          'labels'            => $labels,
          'show_ui'           => true,
          'show_admin_column' => true,
          'query_var'         => true,
          'rewrite'           => array( 'slug' => 'pcategory' ),
      );

      register_taxonomy( 'pcategory', array( 'project' ), $args );

      unset( $args );
      unset( $labels );
      $labels = array(
              'name'              => _x( 'Tag', 'taxonomy general name', 'satlang' ),
              'singular_name'     => _x( 'Tag', 'taxonomy singular name', 'satlang' ),
              'search_items'      => __( 'Search Tag', 'satlang' ),
              'all_items'         => __( 'All Tag', 'satlang' ),
              'parent_item'       => __( 'Parent Tag', 'satlang' ),
              'parent_item_colon' => __( 'Parent Tag:', 'satlang' ),
              'edit_item'         => __( 'Edit Tag', 'satlang' ),
              'update_item'       => __( 'Update Tag', 'satlang' ),
              'add_new_item'      => __( 'Add New Tag', 'satlang' ),
              'new_item_name'     => __( 'New Tag Name', 'satlang' ),
              'menu_name'         => __( 'Tag', 'satlang' ),
          );

          $args = array(
              'hierarchical'      => true,
              'labels'            => $labels,
              'show_ui'           => true,
              'show_admin_column' => true,
              'query_var'         => true,
              'rewrite'           => array( 'slug' => 'ptag' ),
          );

          register_taxonomy( 'ptag', array( 'project' ), $args );

          unset( $args );
          unset( $labels );
}
add_action('init','satner_project_taxonomy');

//register service type
function satner_review(){
 $ls =array(
        'name'                  => __( 'Review' , 'satlang' ),
        'singular_name'         => __( 'review', 'satlang' ),
        'menu_name'             => __( 'reviews', 'satlang' ),
        'name_admin_bar'        => __( 'review','satlang' ),
        'add_new'               => __( 'Add New', 'satlang' ),
        'add_new_item'          => __( 'Add New review', 'satlang' ),
        'new_item'              => __( 'New review', 'satlang' ),
        'edit_item'             => __( 'Edit review', 'satlang' ),
        'view_item'             => __( 'View review', 'satlang' ),
        'all_items'             => __( 'All review', 'satlang' ),
        'search_items'          => __( 'Search review', 'satlang' ),
        'parent_item_colon'     => __( 'Parent review:', 'satlang' ),
        'not_found'             => __( 'No review found.', 'satlang' ),
        'not_found_in_trash'    => __( 'No review found in Trash.', 'satlang' )

   );
  $args = [
    'labels'         => $ls,
    'public'         => true,
    'menu_position'  => 40,
    'menu_icon'      => 'dashicons-plugins-checked',
    'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'review' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
    'supports'       => ['title','editor','thumbnail']
  ];
  register_post_type('review',$args);
  unset( $args );
  unset( $labels );

}


add_action('init','satner_review');


// require
require_once('cmb2/init.php');
require_once('cmb2/function.php');




 ?>
