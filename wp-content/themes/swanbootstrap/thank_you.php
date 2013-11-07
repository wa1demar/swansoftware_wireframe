<?php
/**
 *
 * Template Name: Thank you
 *
 * Created by JetBrains PhpStorm.
 * @author: Viktor
 * @date: 11/6/13
 *
 */
?>
<?php
include 'flash.php';

if (isset($_POST['submit_contact_us'])) {

    $name = addslashes(strip_tags($_POST['name_c']));
    $email = addslashes(strip_tags($_POST['email_c']));
    $comment = addslashes(strip_tags($_POST['comment_c']));

    $pattern = '/@/';
    preg_match($pattern, $email, $matches, PREG_OFFSET_CAPTURE, 3);

    if ($name != "" and  $comment != "" and  $name != "" and $matches[0] != "") {
        $message = Swift_Message::newInstance()
            ->setSubject($name.' left a message for you!')
            ->setFrom(array($email => $name))
            ->setTo(array('viktor.danch@gmail.com'));

        $tpl = file_get_contents(get_bloginfo('template_directory').'/assets/vendors/contact_us_template.html');
        $tpl = str_replace('{{comment}}', $comment, $tpl);
        $tpl = str_replace('{{user_name}}', $name, $tpl);
        $tpl = str_replace('{{user_email}}', $email, $tpl);

        $cid_logo = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/vendors/images/logo.png'));
        $cid_gray_bg = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/vendors/images/gray_kocka.png'));
        $cid_blue_bg = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/vendors/images/blue_kocka.png'));
        $cid_fb = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/img/fb_25x25.png'));
        $cid_tw = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/img/twitter_25x25.png'));
        $cid_gp = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/img/g+_25x25.png'));
        $cid_ln = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/img/linkedin_25x25.png'));

        $tpl = str_replace('{{logo}}',  $cid_logo, $tpl);
        $tpl = str_replace('{{blue_bg}}',  $cid_blue_bg, $tpl);
        $tpl = str_replace('{{gray_bg}}',  $cid_gray_bg, $tpl);
        $tpl = str_replace('{{fb}}', $cid_fb, $tpl);
        $tpl = str_replace('{{tw}}', $cid_tw, $tpl);
        $tpl = str_replace('{{gp}}', $cid_gp, $tpl);
        $tpl = str_replace('{{ln}}', $cid_ln, $tpl);


        $message->setBody(  $tpl);

        $type = $message->getHeaders()->get('Content-Type');
        $type->setValue('multipart/mixed');

        $transport = Swift_MailTransport::newInstance();

        $mailer = Swift_Mailer::newInstance($transport);
        $result = $mailer->send($message);


        echo $message;
    } else {
        Flash::alert('lol, you can\'t do that!');
        header("Location:  " . $_SERVER['HTTP_REFERER']);

    }
} elseif (isset($_POST[''])) {



} elseif (isset($_POST['submit_service_form'])) {
    $name = addslashes(strip_tags($_POST['name_n']));
    $email = addslashes(strip_tags($_POST['email_n']));
    $comment = addslashes(strip_tags($_POST['comment_n']));
    $service = addslashes(strip_tags($_POST['service']));

    $pattern = '/@/';
    preg_match($pattern, $email, $matches, PREG_OFFSET_CAPTURE, 3);

    echo $email . ' ' . $name, ' ' . $comment . " " . $service;

    if ($name != "" and  $comment != "" and  $name != "" and $matches[0] != "") {
        $message = Swift_Message::newInstance()
            ->setSubject('Your subject')
            ->setFrom(array('viktor.danch@gmail.com' => 'John Doe'))
            ->setTo(array($email));
        $message->setBody(
            '<html>' .
            ' <head></head>' .
            ' <body>' .

            '  Rest of message' .
            ' </body>' .
            '</html>',
            'text/html' // Mark the content-type as HTML
        );

        $type = $message->getHeaders()->get('Content-Type');
        $type->setValue('multipart/mixed');

        $transport = Swift_MailTransport::newInstance();

        $mailer = Swift_Mailer::newInstance($transport);
        $result = $mailer->send($message);


        echo $message;
    } else {
        Flash::alert('lol, you can\'t do that!');
        header("Location:  " . $_SERVER['HTTP_REFERER']);

    }


}  elseif (isset($_POST['submit_project_template'])) {
    $name = addslashes(strip_tags($_POST['name_p']));
    $email = addslashes(strip_tags($_POST['email_p']));
    $comment = addslashes(strip_tags($_POST['comment_p']));


    $pattern = '/@/';
    preg_match($pattern, $email, $matches, PREG_OFFSET_CAPTURE, 3);

    echo $email . ' ' . $name, ' ' . $comment . " " . $service;

    if ($name != "" and  $comment != "" and  $name != "" and $matches[0] != "") {
        $message = Swift_Message::newInstance()
            ->setSubject('Your subject')
            ->setFrom(array('viktor.danch@gmail.com' => 'John Doe'))
            ->setTo(array($email));
        $message->setBody(
            '<html>' .
            ' <head></head>' .
            ' <body>' .
            ' <h1> Here is an image</h1> <img src="' . // Embed the file

            '" alt="Image" />' .
            '  Rest of message' .
            ' </body>' .
            '</html>',
            'text/html' // Mark the content-type as HTML
        );

        $type = $message->getHeaders()->get('Content-Type');
        $type->setValue('multipart/mixed');

        $transport = Swift_MailTransport::newInstance();

        $mailer = Swift_Mailer::newInstance($transport);
        $result = $mailer->send($message);


        echo $message;
    } else {
        Flash::alert('lol, you can\'t do that!');
        header("Location:  " . $_SERVER['HTTP_REFERER']);

    }


} else {
    header("Location: " . get_home_url());
}


?>






<?php get_header() ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="container">
            <div class="col-lg-12">
                <?php  ?>
            </div>
        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer() ?>
