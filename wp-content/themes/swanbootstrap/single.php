<?php
/**
 *
 * Created by PhpStorm.
 * @author: viktor
 * @date: 18.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) :
the_post(); ?>
<?php $default_img = get_bloginfo('template_directory') . '/assets/img/blog-1.png' ?>
<?php $bg = get_bloginfo('template_directory') . '/assets/pics/technology.png' ?>
<div id='sliderFirst' style="background: url('<?= $bg ?>') center top;">
    <?php addSocials($bg) ?>


    <div class='dark-background'>

        <div class='container'>
            <div class="row">

                <div class='col-sm-8 img-background '
                     style="
                         background: url('<?php echo get_field('image') != "" ? get_field('image') : $default_img ?>') center no-repeat;
                         background-size: cover
                         ">
                    <div class='col-xs-4 round-sign text-center'>
                        <?= get_the_date('M') ?>
                        <h1 class='roud'><?= get_the_date('d') ?></h1>
                        <?= get_the_date('Y') ?>
                    </div>
                    <div class="shadow">
                    </div>
                    <div class='white-footer row'>


                        <div class='col-xs-3'>

                        </div>
                        <div class='col-xs-9'>
                            <b><?php the_title() ?></b><br/>
                            <?php the_my_excerpt($post) ?>
                            <br/>
                            <a href="<?php the_permalink() ?>">View all +</a>

                        </div>
                    </div>
                </div>
                <div class='col-sm-4 form'>
                    <h1 class='title'>Blog & News</h1>

                    <div class='inputs row'>
                        <div class="col-xs-6 col-md-12 news">
                            <b>Join our Newsletter</b>
                            <br/>

                            <form action="http://feedburner.google.com/fb/a/mailverify"
                                  method="post" target="popupwindow"
                                  onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=swansowttest', 'popupwindow', 'scrollbars=yes,width=550,height=520');
                                  return true">
                                <div class="col-xs-9 input1">
                                    <input type='text' class="form-control " name='email'
                                           placeholder='Enter your Email address'>
                                    <input type="hidden" value="swansowttest" name="uri"/><input
                                        type="hidden"
                                        name="loc"
                                        value="en_US"/>
                                </div>
                                <div class="col-xs-3 go">
                                    <!--                                        <button type="button" class="form-control input_submit" name='submit'>Go-->
                                    <!--                                        </button>-->
                                    <input type="SUBMIT" class="form-control input_submit" value="Go">
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-6 col-md-12 search">
                            <form>
                                <b>Search</b>

                                <div class="col-xs-12">

                                    <?php get_search_form() ?>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id='sectionSecond'>
    <div class='container'>
        <div class='row'>
            <div class="col-sm-8 ">
                <div class="row">
                    <div class="col-lg-12 post_title">
                        <h1><?php the_title()?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-right">


                        <ul class="horizontal top-social-icons  ">


                            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/fb.png"/></a>
                            </li>
                            <li><a href="#"><img
                                        src="<?php bloginfo('template_directory') ?>/assets/img/tw.png"/></a>
                            </li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/gp.png"/></a>
                            </li>
                            <li><a href="#"><img
                                        src="<?php bloginfo('template_directory') ?>/assets/img/li.png"/></a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-xs-12 text-left text-content">
                    <!--        --><?php //if (have_posts()) : while (have_posts()) : ?>
                    <?php the_content(); ?>
                    <!--        --><?php //endwhile; endif; ?>

                    <div class=content-footer>
                        <div class=' row score-icon'>
                            <div class=' col-sm-6 text-left rating-row'>
                                <?php if (function_exists('the_ratings')) {
                                    the_ratings();
                                } ?>
                            </div>
                            <div class=' col-sm-6 text-right'>
                                <ul class="horizontal social-icons ">


                                    <li><a href="#"><img
                                                src="<?php bloginfo('template_directory') ?>/assets/img/fb.png"/></a>
                                    </li>
                                    <li><a href="#"><img
                                                src="<?php bloginfo('template_directory') ?>/assets/img/tw.png"/></a>
                                    </li>
                                    <li><a href="#"><img
                                                src="<?php bloginfo('template_directory') ?>/assets/img/gp.png"/></a>
                                    </li>
                                    <li><a href="#"><img
                                                src="<?php bloginfo('template_directory') ?>/assets/img/li.png"/></a>
                                    </li>
                                </ul>

                            </div>

                            <ul class="horizontal tags ">
                                <li><span>Tags:</span>
                                </li>
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) {
                                        echo "<li><a href='" . get_tag_link($tag->term_id) . "'>" . $tag->name . "</a></li>";
                                    }
                                }
                                ?>

                            </ul>


                        </div>
                    </div>
                </div>
                <div class="related-articles">
                    <div class='row '>

                        <div class="col-xs-12 ">
                            <h2 class="text-center">Related articles</h2>
                        </div>
                        <?php

                        $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID)));
                        if ($related) foreach ($related as $post) {
                            setup_postdata($post); ?>
                            <div class="col-xs-4  titles">
                                <img src="<?= get_field('image') != "" ? get_field('image') : $default_img ?>">

                                <p><a href="<?php the_permalink()?>"><?php the_title() ?></a></p>

                                <div class=text>
                                    <?php the_my_excerpt($post) ?>

                                </div>

                            </div>
                        <?php
                        }
                        wp_reset_postdata(); ?>
                    </div>
                    <div class='row '>
                        <div class="col-xs-12 bottom_tag">
                            <h2 class="text-center">Browser by Tag</h2>
                            <ul>
                                <?php $tags = get_tags(array('number' => 15)); ?>
                                <?php foreach ($tags as $tag): ?>
                                    <li><a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name ?></a></li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12  text-center form-content">
                    <?php comments_template(); ?>

                </div>
                <div class="row next-sign">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/next-sign.png">
                    <a href="#">Back to blog</a>

                </div>
            </div>


            <div class="col-sm-4 tag-section">
                <p class='tags'>Browser by Tag</p>
                <ul>
                    <?php $tags = get_tags(array('number' => 15)); ?>
                    <?php foreach ($tags as $tag): ?>
                        <li><a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name ?></a></li>
                    <?php endforeach ?>

                </ul>

            </div>

        </div>
    </div>
    <?php endwhile; else: ?>
        <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
    <?php
    endif; ?>
    <?php get_footer() ?>
