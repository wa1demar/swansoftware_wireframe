<?php
/**
 * Template Name: Home Template
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 21.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>

<?php get_header() ?>
<?php //while (have_posts()) : the_post(); ?>
    <?php $bg = get_bloginfo('template_directory') . "/assets/img/b_bg.png" ?>
    <div id="sliderFirst" style="background:  url('<?= $bg ?>') center ;">
    <?php require('_home_page_section_first.php'); ?>
  </div>
    <!--  ================================ Second Section ================================== -->
    <?php require('_customers_slider.php'); ?>
    <!--  ================================ Third Section ================================== -->
    <div id="sliderThird">

        <!--        // carousel-->

        <div id="carousel5" class="carousel5 slide">
            <div class="carousel-inner">
                <div class="item active">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/1sm.jpg"/>
                </div>
                <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/2sm.jpg"/>
                </div>
                <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/team.png"/>
                </div>
               <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/4sm.jpg"/>
                </div>
               <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/5sm.jpg"/>
                </div>
               <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/6sm.jpg"/>
                </div>
            </div>
        </div>


        <!--        // end carousel-->
        <div class="news_line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text">
                        <?php $postslist = get_posts('numberposts=1&orderby=date&order=DESC&category_name=News'); ?>
                        <?php foreach ($postslist as $post) : setup_postdata($post); ?>
                            <p>
                                <?php the_excerpt("All +"); ?>
                            </p>
                        <?php endforeach ?>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 link">
                        <?php $postslist = get_posts('numberposts=3&orderby=date&order=DESC&category_name=News'); ?>
                        <ul class="">
                            <?php foreach ($postslist as $post) : setup_postdata($post); ?>
                                <li>
                                    <header>
                                        <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
                                    </header>
                                    <footer><?php the_time("m / d / Y") ?></footer>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- =============================================================-->
    <div id="sliderFourth">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="sec">
                        <span class="title">
                            <h1>Our Clients</h1>
                            <a href=" <?php echo getCategory('Client') ?>">View All +</a>
                        </span>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/clients_0.png"/>
                    </section>
                    <section>
                        <span class="title">
                            <h1 class="text-center">Area of Expertise</h1>
                            <a href=" <?php echo esc_url( get_permalink( get_page_by_title( 'Technologies' ) ) ); ?>">View All +</a>

                        </span>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/tech_0.png"/>
                    </section>

                </div>
            </div>
        </div>
    </div>


    <div id="sliderFifth">
        <div class="container sec">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Have a project we can help with?</h1>
                    <a href="<?=get_permalink('Get Started') ?>" class="blue_btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    </div>
<?php //endwhile; ?>

<?php get_footer() ?>

<script>
    $('.carousel5').carousel({
        interval: 40000
    })
</script>