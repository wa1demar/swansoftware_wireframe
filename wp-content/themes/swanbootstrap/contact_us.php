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
<?php include 'flash.php'; ?>
<?php get_header()?>


<?php while ( have_posts() ) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <div id="sliderFirst" style="background:  url('<?= $bg ?>') center top repeat;">
        <div class="info-section">
            <?php addSocials($bg)?>
            <?php foreach( Flash::$messages as $id => $msg ) : ?>


                <div class="flash_<?php echo $id ?> alert alert-info alert-dismissable" id = 'contact_us_alert'>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $msg ?>
                </div>
            <?php endforeach; ?>

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
                                <form action="<?=esc_url(get_permalink(get_page_by_title('Thank you')))?>"  method = 'POST'>
                                    <div class="row">
                                        <div class="col-xs-3 label">
                                            Name


                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
                                        </div>
                                        <div class="col-xs-8"><input type="text" name = 'name_c'
                                                         placeholder="  John Doe...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3 label">
                                            Email

                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" name = 'email_c'
                                                   placeholder="johndoe@jahoo.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3 label">
                                            Comment


                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/comment.png">
                                        </div>
                                        <div class="col-xs-8"><textarea name = 'comment_c'
                                                placeholder="  Type your messahe here..."></textarea>
                                        </div>
                                    </div>
                                    <input type = 'submit' class="blue_btn small submit" name = 'submit_contact_us' value = 'Send'>
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