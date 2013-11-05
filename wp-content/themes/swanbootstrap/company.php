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
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php $bg = get_field('background'); ?>
<div id='sliderFirst' style="background: url('<?= $bg ?>') center top ;">
    <?php addSocials($bg) ?>

    <div class='row darck-background'>
        <div class="container text-center">
            <div class="row">
                <div class='col-xs-1'>
                </div>
                <div class='col-xs-10'>
                    <h1>Allow us to introduce ourselves</h1>

                    <div class='text text-left'>
                       <?php the_content()?>

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
        <div class='row first-row'>

            <div class='services col-xs-5'>
                <h1>Services</h1>
                <ul class="secondSidebarMenu">
                    <li class="mobile">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Mobile Application Development' ) ) ); ?>">Mobile Development</a></li>
                    <li class="staf"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Staff Augmentation' ) ) ); ?>">Staf
                            Augmentation</a></li>
                    <li class="app"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Custom
                            Application Development' ) ) ); ?>">Custom
                            Application Development</a></li>
                    <li class="design" ><a
                            href="<?php echo esc_url( get_permalink( get_page_by_title( 'Design' ) ) ); ?>">Design</a>
                    </li>
                </ul>


            </div>

            <div class='col-xs-1'>
            </div>
            <div class='customers col-xs-6 text-left'>
                <div class='container'>
                    <h1>Customers</h1>
                    <?=get_field('customers')?>
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
                    <img src='<?php bloginfo('template_directory') ?>/assets/img/green_business.png'>
                    <img src='<?php bloginfo('template_directory') ?>/assets/img/children.png'>
                    <img src='<?php bloginfo('template_directory') ?>/assets/img/talent.png'>

                </div>
            </div>
        </div>
    </div>
    <div class='container '>
        <div class='row main-staff'>

            <div class='services col-xs-5'>


                <div class='row  '>
                    <div class='col-xs-6  president-photo'>
                        <img src='<?php bloginfo('template_directory') ?>/assets/pics/al.png' class="img-circle">

                    </div>

                    <div class='col-xs-6 sign'>
                        <span>Alex Morozov</span>
                        <br/>
                        President & CEO
                    </div>
                </div>


            </div>

            <div class=' col-xs-7  partners-container'>
                <div class='row'>
                    <div class='col-xs-1 blank-coll'>
                    </div>
                    <div class='col-xs-11 full-coll '>
                        <div class='row partners'>
                            <div class='col-xs-12'>
                                <h1>Partners</h1>
                            </div>
                            <div class='col-xs-4 text-center'>

                                <img src='<?php bloginfo('template_directory') ?>/assets/pics/fel.png'
                                     class="img-circle">
                                <br />
                                <span>Felix Shalit</span>
                            </div>
                            <div class='col-xs-4 text-center'>
                                <img src='<?php bloginfo('template_directory') ?>/assets/pics/anker.png'
                                     class="img-circle">
                                <br />
                                <span>Terry Anker</span>


                            </div>
                            <div class='col-xs-4 text-center'>
                                <img src='<?php bloginfo('template_directory') ?>/assets/pics/alla.png'
                                     class="img-circle">
                                <br />

                                <span>Alla Morozov</span>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<div id='sectionThird'>
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 '>
                <h1>Managers</h1>

                <div class='row managers'>
                    <?php addImages(get_cat_ID( 'Manager' ))?>

                </div>
            </div>
        </div>
    </div>

</div>

<div id='sectionFouth'>
    <div class='row sliders'>
        <div class='col-xs-4'>
            <img src='<?php bloginfo('template_directory') ?>/assets/img/left_image.jpg'>
        </div>
        <div class='col-xs-4'>

            <img src='<?php bloginfo('template_directory') ?>/assets/img/company2.png'>
        </div>
        <div class='col-xs-4'>
            <img src='<?php bloginfo('template_directory') ?>/assets/img/right_image.jpg'>
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

                <?php addImages(get_cat_ID( 'Developer' ))?>


    </div>
</div>

<?php get_footer() ?>

