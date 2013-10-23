<?php
/**
 * Template Name: Company staff
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 18.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>

<?php get_header() ?>
<?php $bg = get_field('background'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/company/main.css"/>
<div id='sliderFirst'>
    <?php $bg_image = "../'assets/pics/technology.png" ?>
    <?php require "_social.php" ?>

    <div class='row darck-background'>
        <div class="container text-center">
            <div class="row">
                <div class='col-xs-1'>
                </div>
                <div class='col-xs-10'>
                    <h1>Allow us to introduce ourselves</h1>

                    <div class='text text-left'>
                        Swan Software Solutions LLS is a leading provider of Custom Application Development, Mobile
                        Application Development, Staff Augmentation, Web & Graphic Design, Internet Marketing and
                        Superior
                        Consulting Services.
                        <br/>
                        <br/>
                        We are an energetic, growing company with exceptional knowledge and expertise in technological
                        development. We are ready for any challenges
                        that we are presented and are excited about upcoming opportunities.


                    </div>
                </div>
                <div class='col-xs-1'>
                </div>
            </div>
        </div>
    </div>
</div>
<div id='sectionSecond'>
    <div class='container'>
        <div class='row'>

            <div class='services col-xs-5'>
                <h1>Services</h1>
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

            <div class='col-xs-1'>
            </div>
            <div class='customers col-xs-6 text-left'>
                <div class='container'>
                    <h1>Customers</h1>
                </div>
            </div>
        </div>

    </div>
    <div id='greensection'>
        <div class='container'>


            <div class='row'>

                <div class='col-xs-6 text-left'>
                    <h1>Our mission</h1>

                    <div class=text>
                        We have increased our local presence by adding expertise in Project
                        Management, Business Analysis, and Sales, and we are able to provide
                        solutions to uor clients with a personal onsite presence and a dedicated
                        team that is seamless with the client.
                    </div>
                </div>
                <div class='col-xs-6 text-left'>
                    <h1>Awards and Recognition</h1>
                    <img src='<?php bloginfo('template_directory') ?>/assets/img/logo.png'>
                    <img src='<?php bloginfo('template_directory') ?>/assets/img/logo.png'>
                    <img src='<?php bloginfo('template_directory') ?>/assets/img/logo.png'>

                </div>
            </div>
        </div>
    </div>
    <div class='container '>
        <div class='row main-staff'>

            <div class='services col-xs-5'>


                <div class='row '>
                    <div class='col-xs-6'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                    </div>

                    <div class='col-xs-6 sign'>
                        <span>Alex Morozov</span>
                        <br/>
                        President & CEO
                    </div>
                </div>


            </div>

            <div class=' col-xs-7'>
                <div class='row'>
                    <div class='col-xs-1'>
                    </div>
                    <div class='col-xs-11'>
                        <div class='row partners'>
                            <div class='col-xs-12'>
                                <h1>Partners</h1>
                            </div>
                            <div class='col-xs-4 text-center'>

                                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png'
                                     class="img-circle">

                                <span>Felix Shalit</span>
                            </div>
                            <div class='col-xs-4 text-center'>
                                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png'
                                     class="img-circle">

                                <span>Terry Anker</span>


                            </div>
                            <div class='col-xs-4 text-center'>
                                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png'
                                     class="img-circle">

                                <span>Alla Morozov</span>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id='sectionThird'>
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 '>
                <h1>Managers</h1>

                <div class='row managers'>
                    <div class='col-xs-2 text-center'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                        <span>Sergey Zakharow</span>
                    </div>
                    <div class='col-xs-2 text-center'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                        <span>Sergey Verevkin</span>
                    </div>
                    <div class='col-xs-2 text-center'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                        <span>Rizak Vasyl</span>
                    </div>
                    <div class='col-xs-2 text-center'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                        <span>Alexandr Povshuk</span>
                    </div>
                    <div class='col-xs-2 text-center'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                        <span>Dmitriy Gvozdik</span>
                    </div>
                    <div class='col-xs-2 text-center'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                        <span>Oleg Shvarts</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<div id='sectionFouth'>
    <div class='row sliders'>
        <div class='col-xs-4'>
            <img src='<?php bloginfo('template_directory') ?>/assets/img/company1.png'>
        </div>
        <div class='col-xs-4'>

            <img src='<?php bloginfo('template_directory') ?>/assets/img/company2.png'>
        </div>
        <div class='col-xs-4'>
            <img src='<?php bloginfo('template_directory') ?>/assets/img/company3.png'>
        </div>
    </div>
</div>
</div>
<div id='sectionFifth'>
    <div class='container '>
        <div class='row superheroes'>
            <div class='col-xs-12 text-center '>
                <h1>Our Team of Superheroes</h1>
            </div>
            <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                <span>Brett Ridoux </span>
                <br/>
                Director of Business Development
            </div>
            <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">
                <span>Anna Sabadosh</span>
                <br/>
                HR
            </div>
            <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>Lidiya Mykytyn</span>
                <br/>
                Reporting Manager
            </div>
            <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                tttttttttttttt
            </div>
            <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
           <div class='col-xs-2 text-center'>
                <img src='<?php bloginfo('template_directory') ?>/assets/pics/ania.png' class="img-circle">

                <span>tttttttttttt</span>
                <br/>
                Dt
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>

