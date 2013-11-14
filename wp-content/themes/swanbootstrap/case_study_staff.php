<?php
/**
 * Template Name Posts: Case Study Staff
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 06.11.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background') != "" ? get_field('background') : getDefaultBG(); ?>
    <div id='sectionFirst' style="background: url('<?= $bg ?>') center top repeat-x;">
        <?php addSocials($bg) ?>

        <div class='dark-background'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <?php if (get_field('logo') != ""):?>
                            <img class="logo" src="<?=get_field('logo') ?>">
                        <?php else: ?>
                            <h1><?php the_title()?></h1>
                        <?php endif; ?>

                        <h1><?=get_field('description')?></h1>
                        <article>
                            <?php the_content()?>
                        </article>
                    </div>
                    <?php if (get_field('phone_images') != ""): ?>
                        <?php
                        $imgs = array();
                        $dom = new domDocument;
                        $dom->loadHTML(get_field('phone_images'));
                        $dom->preserveWhiteSpace = false;
                        $images = $dom->getElementsByTagName('img');
                        foreach ($images as $image) {
                            array_push($imgs, $image->getAttribute('src'));
                        }
                        ?>
                        <div class="col-sm-7">
                            <div class="mac_screen">
                                <div id="carousel-example-generic" class="carousel slide" >
                                    <ol class="carousel-indicators myIndicators">
                                        <?php if (count($imgs) > 0): ?>
                                            <?php for ($i = 0; $i < count($imgs); $i++): ?>
												<li data-target="#carousel-example-generic" 
													data-slide-to="<?=$i ?>" 
													class="<?php if ($i == 0) echo("active")?>">
												</li>
                                            <?php endfor ?>

                                        <?php endif ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php if (count($imgs) > 0): ?>
                                            <?php for ($i = 0; $i < count($imgs); $i++): ?>
                                                <div class="item <?php if ($i == 0) echo("active")?>">
                                                    <img src="<?= $imgs[$i]?>">
                                                </div>
                                            <?php endfor ?>

                                        <?php endif ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div id="sectionSecond">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 rounded">
                    <?php if (get_field('customer_need_image') != ""): ?>
                        <img class="left img-circle" src="<?=get_field("customer_need_image")?>">
                    <?php endif ?>
                    <article>
                        <section class="left">
                            <h1>Customer Need</h1>
                            <?php if (get_field('customer_need_text') != ""): ?>
                                <?=get_field("customer_need_text")?>
                            <?php endif ?>
                        </section>

                    </article>
                    <?php if (get_field('solution_image') != ""): ?>
                        <img class="right img-circle" src="<?=get_field("solution_image")?>">
                    <?php endif ?>
                    <section class="right">
                        <h1>Solution</h1>

                        <?php if (get_field('solution_text') != ""): ?>
                            <?=get_field("solution_text")?>
                        <?php endif ?>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <div id="sectionThird" style="padding-bottom: 0">
        <div class="container people">
            <div class="row">
                <div class="col-sm-6">

                </div>

                <div class="col-sm-6" style="padding-left: 120px">
                    <h1>Related Services</h1>
                    <?php
                    $serv = array(
                        "mobile" => "Mobile Development",
                        "staff" => "Staff Augmentation",
                        "custom" => "Custom Application Development",
                        "design" => "Design"
                    );
                    ?>
                    <?php foreach (get_field('services') as $key => $value):?>
                        <section class="<?=$value ?>">
                            <a href="#">
                                <?= $serv[$value]?>
                            </a>
                        </section>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
    <div id="sectionFourth">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 tech">
                    <h1>Used technologies</h1>
                    <?=get_field('technologies') ?>
                </div>
                <div class="col-sm-6 test">
                    <h1>Testimonials</h1>
                    <blockquote>
                        <?=get_field('testimonials') ?>
                        <h3><?=get_field('name') ?></h3>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer() ?>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
