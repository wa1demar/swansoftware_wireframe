<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 30.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type='input' class="form-control" name='s'
           placeholder='What are you searching for?' value="<?php the_search_query();?>">
    <input type="hidden" value="post" name="post_type" id="post_type" />
    <input type="hidden" value="News" name="post_cathegory" id="post_cathegory" />
    <input type="image"  src="<?php bloginfo('template_directory') ?>/assets/img/gp.png"   value="<?=esc_attr__('Search')?>">
</form>