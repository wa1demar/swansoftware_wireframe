<?php
/**
 *
 * Template Name: Testimonials
 *
 * Created by JetBrains PhpStorm.
 * User: Viktor
 * Date: 10/17/13
 * Time: 1:32 PM
 */
?>
<?php get_header() ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/testimonials/main.css"/>
    <div id='sliderFirst'>
        <?php $bg_image = "../'assets/pics/technology.png" ?>
        <?php require "_social.php" ?>

        <div class='row darck-background'>
            <div class="container text-center">

                <h1 class='title'>Testimonials</h1>

                <div class='col-xs-4 text-center'>
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/logo.png">

                </div>
                <div class='col-xs-8'>
                    <div class='col-xs-12 text-left'>
                        <div class='content'>
                            I Am very happy with the Swan team. They are fine workers. Like children, you hate to pick
                            favoritee
                            but you still do. These guys are in the top in my book! Let's keep that between us! You
                            never
                            let your children
                            know you have a favorite.
                        </div>
                    </div>
                    <div class='col-xs-6 text-left'>
                        <h1>Link</h1>

                        <a href="http://www.dibpal.com"> www.dibpal.com </a>
                    </div>
                    <div class='col-xs-6 text-left'>
                        <h1>Used services</h1>

                        <a href="#"> Custom App Development </a>
                        <br/>
                        <a href="#"> Internet Marketing </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='sliderSecond'>
        <div class="container">
            <div class='row'>
               <div class='col-sm-12 text-center'>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_1.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_2.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_3.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_4.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_1.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_2.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_3.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_4.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_1.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_2.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_3.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/tech_4.png"/></a>
                    <!--<a href="#"><img src="assets/img/tech_5.png"/></a><-->
                    <!--<a href="#"><img src="assets/img/tech_6.png"/></a>-->
                </div>
            </div>
        </div>
    </div>









<?php get_footer() ?>