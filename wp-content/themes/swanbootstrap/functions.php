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
