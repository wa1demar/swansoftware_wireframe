<?php
/**
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 16.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */?>

</div>
<footer id="mainFooter">
    <?php wp_footer()?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 title">
                <h1>SWAN</h1>

                <div class="title-item">
                    <h2>SOFTWARE</h2>

                    <h2>SOLUTIONS</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <address>
                    <ul>
                        <li>Direct Contacts:</li>
                        <li><a href="#">info@swansoftwaresolutions.com</a></li>
                        <li>Email Addresses:</li>
                        <li><a href="#">sales@swansoftwaresolutions.com</a> </li>
                        <li><a href="#">executive@swansoftwaresolutions.com</a></li>
                    </ul>
                </address>
            </div>
            <div class="col-lg-2">
                <ul>
                    <li>Direct Lines:</li>
                    <li><b>317-691-3806</b></li>
                    <li><b>317-362-9017</b></li>
                    <li><b>317-985-2622</b></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php wp_nav_menu(getArgsForMainMenu())?>
            </div>
        </div>
    </div>

</footer>

<script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/carousel.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/tab.js"></script>
<script>
    $('.carousel1').carousel({
        interval: 5000
    })
</script>
<script>
    $('.carousel2').carousel({
        interval: 5000
    })
</script>
<script>
    $('.carousel3').carousel({
        interval: 5000
    })
</script>

</body>
</html>