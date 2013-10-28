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
    <div id="sliderFirst">
        <?php $bg_image = "../assets/pics/mobile.png" ?>
        <?php require "_social.php" ?>
        <div class="container">

            <div class="row">
                <div class="col-lg-12 topBanner">
                    <div class="row sliderPopups">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="getStartedButton">
                                <a href="#">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h1>Make your business better with us</h1>

                            <div class="row topBannerLinks">
                                <div class="box col-sm-3">
                                    <div class="round_image">
                                        <img
                                            src="<?php bloginfo('template_directory') ?>/assets/img/service1_115x100.png">
                                    </div>

                                    <p>Mobile Development</p>
                                </div>
                                <div class="box col-sm-3">
                                    <div class="round_image">
                                        <img
                                            src="<?php bloginfo('template_directory') ?>/assets/img/service2_115x100.png">
                                    </div>

                                    <p>Staff Augmentation</p>
                                </div>
                                <div class="box col-sm-3">
                                    <div class="round_image">
                                        <img
                                            src="<?php bloginfo('template_directory') ?>/assets/img/service3_115x100.png">
                                    </div>

                                    <p>Custom Application Development</p>
                                </div>
                                <div class="box col-sm-3">
                                    <div class="round_image">
                                        <img
                                            src="<?php bloginfo('template_directory') ?>/assets/img/service4_115x100.png">
                                    </div>

                                    <p>Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--  ================================ Second Section ================================== -->

<?php require('_customers_slider.php'); ?>
    <!--  ================================ Third Section ================================== -->
    <div id="sliderThird">

<!--        // carousel-->

        <div id="carousel5" class="carousel5 slide">
            <div class="carousel-inner">
                <div class="item active">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/team.png"/>
                </div>
                <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/team.png"/>
                </div>
                <div class="item">

                    <img src="<?php bloginfo('template_directory') ?>/assets/img/team.png"/>
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
                                        <h3><?php the_title() ?></h3>
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
                            <a href="">View All +</a>
                        </span>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/clients_0.png"/>
                    </section>
                    <section>
                        <span class="title">
                            <h1 class="text-center">Area of Expertise</h1>
                            <a href="<?= get_permalink(51, false) ?>">View All +</a>

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
                    <a href="#" class="blue_btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    </div>

<?php get_footer() ?>