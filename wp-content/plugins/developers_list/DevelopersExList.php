<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 28.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */

class DevelopersExList extends WP_Widget {

    function DevelopersExList() {
        $widget_ops = array(
            'classname' => 'developers_ex_list', // Класс который будет присваиваться виджету
            'description' => __( 'List of developers' ) // Описание виджета в админпанели
        );
        // ID виджета и его название
        $this->WP_Widget( 'developers_ex_list', __( 'Developers List' ), $widget_ops );
        $this->alt_option_name = 'developers_ex_list';

        /* Также для виджета используем кэширование.
        В моем примере это не так необходимо, но если у вас происходят
        какие-то вычисления в нем или сложные запросы в БД,
        то вам лучше использовать кэширование*/
        add_action( 'save_post', array(&$this, 'flush_widget_cache' ) );
        add_action( 'deleted_post', array(&$this, 'flush_widget_cache' ) );
        add_action( 'switch_theme', array(&$this, 'flush_widget_cache' ) );
    }

}