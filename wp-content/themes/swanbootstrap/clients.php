<?php
/**
 *
 * Template Name: Clients List Template
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 21.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header()?>
<div class="tab1">
    <div id='sliderFirst'
         style="background:  url('<?php bloginfo('template_directory') ?>/assets/img/default_bg.png') center top repeat;">
        <?php $bg_image = get_template_directory_uri() . '/assets/img/default_bg.png' ?>
        <?php require "_social.php" ?>
        <div class='row darck-background'>
            <div class="container text-center">
                <div class="tab-content">
                    <?php $postCount = 1;

                    $args = array(
                        'category__in' => get_cat_ID("Clients"),
                        'order' => 'ASC',
                        'posts_per_page' => 150
                    );
                    $the_query = new WP_Query($args);

                    while ($the_query->have_posts()) :
                        $the_query->the_post(); ?>
                        <div class="tab-pane <?php if ($postCount == 1) echo("active") ?>"
                             id="<?php the_field('label') ?>">
                            <?php if (get_the_content() != ""): ?>
                                <h1 class='title'>Testimonials</h1>
                            <?php endif; ?>

                            <div class='col-xs-4 text-center'>
                                <img src="<?php the_field('logo') ?>">

                            </div>
                            <div class='col-xs-8'>
                                <div class='col-xs-12 text-left'>
                                    <div class='content'>
                                        <?php the_content() ?>
                                    </div>
                                </div>
                                <div id='link' class='col-xs-6 text-left'>
                                    <?php if (get_field('links') != ""): ?>
                                        <h1>Link</h1>

                                        <?php the_field('links') ?>
                                    <?php endif ?>
                                </div>
                                <div id='used-services' class='col-xs-6 text-left'>
                                    <?php

                                    ?>
                                    <?php $post_categories = wp_get_post_categories($post->ID, $args); ?>
                                    <?php if (count($post_categories) > 0): ?>
                                        <?php $serv = array(
                                            "Mobile Application Development",
                                            "Staff Augmentation",
                                            "Custom Application Development",
                                            "Design"
                                        );?>
                                        <h1>Used services</h1>
                                        <?php foreach ($post_categories as $c): ?>
                                            <?php if (in_array(get_category($c)->name, $serv)): ?>
                                                <li>
                                                    <a href="<?php echo esc_url(get_permalink(get_page_by_title(get_category($c)->name))); ?>"><?= get_category($c)->name ?></a>
                                                </li>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
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
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
        $('#myTab a:first').tab('show');
        $('#myTab li a ').click(
            function () {
                window.location = "#sliderFirst";
            });
    })
</script>
<?php get_footer() ?>