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


<?php get_header() ?>



<?php while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <script>
        $(function () {

            if (!$('#contact_us_alert').length == 0) {


                if ($.trim($('#contact_us_alert').html()) === 'Bad email') {

                    $('.form-email').addClass('has-error');
                    $('.email.error-sign').css('display', 'block');

                }

                if ($.trim($('#contact_us_alert').html()) === "Name can't be blank") {

                    $('.form-name').addClass('has-error');
                    $('.name.error-sign').css('display', 'block');



                }

                if ($.trim($('#contact_us_alert').html()) === "Comment can't be blank") {

                    $('.form-comment').addClass('has-error');
                    $('.comment.error-sign').css('display', 'block');



                }
            }


        })

    </script>
    <div id="sliderFirst" style="background:  url('<?= $bg ?>') center top repeat;">
        <div class="info-section">
            <?php addSocials($bg) ?>
            <?php foreach (Flash::$messages as $id => $msg) : ?>


                <div class="flash_<?php echo $id ?> alert alert-info alert-dismissable" id='contact_us_alert'>

                    <?php echo $msg ?>
                </div>
            <?php endforeach; ?>

            <div class="row dark-background">

                <div class="col-lg-12 text-center background">

                    <div class="col-lg-12  contact-text-phone ">
                        <div class='container'>
                            <h1>Contact us</h1>

                            <div class="col-sm-5 text-section">
                                <div class="text-left">
                                    <b>Corporate Headquarters </b>

                                    <div class='text'>
                                        698 Pro-med Ln, Ste 200 Carmel IN 46032
                                    </div>
                                    <b>Direct Lines </b>

                                    <div class='text'>
                                        317-691-3806
                                        <br/>
                                        317-985-2622
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
                                <form action="<?= esc_url(get_permalink(get_page_by_title('Thank you'))) ?>"
                                      method='POST'>
                                    <div class="row">
                                        <div class='name error-sign'>Name can't be blank</div>

                                        <!--                                        <input name="email" id="email" type="text" validate="required|email|usercheck"/>-->

                                        <div class="col-xs-3 label ">
                                            Name


                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
                                        </div>
                                        <div class="col-xs-8 form-name "><input type="text" name='name_c' required="required"
                                                                       class=' form-control' id="inputError"
                                                                       placeholder="  John Doe...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class='email error-sign'>Bad email</div>
                                        <div class="col-xs-3 label">
                                            Email

                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
                                        </div>
                                        <div class="col-xs-8 form-email ">
                                            <input type="email" name='email_c'  required="required"
                                                   class=' form-control' placeholder="johndoe@jahoo.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class='comment error-sign'>Comment can't be blank</div>
                                        <div class="col-xs-3 label">
                                            Comments


                                            <img src="<?php bloginfo('template_directory') ?>/assets/img/comment.png">
                                        </div>
                                        <div class="col-xs-8 form-comment"><textarea name='comment_c' required="required"
                                                                                     class=' form-control'  placeholder="  Type your messahe here..."></textarea>
                                        </div>
                                    </div>
                                    <input   type='submit' class="blue_btn small submit" name='submit_contact_us'
                                           value='Send'>
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
<?php get_footer() ?>