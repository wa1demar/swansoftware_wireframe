<script>
    $(document).ready(function () {
      show_mobile('#mobile-container');

    });

    function show_mobile(el){
        change_link('#mobile_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,function(){
                show_staff('#staff-container');
            }
        );

    }

   function show_staff(el){
       change_link('#staff_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,
            function(){
                show_app('#app-container');
            }
        );
    }
    function show_app(el){
        change_link('#app_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,
            function(){
                show_design('#design-container');
            }
        );
    }

   function show_design(el){
       change_link('#design_link');
        $(el).fadeIn().delay(5000).fadeOut(1000,
            function(){
                show_mobile('#mobile-container');
            }
        );
    }



    function change_link(el){
        $('#mobile_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $('#app_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $('#staff_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $('#design_link').attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link.png')
        $(el).attr('src', '<?php bloginfo('template_directory') ?>/assets/img/link_hover.png')
    }




</script>

<div class="info-section carousel slide" id="carousel-example-generic">
    <?php addSocials($bg) ?>
    <!--    <p class="speech" id = 'mobile_speech'>MobileMobileMobileMobile!</p>-->
    <!--    <p class="speech" id = 'staff_speech' >StaffStaffStaffStaff</p>-->
    <!--    <p class="speech" id = 'app_speech'>Application!</p>-->
    <!--    <div id = "design-container">-->
    <!--    <p class="speech" id = 'design_speech'>DesignDesignDesignDesign!</p>-->
    <!--    </div>-->
    <!--    <img id = 'mobile_link' src = "--><?php //bloginfo('template_directory') ?><!--/assets/img/link.png">-->
    <!--    <img id = 'staff_link' src = "--><?php //bloginfo('template_directory') ?><!--/assets/img/link.png">-->
    <!--    <img id = 'app_link' src = "--><?php //bloginfo('template_directory') ?><!--/assets/img/link.png">-->
    <!--    <img id = 'design_link' src = "--><?php //bloginfo('template_directory') ?><!--/assets/img/link.png">-->
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
                <div id="design-container">
                    <p class="speech" id='design_speech'>
                        Swan’s developers and design team
                        work together to provide an effective and alluring UI, while
                        creating a responsive design to reach users anywhere.
                    </p>
                </div>
                <div id="app-container">
                    <p class="speech" id='app_speech'>
                        When you need a SaaS or platform built from scratch,
                        or have multiple systems that don’t communicate,
                        Swan engineers can develop the customizations needed to
                        launch your product or improve your user
                        experience.

                    </p>
                </div>
                <div id="staff-container">
                    <p class="speech" id='staff_speech'>
                        You and Swan match your requirements to our
                        extensive team. Then we manage the employees and workflow,
                        while giving you dedicated employees that add knowledge yet
                        flexibility to your business.

                    </p>
                </div>
                <div id="mobile-container">
                    <p class="speech" id='mobile_speech'>
                        Swan has expertise in both older and current versions
                        of Android and iOS. We can help bring your idea, brand,
                        or information to consumers on the go.


                    </p>
                </div>
                <img id='mobile_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">
                <img id='staff_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">
                <img id='app_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">
                <img id='design_link' src="<?php bloginfo('template_directory') ?>/assets/img/link.png">

                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="getStartedButton">
                            <a href="#">Get Started</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 topBanner item "
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/mobile_m.png') center top no-repeat;">

                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="getStartedButton">
                            <!--                            <a href="#">Get Started</a>-->
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 topBanner item "
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/staff_m.png') center top no-repeat;">

                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="getStartedButton">
                            <!--                            <a href="#">Get Started</a>-->
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 topBanner item"
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/ios_m.png') center top no-repeat;">

                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="getStartedButton">
                            <!--                            <a href="#">Get Started</a>-->
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 topBanner item "
                 style="background: url('<?php bloginfo('template_directory') ?>/assets/img/design_m.png') center top no-repeat;">

                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="getStartedButton">
                            <!--                            <a href="#">Get Started</a>-->
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

