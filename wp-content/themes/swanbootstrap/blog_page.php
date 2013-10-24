<?php
/**
 * Template Name: Blog Page
 *
 * Created by PhpStorm.
 * @author: viktor
 * @date: 18.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/blog_page/main.css"/>
<div id='sliderFirst'>
    <?php $bg_image = "../'assets/pics/technology.png" ?>
    <?php require "_social.php" ?>

    <div class='row  darck-background'>
        <div class='container'>
            <div class='col-sm-8 img-background '>
                <div class='col-xs-4 round-sign text-center'>
                    Sep
                    <h1 class='roud'>11</h1>
                    2013
                </div>

                <div class='white-footer row'>

                    <div class='col-xs-3'>

                    </div>
                    <div class='col-xs-9'>
                        <b>Our Top Ten for Design Inspiration</b>
                        <br/>
                        Every week at Fueled, uor London-based lead designer Rob Palmer shares a handful of
                        inspirational websites
                        with our teams in New York and ...
                        <br/>
                        <br/>
                        <a href="#">View all +</a>

                    </div>
                </div>
            </div>
            <div class='col-sm-4'>
                <h1 class='title'>Blog & News</h1>

                <form>
                    <div class='inputs row'>
                        <b>Join our Newsletter</b>
                        <br/>

                        <div class="col-xs-9 input1">
                            <input type='text' class="form-control " name='input1'
                                   placeholder='Enter your Email address'>
                        </div>
                        <div class="col-xs-3">
                            <button type="button" class="form-control input_submit" name='submit1'>Go</button>
                        </div>
                        <b>Search</b>

                        <div class="col-xs-12">

                            <input type='input' class="form-control" name='input1'
                                   placeholder='What are you searching for?'>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div id='sectionSecond'>
    <div class='container'>
        <div class='row'>
            <div class="col-xs-8">
                <div class="social text_left">
                    <ul class="socialLinks horizontal"

                    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/fb_25x25.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/twitter_25x25.png"/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/g+_25x25.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/linkedin_25x25.png"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4">
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
