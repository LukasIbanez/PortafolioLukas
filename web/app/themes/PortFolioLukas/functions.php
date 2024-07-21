<?php 

function register_my_menu() {
    register_nav_menu('navegation', 'Menú de navegación');
}
add_action('init', 'register_my_menu');

function mis_widgets() {
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
add_action('widgets_init', 'mis_widgets');

function carga_estilos_theme() {
    wp_enqueue_style( 'estilos', get_template_directory_uri() . '/css/style.css', array(), '2.9.4', 'all' );
}
add_action('wp_enqueue_scripts', 'carga_estilos_theme');

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
        get_theme_file_uri('js/script.js'),
        array('jquery', 'bootstrap'),
        '1.9.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'cyb_theme_scripts');

add_theme_support('post-thumbnails');
?>
