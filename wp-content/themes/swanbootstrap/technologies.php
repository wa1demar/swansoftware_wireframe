<?php
/**
 * Template Name: Technologies Template
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
<?php while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <div id="sliderFirst" style="background:  url('<?= $bg ?>') center top repeat-x;">
        <div class="info-section">
            <?php addSocials($bg) ?>

            <div class="row darck-background">
                <div class="col-lg-12 text-center background">
                    <div class="col-lg-12  technologies-text-phone ">
                        <div class='container'>
                            <h1>Technologies that we use</h1>
                            <div class='content'>
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section id="sliderSecond">

        <div class="container">
            <div class='row'>

                <div class='col-sm-12 text-center'>
                    <?php the_field('technologies') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="sliderThird">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>
                        Services we offer:
                    </h1>

                </div>

            </div>
            <div class="row topBannerLinks">
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?= get_permalink(33, false) ?>">
                        <div class="round_image text-center">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service1_115x100.png">
                        </div>

                        <p>Mobile Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?= get_permalink(56, false) ?>">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service2_115x100.png">
                        </div>

                        <p>Staff Augmentation</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?= get_permalink(58, false) ?>">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service3_115x100.png">
                        </div>

                        <p>Custom Application Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?= get_permalink(38, false) ?>">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service4_115x100.png">
                        </div>

                        <p>Design</p>
                    </a>
                </div>
                <!--<div class="box col-md-2">-->
                <!--<div class="round_image">-->
                <!--<img src="assets/img/service5_115x100.png">-->
                <!--</div>-->


                <!--<p>Internet Marketing</p>-->
                <!--</div>-->
            </div>

        </div>

    </section>
    <section id="sliderFour">
        <div class="container">
            <div id="wrapper" class='row tab1'>
                <div class='col-sm-3'>
                    <ul class='link-list nav nav-tabs' id="myTab">
                        <li class="active"><a href="#java" data-toggle="tab">Java tool set</a></li>
                        <li><a href="#ruby" data-toggle="tab">Ruby tool set</a></li>
                        <li><a href="#net" data-toggle="tab">.NET tool set</a></li>
                        <li><a href="#js" data-toggle="tab">JavaScript tool set</a></li>
                        <li><a href="#phone" data-toggle="tab">Smartphone tool set</a></li>
                    </ul>
                </div>
                <div class='col-sm-9 left-border-dotted tab-content'>
                    <div class="tab-pane active" id="java">
                        <div class='col-sm-4 col-xs-6 '>
                            <ul>
                                <li><a href="#">Code analysis</a></li>
                                <li>JavaScriptLint</li>
                                <li>JSHint</li>
                                <li>JSLint</li>
                            </ul>
                            <ul>
                                <li><a href="#">Compilers</a></li>
                                <li>CoffeeScript</li>
                                <li>Google Closure Compiler</li>
                                <li>Google Web Toolkit</li>
                                <li>Morfik</li>
                                <li>Script#</li>
                            </ul>
                            <ul>
                                <li><a href="#">Doc generators</a></li>
                                <li>JSDoc</li>
                            </ul>
                            <ul>
                                <li><a href="#">Unit testing</a></li>
                                <li>JSUnit</li>
                            </ul>
                            <ul>
                                <li><a href="#">Server-side</a></li>
                                <li>Active Server Pages</li>
                                <li>CommonJS</li>
                                <li>Node.js</li>
                            </ul>
                        </div>
                        <div class='col-sm-4 col-xs-6'>
                            <ul>
                                <li><a href="#">Debuggers</a></li>
                                <li>Firebug</li>
                                <li>Opera Dragonfly</li>
                                <li>Microsoft Script Editor</li>
                                <li>Microsoft Script Debugger</li>
                                <li>Microsoft Visual Studio</li>
                                <li>Microsoft Visual Web</li>
                                <li>Developer Express</li>
                                <li>Venkman</li>
                                <li>Web Inspector</li>
                            </ul>
                            <ul>
                                <li><a href="#">Concepts</a></li>
                                <li>Ajax</li>
                                <li>Client-side</li>
                                <li>JavaScript library</li>
                                <li>Dynamic HTML</li>
                                <li>JavaScript syntax</li>
                                <li>Unobtrusive JavaScript</li>
                            </ul>
                            <ul>
                                <li><a href="#">Related technologies</a></li>
                                <li>Cascading Style Sheets</li>
                                <li>Document Object</li>
                                <li>Model</li>
                                <li>HTML</li>
                                <li>JSON</li>
                            </ul>
                        </div>
                        <div class='col-sm-4 col-xs-6'>
                            <ul>
                                <li><a href="#"> Web Frameworks</a></li>
                                <li>Ample SDK</li>
                                <li>Prototype JavaScript</li>
                                <li>Framework</li>
                                <li>Rico</li>
                                <li>script.aculo.us</li>
                                <li>SproutCore</li>
                                <li>jQuery</li>
                                <li>Dojo
                                <li>Toolkit</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="ruby">
                        Ruby

                    </div>
                    <div class="tab-pane" id="net">
                        .NET

                    </div>
                    <div class="tab-pane" id="js">
                        JavaScript

                    </div>
                    <div class="tab-pane" id="phone">
                        Phone

                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endwhile; ?>

    <script>
        $(function () {
            $('#myTab a:first').tab('show')
        })
    </script>

<?php get_footer() ?>