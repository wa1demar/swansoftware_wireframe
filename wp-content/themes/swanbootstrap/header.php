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

    <?php if (is_page_template('home.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/home/main.css"/>
    <?php elseif (is_page_template('services.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/services/main.css"/>
    <?php elseif (is_page_template('contact_us.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/contact_us/main.css"/>
    <?php elseif (is_page_template('technologies.php')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/technologies/main.css"/>
    <?php
    elseif (is_home()): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/home/main.css"/>
    <?php endif ?>

    <meta charset="<?php bloginfo('charset')?>"/>
    <link href="<?php bloginfo('template_directory')?>/assets/css/libs/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/globals/global.css"/>
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_directory')?><!--/assets/css/home/main.css"/>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <?php wp_head() ?>
</head>
<body>

<header id="mainHeader">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-7">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/swan_150x100.png">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <hgroup>
                            <h1><a href="<?=  get_home_url()?>">SWAN</a></h1>

                            <h2><a href="<?= get_home_url()?>">SOFTWARE SOLUTIONS</a></h2>
                        </hgroup>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-6 col-md-offset-6">
                        <div class="address">
                            <ul>
                                <li class="phone"><p>317-691-3806</p></li>
                                <li class="address"><p>698 Pro-Med Ln, <br/>
                                        Ste 200 Carmel IN 46032;</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <?php wp_nav_menu(getArgsForMainMenu()) ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<div id="mainContent">