$(document).ready(function() {
    $('#strapslide').strapslide({
        animation: "fade, top",
        speed: 1000,
        timeout: 5000,
        responsive: 'resize',
        autoplay: false,
        preload: true,
        pauseOnHover: true,
        pagination: true,
        mousewheel: false,
        keyboard: false,
        touchscreen: false
    }, function() {
        if ($('#strapslide .active').attr('id') == 'slide1') {

            $('#slide1_text1').fxenter('top, scaleup', 500);
            setTimeout(function() {
                $('#slide1_text1').transition({'scale': 2, 'opacity': 0}, 100);
            }, 500);

            setTimeout(function() {
                $('#slide1_text2').fxenter('fade, scaleup', 500);
            }, 700);
            setTimeout(function() {
                $('#slide1_text2').transition({'scale': 2, 'opacity': 0}, 100);
            }, 1200)

            setTimeout(function() {
                $('#slide1_text3').fxenter('fade, scaleup', 500);
            }, 1400);
            setTimeout(function() {
                $('#slide1_text3').transition({'scale': 2, 'opacity': 0}, 100);
            }, 1900)

            setTimeout(function() {
                $('#slide1_text4').fxenter('fade, scaleup', 500);
            }, 2100);

        } else if ($('#strapslide .active').attr('id') == 'slide2') {

            $('#slide2_content').fxenter('fade, rotatecw, scaledown', 500);

        } else if ($('#strapslide .active').attr('id') == 'slide4') {

            $('#slide4_content').fxenter('fade, scaledown', 1000);
            $('#slide4_ufo').fxenter('fade, scaleup', 500);
            setTimeout(function() {
                $('#slide4_ufo').transition({'margin-left': $(window).width() + 400 + 'px'}, 4000)
            }, 500)

        } else if ($('#strapslide .active').attr('id') == 'slide5') {

            $('#slide5_content').fxenter('fade, scaleup, rotateccw', 1000);
            $('#slide5_list').fxenter('fade, scaledown, rotatecw', 1000);
        }

    }, function() {
        if ($('#strapslide .active').attr('id') == 'slide1') {

            $('#slide1_text4').fxexit("fade, scaleup", 300);

        } else if ($('#strapslide .active').attr('id') == 'slide4') {

            $('#slide4_content').fxexit('fade, scaledown', 500);

        }
    });
})