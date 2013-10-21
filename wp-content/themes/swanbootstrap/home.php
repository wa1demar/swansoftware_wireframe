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
 */?>
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
    <div id="sliderSecond" class="left" data-slide="prev">
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <img src="<?php bloginfo('template_directory') ?>/assets/img/left-arrow.png"
                 style="top: 50%; position: absolute; left: 2%">
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <img src="<?php bloginfo('template_directory') ?>/assets/img/right-arrow.png"
                 style="top: 50%; position: absolute; right: 2%"/>
        </a>

        <div class="container sec">

            <div class="row sliderSecondInner carousel slide" id="carousel-example-generic">
                <div class="col-lg-4">
                    <div class="row ">
                        <ul class="secondSidebarMenu">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="mobile active">
                                <a href="#">Mobile Development</a></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="staf"><a href="#">Staf
                                    Augmentation</a></li>
                            <li class="app" data-target="#carousel-example-generic" data-slide-to="2"><a href="#">Custom
                                    Application Development</a></li>
                            <li class="design" data-target="#carousel-example-generic" data-slide-to="3"><a
                                    href="#">Design</a>
                            </li>
                            <!--<li class="marketing"><a href="#">Internet Marketing</a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 ">
                    <div class="carousel-inner">
                        <div class="row phoneBG item active">
                            <div class="col-lg-7">
                                <article>
                                    <header>
                                        <hgroup>
                                            <h1>JUST1WORD</h1>

                                            <h2>Free Bible App for iPhone</h2>
                                        </hgroup>
                                        <section>
                                            <p>Now you can get Bible anytime, anywhere on your iPhone or other
                                                mobile
                                                device.
                                                Download the Bible app or go to the mobile site to explore the Bible
                                                with
                                                fully
                                                formatted text, red letters and SmartSearch</p>
                                        </section>
                                        <blockquote>
                                            <p>We are very impressed with the quality of the Swan development team.
                                                It
                                                is
                                                loyal, dedicated, and stellar in delivery.</p>

                                            <h3>John DOE, J1W</h3>
                                        </blockquote>

                                    </header>

                                    <a href="#" class="blue_btn">Case Study</a>

                                </article>

                            </div>
                        </div>

                        <div class="row phoneBG item ">
                            <div class="col-lg-7">
                                <article>
                                    <header>
                                        <hgroup>
                                            <h1>JUST1WORD</h1>

                                            <h2>Free Bible App for iPhone</h2>
                                        </hgroup>
                                        <section>
                                            <p>Now you can get Bible anytime, anywhere on your iPhone or other
                                                mobile
                                                device.
                                                Download the Bible app or go to the mobile site to explore the Bible
                                                with
                                                fully
                                                formatted text, red letters and SmartSearch</p>
                                        </section>
                                        <blockquote>
                                            <p>We are very impressed with the quality of the Swan development team.
                                                It
                                                is
                                                loyal, dedicated, and stellar in delivery.</p>

                                            <h3>John DOE, J1W</h3>
                                        </blockquote>

                                    </header>
                                    <a href="#" class="blue_btn">Case Study</a>
                                </article>

                            </div>
                        </div>

                        <div class="row phoneBG item ">
                            <div class="col-lg-7">
                                <article>
                                    <header>
                                        <hgroup>
                                            <h1>JUST1WORD</h1>

                                            <h2>Free Bible App for iPhone</h2>
                                        </hgroup>
                                        <section>
                                            <p>Now you can get Bible anytime, anywhere on your iPhone or other
                                                mobile
                                                device.
                                                Download the Bible app or go to the mobile site to explore the Bible
                                                with
                                                fully
                                                formatted text, red letters and SmartSearch</p>
                                        </section>
                                        <blockquote>
                                            <p>We are very impressed with the quality of the Swan development team.
                                                It
                                                is
                                                loyal, dedicated, and stellar in delivery.</p>

                                            <h3>John DOE, J1W</h3>
                                        </blockquote>

                                    </header>
                                    <a href="#" class="blue_btn">Case Study</a>
                                </article>

                            </div>
                        </div>

                        <div class="row phoneBG item ">
                            <div class="col-lg-7">
                                <article>
                                    <header>
                                        <hgroup>
                                            <h1>JUST1WORD</h1>

                                            <h2>Free Bible App for iPhone</h2>
                                        </hgroup>
                                        <section>
                                            <p>Now you can get Bible anytime, anywhere on your iPhone or other
                                                mobile
                                                device.
                                                Download the Bible app or go to the mobile site to explore the Bible
                                                with
                                                fully
                                                formatted text, red letters and SmartSearch</p>
                                        </section>
                                        <blockquote>
                                            <p>We are very impressed with the quality of the Swan development team.
                                                It
                                                is
                                                loyal, dedicated, and stellar in delivery.</p>

                                            <h3>John DOE, J1W</h3>
                                        </blockquote>

                                    </header>
                                    <a href="#" class="blue_btn">Case Study</a>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  ================================ Third Section ================================== -->
    <div id="sliderThird">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/team.png"/>

        <div class="news_line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <?php $postslist = get_posts('numberposts=1&orderby=date&order=DESC&category_name=News'); ?>
                        <?php foreach ($postslist as $post) : setup_postdata($post); ?>
                            <p>
                                <?php the_excerpt("All +"); ?>
                            </p>
                        <?php endforeach ?>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2">
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
                            <a href="<?=get_permalink(51, false) ?>">View All +</a>

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