<?php
/**
 * Template Name: Services Template
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 17.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>

<?php get_header() ?>
<?php while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <div class="servicesHeader" style="background: url('<?= $bg ?>') center top repeat-x;">
        <?php addSocials($bg) ?>
        <?php $tech = get_field('technologies') ?>
        <div class="headerContent blackTransparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 headerList">
                        <div class="image">
                            <img src="<?php the_field("service_icon") ?>">
                        </div>
                        <div class="text">
                            <h1><?= the_title() ?></h1>
                            <?= the_field('service_offer') ?>
                        </div>

                    </div>
                    <div class="col-lg-5 headerForm blackTransparent">
                        <h2>Tell us about your <span>Project</span></h2> <!-- TODO: ???-->

                        <form>
                            <div class="row">
                                <div class="col-lg-4"><label>Name</label></div>
                                <div class="col-lg-8"><input type="text" placeholder="John Doe..."></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"><label>Email</label></div>
                                <div class="col-lg-8"><input type="text" placeholder="johndoe@jahoo.com"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"><label>Comment</label></div>
                                <div class="col-lg-8"><textarea placeholder="Tape your messahe here..."></textarea>
                                </div>
                            </div>
                            <a href="#" class="blue_btn small">Send</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="serviceContent">
        <div class="container content">
            <div class="row">
                <div class="col-lg-7 article">
                    <article class="center">
                        <?php the_content() ?>
                    </article>
                </div>
                <div class="col-lg-5 articleList ">
                    <?php the_field('our_approach') ?>
                </div>
            </div>

        </div>

    </div>
<?php endwhile; ?>
    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_field('why_do_you_need') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="separator">
        <div class="container">
            <h1>You can order the service by <a href="#">filling the form</a> or just <a href="#">cull us</a></h1>
        </div>
    </section>
    <div class="tab1">
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" >
                        <span class="title">
                            <h1>Our Clients</h1>

                            <a href="<?=getCategory('Clients'); ?>">View All +</a>
                        </span>
                        <ul class="nav nav-tabs" id="myTab">
                        <?php query_posts("cat=5&posts_per_page=100"); ?>
                        <?php $c = 1; if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="<?php if ($c == 1) echo("active")?>"><a href="#<?=get_field('label') ?>" data-toggle="tab"><img src="<?php the_field('logo') ?>"/></a> </li>
                            <?php $c++?>
                        <?php endwhile; endif ?>
                            </ul>
                    </div>
                </div>
            </div>
        </section>
        <div id="quotes">
            <div class="container">
                <div class="row tab-content">
                    <?php query_posts("cat=5&posts_per_page=100"); ?>
                    <?php $c = 1; if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <blockquote class="tab-pane <?php if ($c == 1) echo("active") ?>" id="<?=get_field('label') ?>">
                        <p><?php the_content() ?></p>
                        <h3><?=get_field('name')?></h3>
                        <?php $c++;?>
                    </blockquote>

                    <?php endwhile; endif ?>

                </div>
            </div>
        </div>
    </div>
    <section id="technologies">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <span class="title">
                            <h1>Technologies what are used</h1>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Technologies' ) ) ); ?>">View All +</a> <?php //TODO: Get permalink to technologies ?>
                   </span>
                    <?= $tech ?>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function () {
            $('#myTab a:first').tab('show')
        })
    </script>

<?php get_footer() ?>