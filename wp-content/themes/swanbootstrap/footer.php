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
        <div class="row footer-row">
            <div class="col-sm-4 col-md-6 col-lg-6 title logo-footer">
            <div class="logo-container">
                <h1 id= 'first-h'>SWAN</h1>

                <div class="title-item">
                    <h2>SOFTWARE</h2>

                    <h2 id= 'second-h'>SOLUTIONS</h2>
                </div>
            </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 direct-contact-footer">
                <address>
                    <ul>
                        <li>Direct Contacts:</li>
                        <li><a href="mailto:info@swansoftwaresolutions.com">info@swansoftwaresolutions.com</a></li>
                        <li>Email Addresses:</li>
                        <li><a href="mailto:sales@swansoftwaresolutions.com">sales@swansoftwaresolutions.com</a> </li>
                        <li><a href="mailto:executive@swansoftwaresolutions.com">executive@swansoftwaresolutions.com</a></li>
                    </ul>
                </address>
            </div>
            <div class="col-sm-3 col-md-2 col-lg-2  direct-lines-footer" id = "camel-line">
                <p>698 Pro-Med Ln,Ste 200 Carmel IN 46032;
            </div>
            <div class="col-sm-3 col-md-2 col-lg-2  direct-lines-footer">
            <div class="direct-line-container">
                <ul>
                    <li>Direct Lines:</li>
                    <li><b>317-691-3806</b></li>
                    <li><b>317-362-9017</b></li>
                    <li><b>317-985-2622</b></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 main-menu-footer">
                <?php wp_nav_menu(getArgsForMainMenu())?>
            </div>
        </div>
    </div>

</footer>

</body>
</html>