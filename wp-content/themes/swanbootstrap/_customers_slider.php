<?php
/**
 *
 *
 * Created by JetBrains PhpStorm.
 * @author: Viktor
 * @date: 10/24/13
 *
 */
?>

<section id="sliderSecond" class="left" data-slide="prev">


<div class="container sec">

<div class="row sliderSecondInner ">
<div class="col-lg-3">
    <div class="row ">
        <ul class="secondSidebarMenu nav nav-tabs" id='mynewTab'>
            <li class="mobile active">
                <a href="#mobile" data-toggle="tab">Mobile Development</a></li>
            <li class="staff"><a href="#staff" data-toggle="tab">Staf
                    Augmentation</a></li>
            <li class="app"><a href="#app" data-toggle="tab">Custom
                    Application Development</a></li>
            <li class="design"><a href="#design" data-toggle="tab">Design</a>
            </li>
            <!--<li class="marketing"><a href="#">Internet Marketing</a></li>-->
        </ul>
    </div>
</div>

<div class="col-lg-9 tab-content">
<div class="tab-pane active" id="mobile">

<?php
$args = array(
    'category__in' => get_cat_ID("Mobile Development"),
    'posts_per_page' => '100',
);
$the_query = new WP_Query( $args );
?>

    <div id="carousel-example-1-1" class="carousel1 slide">


        <div class="carousel-inner">
            <?php $i = 0;?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="row phoneBG item <?php if ($i == 0) echo("active")?>">
                <div class="col-lg-7">
                    <article>
                        <header>
                            <hgroup>
                                <h1><?php the_title()?></h1>

                                <h2><?=get_field('description')?></h2>
                            </hgroup>
                            <article>
                                <?php the_content()?>
                            </article>
                            <blockquote>
                                <?=get_field('testimonials')?>

                                <h3><?=get_field('name')?></h3>
                            </blockquote>

                        </header>

                        <a href="<?=get_permalink() ?>" class="blue_btn">Case Study</a>

                    </article>

                </div>
            </div>
                <?php $i++; ?>
            <?php endwhile; endif; ?>

        </div>
    </div>
<!--     Controls -->
        <a class="left carousel-control" href="#carousel-example-1-1" data-slide="prev">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/left-arrow.png"
                         style="top: 50%; position: absolute; left: 2%">

        </a>
        <a class="right carousel-control" href="#carousel-example-1-1" data-slide="next">
            <img src="<?php bloginfo('template_directory') ?>/assets/img/right-arrow.png"
                 style="top: 50%; position: absolute; left: 2%">

        </a>
</div>
<div class="tab-pane " id="staff">

    <?php
    $args2 = array(
        'category__in' => get_cat_ID("Staff Augmentation"),
        'posts_per_page' => '100',
    );
    $the_query2 = new WP_Query( $args2 );
    ?>
    <div id="carousel2-generic" class="carousel2 slide">


        <div class="carousel-inner">
            <?php $i = 0;?>
            <?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
                <div class="row phoneBG item <?php if ($i == 0) echo("active")?>">
                    <div class="col-lg-7">
                        <article>
                            <header>
                                <hgroup>
                                    <h1><?php the_title()?></h1>

                                    <h2><?=get_field('description')?></h2>
                                </hgroup>
                                <article>
                                    <?php the_content()?>
                                </article>
                                <blockquote>
                                    <?=get_field('testimonials')?>

                                    <h3><?=get_field('name')?></h3>
                                </blockquote>

                            </header>

                            <a href="<?=get_permalink() ?>" class="blue_btn">Case Study</a>

                        </article>

                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; endif; ?>

        </div>
    </div>
    <!--     Controls -->
    <a class="left carousel-control" href="#carousel2-generic" data-slide="prev">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/left-arrow.png"
             style="top: 50%; position: absolute; left: 2%">

    </a>
    <a class="right carousel-control" href="#carousel2-generic" data-slide="next">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/right-arrow.png"
             style="top: 50%; position: absolute; left: 2%">

    </a>
</div>
<div class="tab-pane " id="app">
    <?php
    $args2 = array(
        'category__in' => get_cat_ID("Custom Application Development"),
        'posts_per_page' => '100',
    );
    $the_query2 = new WP_Query( $args2 );
    ?>

    <div id="carousel3" class="carousel3 slide">

        <div class="carousel-inner">
            <?php $i = 0;?>
            <?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
                <div class="row phoneBG item <?php if ($i == 0) echo("active")?>">
                    <div class="col-lg-7">
                        <article>
                            <header>
                                <hgroup>
                                    <h1><?php the_title()?></h1>

                                    <h2><?=get_field('description')?></h2>
                                </hgroup>
                                <article>
                                    <?php the_content()?>
                                </article>
                                <blockquote>
                                    <?=get_field('testimonials')?>

                                    <h3><?=get_field('name')?></h3>
                                </blockquote>

                            </header>

                            <a href="<?=get_permalink() ?>" class="blue_btn">Case Study</a>

                        </article>

                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; endif; ?>

        </div>
    </div>
    <!--     Controls -->
    <a class="left carousel-control" href="#carousel3" data-slide="prev">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/left-arrow.png"
             style="top: 50%; position: absolute; left: 2%">

    </a>
    <a class="right carousel-control" href="#carousel3" data-slide="next">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/right-arrow.png"
             style="top: 50%; position: absolute; left: 2%">

    </a>

</div>
<div class="tab-pane " id="design">
    <?php
    $args2 = array(
        'category__in' => get_cat_ID("Design"),
        'posts_per_page' => '100',
    );
    $the_query2 = new WP_Query( $args2 );
    ?>

    <div id="carousel4" class="carousel4 slide">

        <div class="carousel-inner">
            <?php $i = 0;?>
            <?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
                <div class="row phoneBG item <?php if ($i == 0) echo("active")?>">
                    <div class="col-lg-7">
                        <article>
                            <header>
                                <hgroup>
                                    <h1><?php the_title()?></h1>

                                    <h2><?=get_field('description')?></h2>
                                </hgroup>
                                <article>
                                    <?php the_content()?>
                                </article>
                                <blockquote>
                                    <?=get_field('testimonials')?>

                                    <h3><?=get_field('name')?></h3>
                                </blockquote>

                            </header>

                            <a href="<?=get_permalink() ?>" class="blue_btn">Case Study</a>

                        </article>

                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; endif; ?>

        </div>
    </div>
        <!--     Controls -->
        <a class="left carousel-control" href="#carousel4" data-slide="prev">
            <img src="<?php bloginfo('template_directory') ?>/assets/img/left-arrow.png"
                 style="top: 50%; position: absolute; left: 2%">

        </a>
        <a class="right carousel-control" href="#carousel4" data-slide="next">
            <img src="<?php bloginfo('template_directory') ?>/assets/img/right-arrow.png"
                 style="top: 50%; position: absolute; left: 2%">

        </a>
</div>
</div>
</div>


</section>
<script>
<!--    $('.carousel1').carousel({-->
<!--        interval: 5000-->
<!--    })-->
<!---->
<!--    $('.carousel2').carousel({-->
<!--        interval: 5000-->
<!--    })-->
<!---->
<!--    $('.carousel3').carousel({-->
<!--        interval: 5000-->
<!--    })-->
<!---->
<!--    $('.carousel4').carousel({-->
<!--        interval: 5000-->
<!--    })-->
<!---->
    $('.carousel5').carousel({
        interval: 5000
    })
</script>


<script>
    $(function () {
        $('#mynewTab a:first').tab('show')
    })
</script>