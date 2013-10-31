<?php
/**
 *
 * Template Name: Get Started
 *
 * Created by JetBrains PhpStorm.
 * @author: Viktor
 * @date: 10/17/13
 *
 */
?>
<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/service_form/main.css"/>
<div id='sliderFirst'>
    <?php $bg_image = "../'assets/pics/technology.png" ?>
    <?php require "_social.php" ?>

    <div class='row darck-background'>
        <div class="container text-center">
            <div class="row">
                <div class='col-xs-5  text-right'>
                    <img
                        src="<?php bloginfo('template_directory') ?>/assets/img/form_icon.png">
                </div>

                <div class='col-xs-7 text-left'>
                    <div class='text'>
                        Complete the inquiry form below
                        <br/>
                        and we will get back to you with our Proposal.
                    </div>
                    <b>Or call us: 317-691-3806</b>
                </div>
            </div>
        </div>
    </div>
</div>
<form>
    <div id='sliderSecond'>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12  text-center '>
                    <h1>What service you prefer?</h1>


                    <div class='check-box-container-form row'>


                        <div class='label-block col-sm-2'>
                            <input id="demo_box_1" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_1" name="demo_lbl_1" class="css-label"> Mobile Aplication</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_2" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_2" name="demo_lbl_2" class="css-label"> Staff Augmentation</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_3" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_3" name="demo_lbl_3" class="css-label"> Custom Application
                                Development</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_4" class="css-checkbox " type="checkbox"/>
                            <label for="demo_box_4" name="demo_lbl_4" class="css-label design"> Design</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_5" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_5" name="demo_lbl_5" class="css-label"> Internet Marketing</label>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id=sectionThried>
        <div class='container'>
            <div class=row>


                <div class='client-form col-sm-6'>
                    <div class="row">
                        <div class="col-xs-3 label necessary-field">
                            <label class="required">Name</label>
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
                        </div>
                        <div class="col-xs-9"><input type="text" placeholder="  John Doe...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 label necessary-field">
                            <label class="required">Email</label>
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
                        </div>
                        <div class="col-xs-9">
                            <input type="email"
                                   placeholder="  johndoe@jahoo.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 label">
                            Phone
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/phone.png">
                        </div>
                        <div class="col-xs-9">
                            <input type=""
                                   placeholder="  +7 (987) 654-32-10">
                        </div>
                    </div>
                </div>
                <div class='client-form col-sm-6'>


                    <div class="row comment-div">
                        <div class="col-xs-4 label comment-label necessary-field">
                            <label class="required">Comment</label>
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/comment.png">
                        </div>
                        <div class="col-xs-8 "><textarea
                                placeholder="  Type your messahe here..."></textarea>
                        </div>
                    </div>
                    <a href="#" class="blue_btn small link">Send</a>
                </div>
            </div>

        </div>
    </div>

</form>

<?php get_footer() ?>


