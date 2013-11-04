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
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background') != "" ? get_field('background') : getDefaultBG(); ?>
    <div id='sectionFirst' style="background: url('<?= $bg ?>') center top repeat-x;">
        <?php addSocials($bg) ?>

        <div class='dark-background'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="logo" src="<?php bloginfo('template_directory') ?>/assets/pics/just1word.png">

                        <h1>Free Bible App for iPhone</h1>
                        <article>
                            <p>Just1Word's Bible app now has 1.5 million downloads. Its Catolic Bible is #4 and its NIV
                                translation is the #1 online version of the most popular Bible translation among nearly
                                1000 competitors!</p>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <div class="phone_screen">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="<?php bloginfo('template_directory') ?>/assets/pics/j1w.png">
                                    </div>
                                    <div class="item ">
                                        <img src="<?php bloginfo('template_directory') ?>/assets/pics/j1w.png">
                                    </div>
                                    <div class="item ">
                                        <img src="<?php bloginfo('template_directory') ?>/assets/pics/j1w.png">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sectionSecond">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 rounded">

                    <img class="left" src="<?php bloginfo('template_directory') ?>/assets/pics/jr1.png">
                    <article>
                        <section class="left">
                            <h1>Customer Need</h1>

                            <p>Customer wanted a customized Bible app for both phone and tablet, as well as a responsive
                                website. They also wanted a site that was simple, intuitive, and very clean.</p>
                        </section>

                    </article>
                    <img src="<?php bloginfo('template_directory') ?>/assets/pics/jr1.png" class="right">
                    <section class="right">
                        <h1>Solution</h1>

                        <p>Solution Swan designed a responsive, a unicue UI and mobile applications for both iOS and
                            Android Then we designed, tested, and successfully completed the QA Apple approval and
                            customer support process for Just1Word's mobile app</p>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <div id="sectionThird">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <h1>Related Services</h1>
                    <section class="mobile">
                        <a href="#">
                            Mobile Development
                        </a>
                    </section>
                    <section class="custom">
                        <a href="#">
                            Custom Application Development
                        </a>
                    </section>
                    <section class="design">
                        <a href="#">
                            Design
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="sectionFourth">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 tech">
                    <h1>Used technologies</h1>
                    <img src="<?php bloginfo('template_directory') ?>/assets/pics/tech_6.png">
                    <img src="<?php bloginfo('template_directory') ?>/assets/pics/tech_5.png">
                    <img src="<?php bloginfo('template_directory') ?>/assets/pics/tech_4.png">
                    <img src="<?php bloginfo('template_directory') ?>/assets/pics/tech_3.png">
                </div>
                <div class="col-lg-6 test">
                    <h1>Testimonials</h1>
                    <blockquote>
                        <p>Now you can get Bible anytime, anywhere on your iPhone or other
                            mobile
                            device.
                            Download the Bible app or go to the mobile site to explore the Bible
                            with
                            fully
                            formatted text, red letters and SmartSearch</p>
                        <h3>John DOE, J1W</h3>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer() ?>
<script>
$('.carousel').carousel({
interval: 5000
})
</script>
