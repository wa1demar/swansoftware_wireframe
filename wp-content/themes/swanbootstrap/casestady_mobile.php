<?php
/**
 * Template Name: Case Study Mobile
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 01.11.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header()?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background') != "" ? get_field('background') : getDefaultBG(); ?>
    <div id='sectionFirst' style="background: url('<?= $bg ?>') center top repeat-x;">
        <?php addSocials($bg) ?>

        <div class='row dark-background'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="logo" src="<?php bloginfo('template_directory') ?>/assets/pics/just1word.png">
                        <h1>Free Bible App for iPhone</h1>
                        <article>
                            Just1Word's Bible app now has 1.5 million downloads. Its Catolic Bible is #4 and its NIV
                            translation is the #1 online version of the most popular Bible translation
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer() ?>