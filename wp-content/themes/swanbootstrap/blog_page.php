<?php
/**
 * Template Name: Blog Page
 *
 * Created by PhpStorm.
 * @author: viktor
 * @date: 18.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/blog_page/main.css"/>
<div id='sliderFirst'>
    <?php $bg_image = "../'assets/pics/technology.png" ?>
    <?php require "_social.php" ?>

    <div class='row  darck-background'>
        <div class='container'>
            <div class='col-sm-8 img-background '>
                <div class='col-xs-4 round-sign text-center'>
                    Sep
                    <h1 class='roud'>11</h1>
                    2013
                </div>

                <div class='white-footer row'>

                    <div class='col-xs-3'>

                    </div>
                    <div class='col-xs-9'>
                        <b>Our Top Ten for Design Inspiration</b>
                        <br/>
                        Every week at Fueled, uor London-based lead designer Rob Palmer shares a handful of
                        inspirational websites
                        with our teams in New York and ...
                        <br/>
                        <br/>
                        <a href="#">View all +</a>

                    </div>
                </div>
            </div>
            <div class='col-sm-4'>
                <h1 class='title'>Blog & News</h1>

                <form>
                    <div class='inputs row'>
                        <b>Join our Newsletter</b>
                        <br/>

                        <div class="col-xs-9 input1">
                            <input type='text' class="form-control " name='input1'
                                   placeholder='Enter your Email address'>
                        </div>
                        <div class="col-xs-3">
                            <button type="button" class="form-control input_submit" name='submit1'>Go</button>
                        </div>
                        <b>Search</b>

                        <div class="col-xs-12">

                            <input type='input' class="form-control" name='input1'
                                   placeholder='What are you searching for?'>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div id='sectionSecond'>
<div class='container'>
<div class='row'>
<div class="col-xs-8 ">
<div class="col-xs-12 text-right">


    <ul class="horizontal top-social-icons  ">


        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/fb.png"/></a>
        </li>
        <li><a href="#"><img
                    src="<?php bloginfo('template_directory') ?>/assets/img/tw.png"/></a>
        </li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/gp.png"/></a>
        </li>
        <li><a href="#"><img
                    src="<?php bloginfo('template_directory') ?>/assets/img/li.png"/></a>
        </li>
    </ul>

</div>

<div class="col-xs-12 text-left text-content">
    <p>
        Мова РНР здаватиметься знайомою програмістам, що працюють в різних областях. Багато конструкцій
        мови запозичені з С, Perl. Код РНР дуже схожий на той, який зустрічається в типових програмах на
        С або Pascal. Це помітно знижує початкові зусилля при вивченні РНР. PHP — мова, що поєднує
        переваги Perl і С і спеціально спрямована на роботу в Інтернеті, мова з універсальним і
        зрозумілим синтаксисом. І хоча PHP є досить молодою мовою, вона здобула таку популярність серед
        web-програмістів, що в наш час є мало не найпопулярнішою мовою для створення веб-застосунків
        (скриптів)
    </p>
    <br/>

    <p>
        Наявність вихідного коду та безкоштовність
        Стратегія Open Source, і розповсюдження початкових текстів програм в масах, безсумнівно справили
        благотворний вплив на багато проектів, в першу чергу — Linux хоч і успіх проекту Apache сильно
        підкріпив позиції прихильників Open Source. Сказане відноситься і до історії створення РНР,
        оскільки підтримка користувачів зі всього світу виявилася дуже важливим чинником в розвитку
        проекту РНР.

    </p>
    <br/>

    <p>
        Ухвалення стратегії Open Source і безплатне розповсюдження початкових текстів РНР надало
        неоціниму послугу користувачам. Додатково, користувачі РНР в усьому світі є свого роду
        колективною службою підтримки, і в популярних електронних конференціях можна знайти відповіді
        навіть на найскладніші питання.
        Ефективність

    </p>
    <br/>

    <p>
        Ефективність є дуже важливим чинником при програмуванні для середовищ розрахованих на багато
        користувачів, до яких належить і web. Важливою перевагою PHP є те, що ця мова належить до
        інтерпретованих. Це дозволяє обробляти сценарії з достатньо високою швидкістю. За деякими
        оцінками, більшість PHP-сценаріїв (особливо не дуже великих розмірів) обробляються швидше за
        аналогічні їм програми, написані на Perl. Проте, щоб не робили розробники PHP, виконувані файли,
        отримані за допомогою компіляції, працюватимуть значно швидше — в десятки, а іноді і в сотні
        разів. Але продуктивність PHP цілком достатня для створення цілком серйозних веб-застосунків.

    </p>

    <div class=content-footer>
        <div class=' row score-icon'>
            <div class=' col-xs-6 text-left rating-row'>

                <ul class="horizontal rating  ">

                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/raiting-star.png"/></a>
                    </li>
                </ul>
            </div>
            <div class=' col-xs-6 text-right'>
                <ul class="horizontal social-icons ">


                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/fb.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/tw.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/gp.png"/></a>
                    </li>
                    <li><a href="#"><img
                                src="<?php bloginfo('template_directory') ?>/assets/img/li.png"/></a>
                    </li>
                </ul>

            </div>

            <ul class="horizontal tags ">

                <li><span>Tags:</span>
                </li>

                <li><a href="#">Web design</a>
                </li>
                <li><a href="#">UX/UI</a>
                </li>
                <li><a href="#">Design</a>
                </li>
                <li><a href="#">Internet Marketing</a>
                </li>
                <li><a href="#">SEOSMM</a>
                </li>
            </ul>


        </div>
    </div>
</div>
<div class='row related-articles'>
    <div class="col-xs-12  text-center">
        <h2>Related articles</h2>
    </div>
    <div class="col-xs-4  text-left">
        <img src="<?php bloginfo('template_directory') ?>/assets/pics/sity-page.png">

        <p>Our Top Ten for Design Inspiration</p>

        <div class=text>
            неоціниму послугу користувачам. Додатково, користувачі РНР в усьому світі є свого роду
            колективною службою підтримки, і в популярних електронних конференціях можна знайти відповіді
            навіть на найскладніші питання.

        </div>

    </div>
    <div class="col-xs-4  text-left">
        <img src="<?php bloginfo('template_directory') ?>/assets/pics/page-2.png">

        <p>Our Top Ten for Design Inspiration</p>

        <div class=text>
            неоціниму послугу користувачам. Додатково, користувачі РНР в усьому світі є свого роду
            колективною службою підтримки, і в популярних електронних конференціях можна знайти відповіді
            навіть на найскладніші питання.


        </div>

    </div>
    <div class="col-xs-4  text-left">
        <img src="<?php bloginfo('template_directory') ?>/assets/pics/page-3.png">

        <p>Our Top Ten for Design Inspiration</p>

        <div class=text>
            неоціниму послугу користувачам. Додатково, користувачі РНР в усьому світі є свого роду
            колективною службою підтримки, і в популярних електронних конференціях можна знайти відповіді
            навіть на найскладніші питання.

        </div>
    </div>
</div>
<div class="col-xs-12  text-center form-content">
    <h2>Don't forget to leave a comment</h2>

    <form>
        <div class="row">
            <div class="col-xs-4 label">
                Name
                <img src="<?php bloginfo('template_directory') ?>/assets/img/name.png">
            </div>
            <div class="col-xs-8"><input type="text" placeholder="  John Doe...">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 label">
                Email
                <img src="<?php bloginfo('template_directory') ?>/assets/img/email.png">
            </div>
            <div class="col-xs-8">
                <input type="text" type='text' placeholder="  johndoe@jahoo.com">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 label">
                Comment
                <img src="<?php bloginfo('template_directory') ?>/assets/img/comment.png">
            </div>
            <div class="col-xs-8">
                <textarea placeholder="  Type your messahe here..."></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 ">
            </div>
            <div class="col-xs-8 tex-left">
                <a href="#" class="blue_btn small">Send</a></div>
        </div>

    </form>


</div>
<div class="row next-sign">
    <img src = "<?php bloginfo('template_directory') ?>/assets/img/next-sign.png">
   <a href="#">Back to blog</a>

</div>
</div>


<div class="col-xs-4">
    <p class='tags'>Browser by Tag</p>
    <ul>
        <li><a>Mobile App</a></li>
        <li><a>Custom Application</a></li>
        <li><a>Development</a></li>
        <li><a>IOS</a></li>
        <li><a>Android</a></li>
        <li><a>Responsive layout</a></li>
        <li><a>Design</a></li>
        <li><a>Wed design</a></li>
        <li><a>UX/UI design</a></li>
        <li><a>Internet Marketing</a></li>
        <li><a>SEO</a></li>
        <li><a>SMM</a></li>

    </ul>

</div>

</div>
</div>
<?php get_footer() ?>
