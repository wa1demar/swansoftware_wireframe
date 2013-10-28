<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 25.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */ ?>
<?php query_posts("cat=$company&posts_per_page=100&orderby=number"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class='col-xs-2 text-center'>
        <img src="<?=get_field("photo")?>" class="img-circle">
        <span><?=get_the_title()?></span>
        <br/>
        <?=get_field('position')?>
    </div>
<?php endwhile; endif ?>