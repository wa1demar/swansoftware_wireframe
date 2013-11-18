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
//if (have_posts()) :
?>
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
        <?php $last_post_ID = get_the_ID() ?>

        <?php $bg = get_bloginfo('template_directory') . '/assets/pics/technology.png' ?>
        <div id='sliderFirst' style="background: url('<?= $bg ?>') center top;">
            <?php addSocials($bg) ?>


            <div class='dark-background'>

                <div class='container'>
                    <div class="row">

                        <div class='col-sm-8 img-background '
                             style="
                                 background: url('<?php echo get_field('image') != "" ? get_field('image') : $default_img ?>') center no-repeat;
                                 background-size: cover
                                 ">
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
                                    <b><a href="<?php the_permalink()?>"><?php the_title() ?></a></b><br/>
                                    <?php the_my_excerpt($post) ?>
                                    <br/>
                                    <a href="<?php the_permalink() ?>">View all +</a>

                                </div>
                            </div>
                        </div>
                        <div class='col-sm-4 form'>
                            <h1 class='title'>Blog & News</h1>

                            <div class='inputs row'>
                                <div class="col-xs-6 col-md-12 news">
                                    <b>Join our Newsletter</b>
                                    <br/>

                                    <form action="http://feedburner.google.com/fb/a/mailverify"
                                          method="post" target="popupwindow"
                                          onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=swansowttest', 'popupwindow', 'scrollbars=yes,width=550,height=520');
                                  return true">
                                        <div class="col-xs-9 input1">
                                            <input type='text' class="form-control " name='email'
                                                   placeholder='Enter your Email address'>
                                            <input type="hidden" value="swansowttest" name="uri"/><input
                                                type="hidden"
                                                name="loc"
                                                value="en_US"/>
                                        </div>
                                        <div class="col-xs-3 go">
                                            <!--                                        <button type="button" class="form-control input_submit" name='submit'>Go-->
                                            <!--                                        </button>-->
                                            <input type="SUBMIT" class="form-control input_submit" value="Go">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xs-6 col-md-12 search">
                                    <form>
                                        <b>Search</b>

                                        <div class="col-xs-12">

                                            <?php get_search_form() ?>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile ?>
<?php endif ?>
<div id='sliderThird'>
    <div class='container'>
        <div class='row'>
            <div class="col-sm-8">
              <?php  $args2 = array(
                'category_name' => 'News',
                'posts_per_page' => 5
                );

//                $p = new WP_Query($args2); ?>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div style="position: relative">
                        <div class='img-container <?php if ($last_post_ID == get_the_ID()) echo("first") ?>'
                             style="background: url('<?php echo get_field('image') != "" ? get_field('image') : $default_img ?>') center no-repeat; background-size: cover">
                            <div class='col-xs-4 round-sign text-center'>
                                <?= get_the_date('M') ?>
                                <h1 class='roud'><?= get_the_date('d') ?></h1>
                                <?= get_the_date('Y') ?>
                            </div>
                            <div class="shadow">
                            </div>

                        </div>
                        <div class='white-footer row'>

                            <div class='col-xs-3'>

                            </div>
                            <div class='col-xs-9'>
                                <b class=topic-sign><a href="<?= get_permalink() ?>"><?php the_title() ?></a></b>
                                <br/>

                                <div class='img-text'>
                                    <?php the_my_excerpt($post) ?>
                                </div>

                                <a class="all" href="<?php the_permalink() ?>">View all +</a>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                    <div class="row">
                        <div class='col-xs-6 text-left '>
                            <div class="prev"><?= get_next_posts_link("Older") ?></div>

                        </div>
                        <div class='col-xs-6 text-right '>
                            <div class="next"><?= get_previous_posts_link("New Posts") ?></div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <?php
                            global $wpdb;
                            $cat = get_cat_ID('News');
                            $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
                            $years = $wpdb->get_results("
                    SELECT DISTINCT YEAR(post_date) as 'year'
	                FROM wp_posts
	                INNER JOIN wp_term_relationships
                    ON (wp_posts.ID = wp_term_relationships.object_id)
                    INNER JOIN wp_term_taxonomy
                    ON (wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id)
                    AND wp_term_taxonomy.taxonomy = 'category'
                    AND wp_term_taxonomy.term_id IN ($cat)
                    where YEAR(post_date) <= $year
                    ORDER BY post_date DESC LIMIT 2");

                            $years = array_reverse($years); ?>

                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <?php if (count($years) > 1) :?>
                                        <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $years[0]->year; ?>/?cat=<?php echo(get_cat_ID('News'))?>"><?php echo $years[0]->year; ?></a></li>
                                    <?php endif; ?>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <?php if (count($years) > 1) :?>
                                        <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $years[1]->year; ?>/?cat=<?php echo(get_cat_ID('News'))?>"><?php echo $years[1]->year; ?></a></li>
                                    <?php else : ?>
                                        <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $years[0]->year; ?>/?cat=<?php echo(get_cat_ID('News'))?>"><?php echo $years[0]->year; ?></a></li>
                                    <?php endif; ?>
                                </div>
                            </div>






                        </div>
                    </div>
<div class="row">
    <div class="col-xs-12 text-center">
        <?php
        $cat = get_cat_ID('News');
        global $wpdb;
        $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
        $months = $wpdb->get_results("
                    SELECT DISTINCT MONTH(post_date) as 'month',  YEAR(post_date) as 'year'
	                FROM wp_posts
	                INNER JOIN wp_term_relationships
                    ON (wp_posts.ID = wp_term_relationships.object_id)
                    INNER JOIN wp_term_taxonomy
                    ON (wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id)
                    AND wp_term_taxonomy.taxonomy = 'category'
                    AND wp_term_taxonomy.term_id IN ($cat)
                    where YEAR(post_date) = $year
                    ORDER BY post_date ASC");
        foreach ($months as $month) :
            ?>
            <li class="archive-month">
                <a  href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>/?cat=<?php echo(get_cat_ID('News'))?>"><span
                        ><?php echo substr(date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)), 0, 1) ?></span></a>
            </li>

        <?php endforeach; ?>

    </div>
</div>



                <?php else : ?>
                    <div id='not_found_section'>
                        <div class='rov'>
                            <div class='coll-xs-12 text-center'>
                                <h3>Not found any results for your request </h3>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-sm-4">
                <p class='tags'>Browse by Tag</p>
                <ul>
                    <?php $tags = get_tags(array('number' => 15)); ?>
                    <?php foreach ($tags as $tag): ?>
                        <li><a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name ?></a></li>
                    <?php endforeach ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php //endif ?>
