<?php
/**
 * Template Name: index
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 28.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php $default_img = get_bloginfo('template_directory') . '/assets/img/blog-1.png' ?>
<?php $last_post_ID = 0; ?>
<?php $c = 1;
if (have_posts()) : ?>
    <?php
    $args = array(
        // Change these category SLUGS to suit your use.
        'category_name' => 'News',
        'posts_per_page' => 1
    );

    $last_post = new WP_Query($args);
    ?>
    <?php if ($last_post->have_posts()) : ?>
        <?php while ($last_post->have_posts()) : $last_post->the_post(); ?>
            <?php $last_post_ID = get_the_ID()?>

            <?php $bg = get_bloginfo('template_directory') . '/assets/pics/technology.png' ?>
            <div id='sliderFirst' style="background: url('<?= $bg ?>') center top;">
                <?php addSocials($bg) ?>


                <div class='row  darck-background'>
                    <div class='container'>
                        <div class='col-sm-8 img-background '
                             style="background: url('<?php echo get_field('image') != "" ? get_field('image') : $default_img ?>') center no-repeat; background-size: 97% 100%"">
                            <div class='col-xs-4 round-sign text-center'>
                                <?= get_the_date('M') ?>
                                <h1 class='roud'><?= get_the_date('d') ?></h1>
                                <?= get_the_date('Y') ?>
                            </div>
                            <div class="shadow">
                            </div>
                            <div class='white-footer row'>


                                <div class='col-xs-3'>

                                </div>
                                <div class='col-xs-9'>
                                    <b><?php the_title() ?></b><br/>
                                    <?php the_my_excerpt($post) ?>
                                    <br/>
                                    <a href="<?php the_permalink() ?>">View all +</a>

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
                                        <button type="button" class="form-control input_submit" name='submit1'>Go
                                        </button>
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
        <?php endwhile ?>
    <?php endif ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if ($last_post_ID != get_the_ID()): ?>
            <div id='sliderTried'>
                <div class='container'>
                <div class='row'>

                        <div class='col-sm-8 img-container'
                             style="background: url('<?php echo get_field('image') != "" ? get_field('image') : $default_img ?>') center no-repeat; background-size: 97% 100%">
                            <div class='col-xs-4 round-sign text-center'>
                                <?= get_the_date('M') ?>
                                <h1 class='roud'><?= get_the_date('d') ?></h1>
                                <?= get_the_date('Y') ?>
                            </div>
                            <div class="shadow">
                            </div>
                            <div class='white-footer row'>

                                <div class='col-xs-3'>

                                </div>
                                <div class='col-xs-9'>
                                    <b class=topic-sign><?php the_title() ?></b>
                                    <br/>

                                    <div class='img-text'>
                                        <?php the_my_excerpt($post) ?>
                                    </div>

                                    <a href="<?php the_permalink() ?>">View all +</a>

                                </div>
                            </div>


                        </div>
                        <div class='col-sm-4 menu'>
                            <?php if ($c == 1): ?>
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
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $c++; ?>
        <?php endif ?>
    <?php endwhile; ?>
    <div id='sectionFifth'>
        <div class='container'>
        <div class='row'>

                <div class='col-xs-8'>
                    <div class="row">
                        <div class='col-xs-6 text-left '>
                            <div class="prev"><?= get_next_posts_link("Older") ?></div>

                        </div>
                        <div class='col-xs-6 text-right '>
                            <div class="next"><?= get_previous_posts_link("New Posts") ?></div>

                        </div>
                        </div>
                    <div class='row'>
                        <div class='col-xs-6 text-left '>

                            <a href='#' class='year'>2012 </a>
                        </div>
                        <div class='col-xs-6 text-right '>

                            <a href='#' class='year'>2013 </a>
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
<?php endif ?>