<?php

##########
#   include wp-nav-wlaker
require_once('class-wp-bootstrap-navwalker.php');
##########


/*
*   Add Image post 
*/


add_theme_support( 'post-thumbnails' );

/*
*   CHANGE EXCERPT STYLE 
*/


function change_excerpt_word_number( $word_numb ){
    return 25 ; 
}

add_filter( 'excerpt_length' , 'change_excerpt_word_number' );

function change_excerpt_word_dots( $more ){
    return ' <a href="' . get_permalink() . '">  <i class="fa-solid fa-hand-point-right"></i>  more...</a>';

}


add_filter( 'excerpt_more' , 'change_excerpt_word_dots' );




######## get_template_directory_uri() ->> to get the path of the theme ###########
/* 
**  Function to add Custom style
**  wp_enqueue_style('name' , path)
**
*/


    function astro_style(){
        wp_enqueue_style('bootstrap-css' , get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome-css' , get_template_directory_uri().'/css/fontawesome.min.css');
        wp_enqueue_style('main-css' , get_template_directory_uri().'/css/main.css');


    };


/* 
**  Function to add Custom script
**  wp_enqueue_script('name' , path)
**
*/


function astro_script(){
    wp_deregister_script('jquery'); // Remove jquery from the head 
    wp_register_script('jquery' , includes_url('/js/jquery/jquery.js')  , array() , false , true);//add the jquery in the body 
    wp_enqueue_script('bootstrap-js' , get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false , true);
    wp_enqueue_script('main-js' , get_template_directory_uri().'/js/main.js',array(),false , true);
    wp_enqueue_script('fontawsome-main-js' , get_template_directory_uri().'/js/all.min.js');


};

/* 
**  ADD action to execute the functions  of styles and scripts  
**  add_action('wp_enqueue_scripts' , function name)
*/

add_action('wp_enqueue_scripts' , 'astro_style');
add_action('wp_enqueue_scripts' , 'astro_script');
/*              /\
                ||
      For Adding Scripts and styles 
*/


/* 
* Add Custom Menu Option 
*/

    function astro_custom_menu(){
        register_nav_menus(array(
            "main-astro-menu" => "Navigation menu",
            "footer-astro-menu" => "Footer menu",
        ));
    };

       
    add_action('init' , 'astro_custom_menu');
    /*              /\
                    ||
            ON Initialization
    */



/*
*   ADD NAV MENU
*/

function astro_menu(){
    wp_nav_menu(array(
        "theme_location"    => "main-astro-menu",
        "menu_class"        => "navbar-nav text-center",
        "container"         => false ,
        "walker"            =>new WP_Bootstrap_Navwalker()
    ));
} 




