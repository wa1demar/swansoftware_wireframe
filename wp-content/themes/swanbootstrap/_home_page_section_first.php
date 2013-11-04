<div class="info-section carousel slide" id="carousel-example-generic">
    <?php addSocials($bg) ?>
    <div class="dark-section topBannerLinks">
        <div class="container ">

            <div class="row ">
                <div class='col-xs-12 text-center'>
                    <h1>Make your business better with us</h1>

                </div>
            </div>
            <div class="row ">

                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="#" data-target="#carousel-example-generic" data-slide-to="1" class="active">
                        <div class="round_image text-center">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service1_115x100.png">
                        </div>

                        <p>Mobile Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="#" data-target="#carousel-example-generic" data-slide-to="2">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service2_115x100.png">
                        </div>

                        <p>Staff Augmentation</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="#" data-target="#carousel-example-generic" data-slide-to="3">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service3_115x100.png">
                        </div>

                        <p>Custom Application Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="#" data-target="#carousel-example-generic" data-slide-to="4">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service4_115x100.png">
                        </div>

                        <p>Design</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row carousel-inner">
            <div class="col-lg-12 topBanner item active"
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/all_m.png') center top no-repeat;">

                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="getStartedButton">
                            <a href="<?= get_permalink(get_page_by_title('Get Started')) ?>"><img
                                    src="<?php bloginfo('template_directory') ?>/assets/img/get_started_button.png"></a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 topBanner item "
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/mobile_m.png') center top no-repeat;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cloud" style="top: 45px; width: 600px; left: 230px; position: absolute; ">
                            <h3 style="margin-bottom: 30px; font: 250% normal 'Open Sans Light'; "><a href="<?php echo esc_url(get_permalink(get_page_by_title('Mobile Application Development'))); ?>" style="color: #ffffff;">Mobile Development</a></h3>

                            <p style="font-size: 152%">Swan has expertise in both older and current versions of Android and iOS. We can help
                                bring your idea, brand, or information to consumers on the go.</p>
<!--                            <div class="more" style="font-size: 120%; text-align: right"><a href="#">Read more about this service</a></div>-->
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-12 topBanner item "
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/staff_m.png') center top no-repeat;">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="cloud" style="top: 65px; width: 600px; left: 260px; position: absolute;">
                            <h3 style="margin-bottom: 18px; font: 250% normal 'Open Sans Light'; "><a href="<?php echo esc_url(get_permalink(get_page_by_title('Staff Augmentation'))); ?>" style="color: #ffffff;">Staff Augmentation</a></h3>

                            <p style="font-size: 152%">You and Swan match your requirements to our extensive team. Then we manage the employees and workflow, while giving you dedicated employees that add knowledge yet flexibility to your business.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 topBanner item"
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/ios_m.png') center top no-repeat;">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="cloud" style="top: 41px; width: 600px; left: 270px; position: absolute;">
                            <h3 style="margin-bottom: 18px; font: 250% normal 'Open Sans Light'; "><a href="<?php echo esc_url(get_permalink(get_page_by_title('Custom Application Development'))); ?>" style="color: #ffffff;">Custom Application Development</a></h3>

                            <p style="font-size: 152%">When you need a SaaS or platform built from scratch, or have multiple systems that don’t communicate, Swan engineers can develop the customizations needed to launch your product or improve your user
                                experience.

                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 topBanner item "
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/design_m.png') center top no-repeat;">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="cloud" style="top: 45px; width: 600px; left: 295px; position: absolute;">
                                <h3 style="margin-bottom: 30px; font: 250% normal 'Open Sans Light'; "><a href="<?php echo esc_url(get_permalink(get_page_by_title('Design'))); ?>" style="color: #ffffff;">Design</a></h3>

                            <p style="font-size: 152%">Swan’s developers and design team work together to provide an effective and alluring UI, while creating a responsive design to reach users anywhere.

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="team text-center" >
    <a style='color: #ffffff;
        font-size: 270%;
        background-size: contain;
        background: url("<?php bloginfo('template_directory') ?>/assets/img/right-arrow2.png") right center no-repeat;
        padding-right: 55px '
       href="<?= get_permalink( get_page_by_title( 'Company' ) )?>">Meet Our Superhero Team</a>
</div>
