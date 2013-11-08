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

<form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <input type="hidden" value="post" name="post_type" id="post_type"/>
    <input type="hidden" value="News" name="post_cathegory" id="post_cathegory"/>

            <input type='input' required="required" class="form-control " name='s' id="serch-form"
                   placeholder='What are you searching for?' value="<?php the_search_query(); ?>">




            <button type="submit" class='submit'
                    value="<?= esc_attr__('Search') ?>">
                <img src="<?php bloginfo('template_directory') ?>/assets/img/search.png"/>
            </button>


</form>