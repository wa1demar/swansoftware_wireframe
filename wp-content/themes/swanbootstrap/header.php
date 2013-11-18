<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 16.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <title><?php wp_title('|', true, 'right') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <link href="<?php bloginfo('template_directory') ?>/assets/css/libs/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/globals/global.css"/>

    <?php if (is_home()): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/home/main.css"/>
    <?php elseif (is_page_template('services.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/services/main.css"/>
    <?php elseif (is_page_template('contact_us.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/contact_us/main.css"/>
   <?php elseif (is_page_template('thank_you.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/thank_you/main.css"/>
    <?php elseif (is_page_template('technologies.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/technologies/main.css"/>
    <?php elseif (is_page_template('clients.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/testimonials/main.css"/>
    <?php elseif (is_page_template('company.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/company/main.css"/>
    <?php elseif (is_page_template('media.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/welcome/main.css"/>
    <?php elseif (is_post_template('casestudy_ios.php') || is_post_template('casestudy_android.php')
        || is_post_template('case_study_staff.php') || is_post_template('casestudy_design.php')
        || is_post_template('casestudy_custom.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/case_study/main.css"/>
    <?php elseif (is_single()): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/blog_page/main.css"/>
    <?php else: ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/blog/main.css"/>
    <?php endif ?>

    <meta charset="<?php bloginfo('charset') ?>"/>
    <link href="<?php bloginfo('template_directory') ?>/assets/css/libs/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/globals/global.css"/>
    <!--    <link rel="stylesheet" href="--><?php //bloginfo('template_directory')?><!--/assets/css/home/main.css"/>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

    <script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/carousel.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/tab.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/validate.js"></script>

    <?php wp_head() ?>
</head>
<body>

<header id="mainHeader">
    <div class="container">
        <div class="row header-row">
            <div class="col-xs-2 logo">
                <div class="row">
                    <div class="col-xs-12 ">
                        <a href="<?= get_home_url() ?>"><img src="<?php bloginfo('template_directory') ?>/assets/img/swan_150x100.png"></a>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 logo-sign">
                <div class="row">

                    <div class="col-xs-12 ">
                        <hgroup>
                            <h1 id = 'sign-with-logo'><a href="<?= get_home_url() ?>">SWAN</a></h1>

                            <h2 id = "central-sign"><a href="
                            <?= get_home_url() ?>">SOFTWARE SOLUTIONS</a></h2>
                        </hgroup>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xs-12  header-contacts">
                <div class="row  ">
                    <div class="col-md-6  col-md-offset-6  ">
                        <div class="address">
                            <ul>
                                <li class="phone "><p>317-691-3806</p></li>
                                <li class="address"><p>698 Pro-Med Ln, <br/>
                                        Ste 200 Carmel IN 46032;</p></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 text-center link-list">
                <div class="row container-non-height">
                    <div class="col-xs-12 text-center">
                        <?php wp_nav_menu(getArgsForMainMenu()) ?>
                    </div>
                </div>
            </div>


        </div>


    </div>
</header>


<div class="col-xs-12" id = "small-menu">
<div id="accordion" class="panel-group  " stule = 'background-color: #23292A;'>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="collapsed" href="#collapseOne" data-parent="#accordion" data-toggle="collapse"> MENU </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" style="height: auto;">
            <div class="panel-body">


                <?php wp_nav_menu(getArgsForMainMenu()) ?>

            </div>
        </div>
    </div>


</div>
</div>



<div id="mainContent">