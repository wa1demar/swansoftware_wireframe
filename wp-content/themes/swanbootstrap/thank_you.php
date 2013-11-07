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


    $name = $_POST['name_c'];
    $email = $_POST['email_c'];
    $comment = $_POST['comment_c'];

    $pattern = '/@/';
    preg_match($pattern, $email, $matches, PREG_OFFSET_CAPTURE, 3);
//

//    if ($name != "" and  $comment != "" and  $name != "" and $matches[0] != "") {
//
//        $headers =  "From: " . strip_tags($_POST['email_c']) . "\r\n";
////    $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
//    $headers .= "CC: susan@example.com\r\n";
//    $headers .= "MIME-Version: 1.0\r\n";
//    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
//    //attache img
//        $sep = sha1(date('r', time()));
//
//
//        $img = chunk_split(base64_encode(file_get_contents('assets/img/children.png')));
//
//
//        $tpl = file_get_contents(get_bloginfo('template_directory').'/assets/vendors/contact_us_template.html');
//
//        $tpl = str_replace('{{subject}}', "Contact Us", $tpl);
//        $tpl = str_replace('{{comment}}', $comment, $tpl);
//        $tpl = str_replace('{{img}}', $img, $tpl);
//
//
//
//        if (!mail($email, "the subject", $tpl,
//            $headers)
//        ) {
//            Flash::alert('lol, you can\'t do that!');
//            header("Location:  " . $_SERVER['HTTP_REFERER']);
//
//        }
//
//
//    } else {
//        Flash::alert('lol, you can\'t do that!');
//        header("Location:  " . $_SERVER['HTTP_REFERER']);
//
//    }

//    echo $name . " " . $email . " " . $comment;
//
    $message = Swift_Message::newInstance()
        ->setSubject('Your subject')
        ->setFrom(array('john@doe.com' => 'John Doe'))
        ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'));
       $cid = $message->embed(Swift_Image::fromPath(get_bloginfo('template_directory').'/assets/img/children.png'));
        $message->setBody(
        '<html>' .
        ' <head></head>' .
        ' <body>' .
        '  Here is an image <img src="' . // Embed the file
        $cid .
        '" alt="Image" />' .
        '  Rest of message' .
        ' </body>' .
        '</html>',
        'text/html' // Mark the content-type as HTML
    );

    $type = $message->getHeaders()->get('Content-Type');
    $type->setValue('multipart/mixed');

    $transport = Swift_MailTransport::newInstance();
//    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587)
//        ->setUsername('viktor.danch')
//        ->setPassword('a22111989a')


//    $transport = Swift_SendmailTransport::newInstance('/usr/bin/send.sh');
    $mailer = Swift_Mailer::newInstance($transport);
    $result = $mailer->send($message);


    echo $result;

} elseif (isset($_POST[''])) {


} else {
    header("Location: " . get_home_url());
}


?>
<?php get_header() ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="container">
            <div class="col-lg-12">
                <?php the_content() ?>
            </div>
        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer() ?>
