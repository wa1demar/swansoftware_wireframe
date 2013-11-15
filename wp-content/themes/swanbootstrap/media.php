<?php
/**
 * Template Name: Media Kit
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 25.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */ ?>
<?php get_header()?>
<?php while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background') != "" ? get_field('background') : getDefaultBG(); ?>
<div id='wrap'>
    <div id="sliderFirst" style="background: url('<?= $bg ?>') center top;">
        <div class="info-section">
            <?php addSocials($bg) ?>

            <div class="row darck-background">

                <div class="col-lg-12 text-center background">

                    <div class="col-xs-12  welcome-text-phone ">
                        <div class='container'>
                            <h1>Welcome to</h1>

                            <div class="col-xs-7 title text-right">
                                SWAN
                            </div>
                            <div class="col-xs-5 description text-left">
                                SOFTWARE
                                <br/>
                                SOLUTIONS
                            </div>

                        </div>
                        <ul class='links'>
                            <li id='blue'> Be Original</li>
                            <li id='green'>Discover   </li>
                            <li id='yellow'> Stand Out</li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <a href="#" id='center'><img src="<?php bloginfo('template_directory') ?>/assets/img/pdf.png" /> Download our Media Kit</a>
    </div>

</div>
<div id="slidersecond">
    <div class='container text-center'>
        <div class ='row'>
            <div class= 'col-xs-2'>
            </div>
            <div class = 'text-section-2 col-xs-8 '>
                <?php the_content()?>

            </div>
            <div class= 'col-xs-2'>
            </div>
        </div>
    </div>
</div>
<?php endwhile?>
<?php get_footer()?>