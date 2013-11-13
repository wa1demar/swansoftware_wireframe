<?php
/**
 *
 * Template Name Posts: Testimonials
 *
 * Created by JetBrains PhpStorm.
 * User: Viktor
 * Date: 10/17/13
 * Time: 1:32 PM
 */
?>
<?php get_header()?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <div id='sliderFirst' style="background:  url('<?= $bg ?>') center top repeat;">
        <?php addSocials($bg)?>

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
                    <div  id = 'link' class='col-xs-6 text-left'>
                        <h1>Link</h1>

                        <a href="http://www.dibpal.com"> www.dibpal.com </a>
                    </div>
                    <div   class='col-xs-6 text-left'>
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
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_1.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_2.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_3.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_4.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_1.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_2.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_3.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_4.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_1.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_2.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_3.png"/></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/pics/tech_4.png"/></a>
                    <!--<a href="#"><img src="assets/img/tech_5.png"/></a><-->
                    <!--<a href="#"><img src="assets/img/tech_6.png"/></a>-->
                </div>
            </div>
        </div>
    </div>


<?php endwhile; ?>
<?php get_footer()?>