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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $default_img = get_bloginfo('template_directory') . '/assets/img/blog-1.png' ?>
<?php $bg = get_bloginfo('template_directory') . '/assets/pics/technology.png' ?>
<div id='sliderFirst' style="background: url('<?= $bg ?>') center top;">
    <?php addSocials($bg) ?>

    <div class='row  darck-background'>
        <div class='container'>
            <div class='col-sm-8 img-background '
                 style="background: url('<?php echo get_field('image') != "" ? get_field('image') : $default_img ?>') center no-repeat; background-size: 97% 100%"
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

                </div>
            </div>

        </div>
        <div class='col-sm-4'>
            <h1 class='title'>Blog & News</h1>

            <form>
                <div class='inputs row'>
                    <b>Join our Newsletter</b>
                    <br/>

                    <div class="col-xs-9 input1">
                        <form>
                        <input type='text' class="form-control " name='input1'
                               placeholder='Enter your Email address'>
                            </form>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="form-control input_submit" name='submit1'>Go</button>
                    </div>
                    <b>Search</b>

                    <div class="col-xs-12">
                        <?php get_search_form()?>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
<div id='sectionSecond'>
<div class='container'>
<div class='row'>
<div class="col-xs-8 ">
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
                <div class=' col-xs-6 text-left rating-row'>

                    <ul class="horizontal rating  ">

                        <li><a href="#"><img
                                    src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                        </li>
                        <li><a href="#"><img
                                    src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                        </li>
                        <li><a href="#"><img
                                    src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                        </li>
                        <li><a href="#"><img
                                    src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                        </li>
                        <li><a href="#"><img
                                    src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                        </li>
                    </ul>
                </div>
                <div class=' col-xs-6 text-right'>
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
                        foreach($posttags as $tag) {
                            echo "<li><a href='" . get_tag_link($tag->term_id) . "'>" . $tag->name . "</a></li>";
                        }
                    }
                    ?>

                </ul>


            </div>
        </div>
    </div>
    <div class='row related-articles'>
        <div class="col-xs-12  text-center">
            <h2>Related articles</h2>
        </div>
        <?php

        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $post ) {
            setup_postdata($post); ?>
            <div class="col-xs-4  text-left">
                <img src="<?= get_field('image') != "" ? get_field('image') : $default_img ?>">

                <p><?php the_title() ?></p>

                <div class=text>
                    <?php the_my_excerpt($post)?>

                </div>

            </div>
        <?php }
        wp_reset_postdata(); ?>
    </div>
    <div class="col-xs-12  text-center form-content">
        <h2>Don't forget to leave a comment</h2>

        <form>
            <div class="row">
                <div class="col-xs-4 label">
                    Name
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
                </div>
                <div class="col-xs-8"><input type="text" placeholder="  John Doe...">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 label">
                    Email
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
                </div>
                <div class="col-xs-8">
                    <input type="text" type='text' placeholder="  johndoe@jahoo.com">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 label">
                    Comment
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/comment.png">
                </div>
                <div class="col-xs-8">
                    <textarea placeholder="  Type your messahe here..."></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 ">
                </div>
                <div class="col-xs-8 tex-left">
                    <a href="#" class="blue_btn small">Send</a></div>
            </div>

        </form>


    </div>
    <div class="row next-sign">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/next-sign.png">
        <a href="#">Back to blog</a>

    </div>
</div>


<div class="col-xs-4">
    <p class='tags'>Browser by Tag</p>
    <ul>
        <?php $tags = get_tags(array('number' => 15)); ?>
        <?php foreach ( $tags as $tag ): ?>
            <li><a href="<?=get_tag_link( $tag->term_id );?>"><?=$tag->name?></a></li>
        <?php endforeach?>

    </ul>

</div>

</div>
</div>
<?php endwhile; else: ?>
    <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
<?php endif; ?>
<?php get_footer() ?>
