<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}

function dire_bonjour(){
    echo '<p class="bonjour"> Bonjour !</p>';
}
add_action('init','dire_bonjour');


//Aficher le nom de l'auteur
function filter_function_name( $user_id, $post_id ) {
  // Do user manipulation here
  return $user_id;
}
add_filter( 'author_edit_pre', 'filter_function_name', 10, 2 );



//Afficher les statuts des posts

function show_views( $views ) {
//unset($views['all']);
//unset($views['publish']);
//unset($views['trash']);
return $views;
}
add_filter( 'the_content', 'show_views' );

