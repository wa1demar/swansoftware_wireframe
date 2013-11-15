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
<?php include 'flash.php'; ?>
<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/service_form/main.css"/>
<script>
    $(function(){
        $(".check-box-container-form input").attr("checked","checked");
        $(".check-box-container-form input").removeAttr('checked');


//       $(".check-box-container-form input").click(function(){
//           $(".check-box-container-form input").removeAttr('checked');
//           $(this).prop('checked', true);
//
//
//       });

    });
</script>
<?php $bg = get_field('background') != "" ? get_field('background') : getDefaultBG(); ?>
<script>
    $(function () {

        if (!$('#contact_us_alert').length == 0) {


            if ($.trim($('#contact_us_alert').html()) === 'Bad email') {

                $('.form-email').addClass('has-error');
                $('.email.error-sign').css('display', 'block');
                $('.row.email').css('padding-bottom', '20px');
                $('.has-error .form-control').css('border',"1px solid #b94a48" );
                set_start_value();
            }

            if ($.trim($('#contact_us_alert').html()) === "Name can't be blank") {

                $('.form-name').addClass('has-error');
                $('.name.error-sign').css('display', 'block');
                $('.row.name').css('padding-bottom', '20px');

                $('.has-error .form-control').css('border',"1px solid #b94a48" );
                set_start_value();

            }

            if ($.trim($('#contact_us_alert').html()) === "Comment can't be blank") {

                $('.form-comment').addClass('has-error');
                $('.comment.error-sign').css('display', 'block');
                $('.has-error .form-control').css('border',"1px solid #b94a48" );
                set_start_value();

            }
        }
        function set_start_value(){
            $('#comment-input').val($.trim($('.comment_p').html()));
            $('#email-input').val($.trim($('.email_p').html()));
            $('#name-input').val($.trim($('.name_p').html()));
            $('#phone-input').val($.trim($('.phone_p').html()));

            set_services();


        }
        function set_services(){


//
            if($('.services').html().match(/Mobile Aplication/)!==null){
                $('#demo_box_1').prop('checked', true);
            }
            if($('.services').html().match(/Staff Augmentation/)!==null){
                $('#demo_box_2').prop('checked', true);
            }
            if($('.services').html().match(/Custom Application Development/)!==null){
                $('#demo_box_3').prop('checked', true);
            }
            if($('.services').html().match(/Design/)!==null){
                $('#demo_box_4').prop('checked', true);
            }
            if($('.services').html().match(/Internet Marketing/)!==null){
                $('#demo_box_5').prop('checked', true);
            }
        }


    })

</script>

<div id='sliderFirst' style="background: url('<?= $bg ?>') center top ;">

    <?php addSocials($bg) ?>

    <div class='row darck-background'>
        <div class="container text-center">
            <div class="row">
                <div class='col-sm-5  text-right'>
                    <img
                        src="<?php bloginfo('template_directory') ?>/assets/img/form_icon.png">
                </div>

                <div class='col-sm-7 text-left'>
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
<form action="<?=esc_url(get_permalink(get_page_by_title('Thank you')))?>"  method = 'POST'>
    <div id='sliderSecond'>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12  text-center '>
                    <h1>What service you prefer?</h1>


                    <div class='check-box-container-form row'>


                        <div class='label-block col-sm-2'>
                            <input id="demo_box_1" name="service[0]" value="Mobile Aplication"  value="ie" class="css-checkbox"  checked type="checkbox"/>
                            <label for="demo_box_1" name="demo_lbl_1" class="css-label"> Mobile Aplication</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_2" name="service[1]" value="Staff Augmentation" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_2" name="demo_lbl_2" class="css-label"> Staff Augmentation</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_3" name="service[3]" value="Custom Application Development" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_3" name="demo_lbl_3" class="css-label"> Custom Application
                                Development</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_4" name="service[4]" value="Design" class="css-checkbox " type="checkbox"/>
                            <label for="demo_box_4" name="demo_lbl_4" class="css-label design"> Design</label>
                        </div>
                        <div class='label-block col-sm-2'>
                            <input id="demo_box_5" name="service[5]" value="Internet Marketing" class="css-checkbox" type="checkbox"/>
                            <label for="demo_box_5" name="demo_lbl_5" class="css-label"> Internet Marketing</label>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id=sectionThried>
        <?php foreach (Flash::$messages as $id => $msg) : ?>


            <div class="<?php echo $id ?> alert alert-info alert-dismissable" id='contact_us_alert'>

                <?php echo $msg ?>
            </div>
        <?php endforeach; ?>
        <div class='container'>
            <div class=row>



                <div class='client-form col-sm-6'>
                    <div class="row name">
                        <div class="col-xs-3 label necessary-field">
                            <label class="required">Name</label>
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
                        </div>
                        <div class="col-xs-9 form-name">
                            <div class='name error-sign'>Name can't be blank</div>
                            <input required="required" id ='name-input' class=' form-control' type="text" name = 'name_n'   placeholder="  John Doe...">
                        </div>
                    </div>
                    <div class="row email">
                        <div class="col-xs-3 label necessary-field">
                            <label class="required">Email</label>
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
                        </div>
                        <div class="col-xs-9 form-email">
                            <div class='email error-sign'>Bad email</div>
                            <input  id ='email-input' class=' form-control' type="email"  name = 'email_n' required="required"
                                   placeholder="  johndoe@jahoo.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 label">
                            Phone
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/phone.png">
                        </div>
                        <div class="col-xs-9 form-phone">

                            <input id = 'phone-input' type="text" name = 'phone_n'
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
                        <div class="col-xs-8 form-comment">
                            <div class='comment error-sign'>Comment can't be blank</div>
                            <textarea id ='comment-input' name = 'comment_n' class=' form-control' required="required"
                                placeholder="  Type your message here..."></textarea>
                        </div>
                    </div>
                    <input  type = 'submit' class="blue_btn small submit " name = 'submit_service_form' value = 'Send'>

                </div>
            </div>

        </div>
    </div>

</form>


<?php get_footer() ?>


