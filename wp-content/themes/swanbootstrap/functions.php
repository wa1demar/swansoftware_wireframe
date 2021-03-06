<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 16.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'top_main_menu'     => __('Header Main Menu'),
            'bottom_main_menu'  => __('Footer Main Menu'),
        )
    );

}

add_action('init', 'register_my_menus');


function getArgsForMainMenu() {
    return array(
        'theme_location'    => 'top_main_menu',
        'container'         => false,
        'menu_class'        => 'mainMenu horizontal',
        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
    );
}

function home_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

function addSocials($bgImage = "/pics/mobile.png") {
    $bg_image = $bgImage;
    require("_social.php");
}

function addImages($c) {
    $company = $c;
    require("_company_people.php");
}

function the_my_excerpt($post, $count = 25) {
    if(empty($post)) {
        the_content();
        return false;
    }


    $content = trim(strip_tags($post->post_content));
    $content = explode(' ', $content);
    $content = array_slice($content, 0, $count);
    $content = implode(' ', $content);

    echo $content."...";
    return true;

}

function getCategory($categoryName) {
    $cName = $categoryName;
    $id = get_cat_ID($cName);
    return get_category_link($id);
}

function getDefaultBG() {
    return get_bloginfo('template_directory') . "/assets/pics/technology.png";
}

function wds_get_ID_by_page_name($page_name)
{
    global $wpdb;
    $page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name ='".$page_name."'");
    return $page_name_id;
}

