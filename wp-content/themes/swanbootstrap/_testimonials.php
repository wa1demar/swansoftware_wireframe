<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 21.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<div class="tab1">
    <div id='sliderFirst'
         style="background:  url('<?php bloginfo('template_directory') ?>/assets/img/default_bg.png') center top repeat;">
        <?php $bg_image = get_template_directory_uri() . '/assets/img/default_bg.png' ?>
        <?php require "_social.php" ?>
        <div class='row darck-background'>
            <div class="container text-center">
                <div class="tab-content">
                    <?php $postCount = 1;
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="tab-pane <?php if ($postCount == 1) echo("active") ?>"
                             id="<?php the_field('label') ?>">
                            <h1 class='title'>Testimonials</h1>

                            <div class='col-xs-4 text-center'>
                                <img src="<?php the_field('logo') ?>">

                            </div>
                            <div class='col-xs-8'>
                                <div class='col-xs-12 text-left'>
                                    <div class='content'>
                                        <?php the_content() ?>
                                    </div>
                                </div>
                                <div id = 'link' class='col-xs-6 text-left'>
                                    <h1>Link</h1>

                                    <?php the_field('links') ?>
                                </div>
                                <div id = 'used-services' class='col-xs-6 text-left'>
                                    <h1>Used services</h1>

                                    <?php the_field('services') ?>
                                </div>
                            </div>

                        </div>
                        <?php $postCount++ ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <div id='sliderSecond'>
        <div class="container">
            <div class='row'>
                <div class='col-sm-12 text-center'>
                    <ul class="nav nav-tabs" id="myTab">
                        <?php $postCount = 1;
                        while (have_posts()) : the_post(); ?>
                            <li class="<?php if ($postCount == 1) echo("active") ?>"><a
                                    href="#<?php the_field('label') ?>" data-toggle="tab"><img
                                        src="<?php the_field('logo') ?>"/></a></li>
                            <?php $postCount++ ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#myTab a:first').tab('show')
    })
</script>
