<?php
/**
 * Template Name: Contact Us Template
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 18.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>

<?php get_header()?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <div id="sliderFirst" style="background:  url('<?= $bg ?>') center top repeat;">
        <div class="info-section">
            <?php addSocials($bg)?>

            <div class="row dark-background">

                <div class="col-lg-12 text-center background">

                    <div class="col-lg-12  contact-text-phone ">
                        <div class='container'>
                            <h1>Contact us</h1>

                            <div class="col-sm-5 text-section">
                                <div class="text-left" >
                                    <b>Corporate Headquarters </b>

                                    <div class='text'>
                                        698 Pro-med Ln, Ste 200 Carmel IN 46032
                                    </div>
                                    <b>Drect Lines </b>

                                    <div class='text'>
                                        317-691-3806
                                        <br/>
                                        317-362-9017
                                    </div>
                                    <b>Email addresses </b>

                                    <div class='text'>
                                        info@swansoftwaresolutions.com
                                        <br/>
                                        sales@swansoftwaresolutions.com
                                        <br/>
                                        executive@swansoftwaresolutions.com
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-7 form-section">
                                <form>
                                    <div class="row">
                                        <div class="col-xs-3 label">
                                            Name


                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
                                        </div>
                                        <div class="col-xs-8"><input type="text" placeholder="  John Doe...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3 label">
                                            Email

                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text"
                                                   placeholder="johndoe@jahoo.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3 label">
                                            Comment


                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/comment.png">
                                        </div>
                                        <div class="col-xs-8"><textarea
                                                placeholder="  Type your messahe here..."></textarea>
                                        </div>
                                    </div>
                                    <a href="#" class="blue_btn small">Send</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sliderSecond">
        <div class='section'>

        </div>
    </div>
<?php endwhile; ?>
<?php get_footer()?>