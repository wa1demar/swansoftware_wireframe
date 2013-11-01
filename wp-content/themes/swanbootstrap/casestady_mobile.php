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
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-4">
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
<?php endwhile; endif; ?>
<?php get_footer() ?>