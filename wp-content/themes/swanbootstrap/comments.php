<?php
/**
 * Created by PhpStorm.
 * User: waldemar
 * Date: 08.11.13
 * Time: 13:51
 */ ?>
<?php if (comments_open()) : ?>
    <h2>Don't forget to leave a comment</h2>

    <?php
    $fields = array(
        'author' => '<div class="row"><div class="col-xs-4 label">' . __( 'Name' ) . '<img src="' .get_bloginfo('template_directory') . '/assets/img/name.png"></div>
            <div class="col-xs-8"><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder="  John Doe..." maxlength="30" autocomplete="on" tabindex="1" required' . $aria_req . '></div>
        </div>',
        'email' => '<div class="row">
            <div class="col-xs-4 label">' . __( 'Email') . '<img src="'.get_bloginfo('template_directory') .'/assets/img/email.png"></div>
            <div class="col-xs-8"><input type="email" id="email" name="email"  value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="  johndoe@jahoo.com" maxlength="30" autocomplete="on" tabindex="2" required' . $aria_req . '></div></div>',
    );

    $args = array(
        'comment_notes_after' => '',
        'comment_field' => '<div class="row">
            <div class="col-xs-4 label">' . _x( 'Comment', 'noun' ) . '<img src="'.get_bloginfo('template_directory') .'/assets/img/comment.png"></div>
            <div class="col-xs-8"><textarea id="comment" name="comment"  aria-required="true" placeholder="  Type your messahe here..."></textarea></div></div>',
        'label_submit' => 'Send',


        'fields' => apply_filters('comment_form_default_fields', $fields)
    );
    comment_form($args);
    ?>
    <ol class="commentlist">
        <?php $args = array(
            'reply_text' => 'Ответить',
//            'callback' => 'verstaka_comment'
        );
        wp_list_comments($args); ?>
    </ol>
    <?php else : ?>
  <h3>Обсуждения закрыты для данной страницы</h3>
<?php endif ?>