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
<?php if (is_category("testimonials")): ?>

   <?php require("_testimonials.php") ?>

<?php else: ?>
    News
<?php endif ?>
<?php get_footer() ?>