<?php
/**
 * Template Name: index
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 16.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>

<?php get_header() ?>
<?php if (is_category("Clients")): ?>

   <?php require("_testimonials.php") ?>

<?php else: ?>
    <?php require("_news.php"); ?>
<?php endif ?>
<?php get_footer() ?>