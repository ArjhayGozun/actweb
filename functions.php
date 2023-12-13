<?php
// register_nav_menus(
//     array(
//         'menu-1'=> esc_html('Primary', 'wd_finals2'),
//     )
//     );
function wd_finals3_widgets_init() {
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar','wd_finals3'),
            'id'   => esc_html__('Add sidebar wirdgets here.', 'wd_finals3'),
            'before_widgets' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' =>'h2 class="widget-title">',
            'after_title'  => '</h2>'
        )
        );
}
add_action('widgets_init', 'wd_finals3_widgets_init');

// css &java connection
function wd_finals3_scripts(){
    wp_enqueue_style( 'wd_finals3-style',get_stylesheet_uri(),array(), 3 );
}

add_action('wp_enqueue_scripts', 'wd_finals3_scripts');

?>
