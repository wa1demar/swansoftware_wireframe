<?php
/**
 * Template Name: Blog
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
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/blog/main.css"/>
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
    <div id='sliderSecond'>
        <div class='row'>
            <div class='container'>
                <div class='col-sm-8 img-container'>
                    <div class='col-xs-4 round-sign text-center'>
                        Sep
                        <h1 class='roud'>09</h1>
                        2013
                    </div>

                    <div class='white-footer row'>

                        <div class='col-xs-3'>

                        </div>
                        <div class='col-xs-9'>
                            <b class=topic-sign>Swan Software Solutions as Mobile App Development Agency</b>
                            <br/>

                            <div class='img-text'>
                                At Fueled, we don't just build apps; with teams of designers, developers and strategists
                                based in New York,
                                Chicago and London
                            </div>

                            <a href="#">View all +</a>

                        </div>
                    </div>


                </div>
                <div class='col-sm-4 menu'>
                    <p class='tags'>Browser by Tag</p>
                    <ul>
                        <li><a>Mobile App</a></li>
                        <li><a>Custom Application</a></li>
                        <li><a>Development</a></li>
                        <li><a>IOS</a></li>
                        <li><a>Android</a></li>
                        <li><a>Responsive layout</a></li>
                        <li><a>Design</a></li>
                        <li><a>Wed design</a></li>
                        <li><a>UX/UI design</a></li>
                        <li><a>Internet Marketing</a></li>
                        <li><a>SEO</a></li>
                        <li><a>SMM</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id='sliderTried'>
        <div class='row'>
            <div class='container'>
                <div class='col-sm-8 img-container'>
                    <div class='col-xs-4 round-sign text-center'>
                        Sep
                        <h1 class='roud'>09</h1>
                        2013
                    </div>

                    <div class='white-footer row'>

                        <div class='col-xs-3'>

                        </div>
                        <div class='col-xs-9'>
                            <b class=topic-sign>Swan Software Solutions as Mobile App Development Agency</b>
                            <br/>

                            <div class='img-text'>
                                At Fueled, we don't just build apps; with teams of designers, developers and strategists
                                based in New York,
                                Chicago and London
                            </div>

                            <a href="#">View all +</a>

                        </div>
                    </div>


                </div>
                <div class='col-sm-4 menu'>

                </div>
            </div>
        </div>
    </div>
    <div id='sliderFourth'>
        <div class='row'>
            <div class='container'>
                <div class='col-sm-8 img-container'>
                    <div class='col-xs-4 round-sign text-center'>
                        Sep
                        <h1 class='roud'>09</h1>
                        2013
                    </div>

                    <div class='white-footer row'>

                        <div class='col-xs-3'>

                        </div>
                        <div class='col-xs-9'>
                            <b class=topic-sign>Swan Software Solutions as Mobile App Development Agency</b>
                            <br/>

                            <div class='img-text'>
                                At Fueled, we don't just build apps; with teams of designers, developers and strategists
                                based in New York,
                                Chicago and London
                            </div>

                            <a href="#">View all +</a>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>
    <div id='sectionFifth'>
        <div class='row'>
            <div class='container'>
                <div class='col-xs-8'>
                    <div class='row'>
                        <div class='col-xs-6 text-left '>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/older.png"></a>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <a href='#' class = 'year'>2012 </a>
                        </div>
                        <div class='col-xs-6 text-right '>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/new_post.png"></a>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <a href='#' class = 'year'>2013 </a>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-12 text-center alf-link'>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                            <a href='#'><img src="<?php bloginfo('template_directory') ?>/assets/img/alfabet.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer() ?>