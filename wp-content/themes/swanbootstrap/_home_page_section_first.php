<script>
    $(document).ready(function () {
        show_mobile('#mobile-container');

    });

    function show_mobile(el) {
        change_link('#mobile_link');
        $(el).fadeIn().delay(5000).fadeOut(1000, function () {
                show_staff('#staff-container');
            }
        );

    }

    function show_staff(el) {
        change_link('#staff_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,
            function () {
                show_app('#app-container');
            }
        );
    }
    function show_app(el) {
        change_link('#app_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,
            function () {
                show_design('#design-container');
            }
        );
    }

    function show_design(el) {
        change_link('#design_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,
            function () {
                show_mobile('#mobile-container');
            }
        );
    }


    function change_link(el) {
        $('#mobile_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $('#app_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $('#staff_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $('#design_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $(el).attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link_hover.png')
    }


</script>

<div class="info-section carousel slide" id="carousel-example-generic">
<?php addSocials($bg) ?>
<div class="dark-section topBannerLinks">
    <div class="row" style="margin: 0">
        <div class="col-lg-12">
            <div class="container ">
                <div class="col-lg-12">
                    <div class="row ">
                        <div class='col-xs-12 text-center'>
                            <h1>Make your business better with us</h1>
                            <a style="width: auto" href="<?= get_permalink(get_page_by_title('Get Started')) ?>" class="blue_btn st">Get Started</a>

                        </div>
                    </div>
                    <div class="row myIndicators">
                        <ul >
                            <li class="mobile">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_title('Mobile Application Development'))); ?>">Mobile Development</a></li>
                            <li class="staff"><a href="<?php echo esc_url(get_permalink(get_page_by_title('Staff Augmentation'))); ?>" >Staf
                                    Augmentation</a></li>
                            <li class="app"><a href="<?php echo esc_url(get_permalink(get_page_by_title('Custom Application Development'))); ?>" >Custom
                                    Application Development</a></li>
                            <li class="design"><a href="<?php echo esc_url(get_permalink(get_page_by_title('Design'))); ?>" >Design</a>
                            </li>
                            <!--<li class="marketing"><a href="#">Internet Marketing</a></li>-->
                        </ul>

                        <div class="box col-sm-3 col-xs-3 text-center">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Mobile Application Development'))); ?>" data-target="#carousel-example-generic" data-slide-to="1" class="active">
                                <div class="round_image text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/img/service1_115x100.png">
                                </div>

                                <p>Mobile Development</p>
                            </a>
                        </div>
                        <div class="box col-sm-3 col-xs-3 text-center">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Staff Augmentation'))); ?>" data-target="#carousel-example-generic" data-slide-to="2">
                                <div class="round_image">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/img/service2_115x100.png">
                                </div>

                                <p>Staff Augmentation</p>
                            </a>
                        </div>
                        <div class="box col-sm-3 col-xs-3 text-center">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Custom Application Development'))); ?>" data-target="#carousel-example-generic" data-slide-to="3">
                                <div class="round_image">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/img/service3_115x100.png">
                                </div>

                                <p>Custom Application Development</p>
                            </a>
                        </div>
                        <div class="box col-sm-3 col-xs-3 text-center">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Design'))); ?>" data-target="#carousel-example-generic" data-slide-to="4">
                                <div class="round_image">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/img/service4_115x100.png">
                                </div>

                                <p>Design</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row carousel-inner">
        <div class="col-lg-12 topBanner all item active">

            <div id="design-container">


                <p class="speech" id='design_speech'>
                    <span>Industry Solutions</span>
                    <br/>
                    Professional team 75 developers with HQ in the USA
                </p>
            </div>
            <div id="app-container">


                <p class="speech" id='app_speech'>
                    <span> Professional Team</span>
                    <br/>
                    More than 7 years of working experience

                </p>
            </div>
            <div id="staff-container">
                <p class="speech" id='staff_speech'>
                    <span>Direct Communication</span>
                    <br/>

                    Own education system for new employees


                </p>
            </div>
            <div id="mobile-container">
                <p class="speech" id='mobile_speech'>
                    <span>Latest Technologies</span>
                    <br/>
                    Direct contact with Project Manager and Development Team


                </p>
            </div>
            <img id='mobile_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">
            <img id='staff_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">
            <img id='app_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">
            <img id='design_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">


            <div class="row ">
                <div class="col-lg-12 text-center">
                    <div class="getStartedButton">
                        <a href="<?= get_permalink(get_page_by_title('Get Started')) ?>">Get Started</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-12 topBanner mobile item ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="cloud" style="">
                        <h3 style=""><a
                                href="<?php echo esc_url(get_permalink(get_page_by_title('Mobile Application Development'))); ?>"
                                style="color: #ffffff;">Mobile Development</a></h3>

                        <p style="">Swan has expertise in both older and current versions of Android
                            and iOS. We can help
                            bring your idea, brand, or information to consumers on the go.</p>
                        <!--                            <div class="more" style="font-size: 120%; text-align: right"><a href="#">Read more about this service</a></div>-->

                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-12 topBanner staff item ">


            <div class="row">
                <div class="col-lg-12">
                    <div class="cloud" style="">
                        <h3 style=""><a
                                href="<?php echo esc_url(get_permalink(get_page_by_title('Staff Augmentation'))); ?>"
                                style="color: #ffffff;">Staff Augmentation</a></h3>

                        <p style="">You and Swan match your requirements to our extensive team. Then
                            we manage the employees and workflow, while giving you dedicated employees that add
                            knowledge yet flexibility to your business.
                        </p>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12 topBanner custom item">


            <div class="row">
                <div class="col-lg-12">
                    <div class="cloud" style="">
                        <h3 style=""><a
                                href="<?php echo esc_url(get_permalink(get_page_by_title('Custom Application Development'))); ?>"
                                style="color: #ffffff;">Custom Application Development</a></h3>

                        <p style="">When you need a SaaS or platform built from scratch, or have
                            multiple systems that don’t communicate, Swan engineers can develop the customizations
                            needed to launch your product or improve your user
                            experience.

                        </p>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12 topBanner design item ">


            <div class="row">
                <div class="col-lg-12">
                    <div class="cloud" style="">
                        <h3 style=""><a
                                href="<?php echo esc_url(get_permalink(get_page_by_title('Design'))); ?>"
                                style="color: #ffffff;">Design</a></h3>

                        <p style="font-size: 152%">Swan’s developers and design team work together to provide an
                            effective and alluring UI, while creating a responsive design to reach users anywhere.

                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
<div class="team text-center">
    <a style='color: #ffffff;
        font-size: 270%;
        background-size: contain;
        background: url("<?php bloginfo('template_directory') ?>/assets/img/right-arrow2.png") right center no-repeat;
        padding-right: 55px '
       href="<?= get_permalink(get_page_by_title('Company')) ?>"><span>Meet Our Superhero Team</span></a>
</div>
<script>
function activateLinks() {
    s_width = $('body').width();
    if (s_width <= 600) {
        $('.box a').removeAttr('data-target');
    } else {
        $('.box a').attr('data-target', '#carousel-example-generic');
    }
}

$(window).resize(function() {
    activateLinks();
});

$(window).resize(activateLinks());
$(document).onload(activateLinks());
</script>