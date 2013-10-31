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
<?php $args = array(
    'category__in' => $company,
    'meta_key' => 'number',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'posts_per_page' => '100',
); ?>
<?php $the_query = new WP_Query( $args );?>
<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class='col-xs-2 text-center'>
        <img src="<?=get_field("photo")?>" class="img-circle">
        <span><?=get_the_title()?></span>
        <br/>
        <?=get_field('position')?>
    </div>
<?php endwhile; endif ?>