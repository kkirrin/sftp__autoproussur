<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_action('after_setup_theme', 'add_menu');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');


show_admin_bar(false);

function theme_add_scripts()
{


    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Подключаем файл main.css
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    

    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);

    // Подключаем js файл baguettebox.js
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js', array(), null, true);

    // Подключаем js файл wow.js
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array(), null, true);

    // Подключаем основной main.js файл
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
    



    function my_scripts() {
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
    }


    add_action( 'wp_enqueue_scripts', 'my_scripts' );

   
    
}

    add_filter( 'redirect_canonical', 'my_redirect_canonical_filter', 10, 2 );

    /**
     * Function for <code>redirect_canonical</code> filter-hook.
     * 
     * @param string $redirect_url  The redirect URL.
     * @param string $requested_url The requested URL.
     *
     * @return string
     */
    function my_redirect_canonical_filter( $redirect_url, $requested_url ){

        if (str_ends_with($requested_url,"=")) {
        return false;
        }
        return $redirect_url;
    }


    // Делает редирект disable
    function page_disable_redirect_canonical($redirect_url) {
        if(is_page())
            $redirect_url = false;

        return $redirect_url;
    }

    remove_action('template_redirect', 'redirect_canonical');



    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');    

    function add_menu() {
        // register_nav_menu('top-left', 'левое меню шапки');
        // register_nav_menu('top-right', 'правое меню шапки');
        // register_nav_menu('menu-catalog', 'меню-каталога');
    }

?>