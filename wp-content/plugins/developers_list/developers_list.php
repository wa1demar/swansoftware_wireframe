<?php
/*
Plugin Name: Developers List
Description: List of Developers and Managers
Version: 0.0.1
Author: waldemar
*/

//function myplugin_admin_page() {
//    add_menu_page('Developers List', 'Developers List', 8, __FILE__, 'wgl_create_post_type');
//}
//add_action('admin_menu', 'myplugin_admin_page');

/** Install Folder */
define('WGL_FOLDER', '/' . dirname( plugin_basename(__FILE__)));

/** Path for front-end links */
define('WGL_URL', WP_PLUGIN_URL . WGL_FOLDER);

// Post type
define('WGL_POSTYPE', 'wgl');

add_action( 'init', 'wgl_create_post_type' );
add_action( 'admin_head', 'wgl_posttype_icon' );
add_action( 'save_post', 'wgl_save_postdata', 1, 2 );

// ===================
// ** Setup the style and script
// ===================
add_action( 'init', 'wp_add_gallery_style' );
add_action( 'init', 'wp_add_gallery_script' );


function wp_add_gallery_style(){
    wp_register_style('wpgallery.css', WGL_URL . '/wpgallery.css');
    wp_enqueue_style('wpgallery.css');
    wp_register_style('jquery.lightbox-0.5.css', WGL_URL . '/js/jquery.lightbox-0.5.css');
    wp_enqueue_style('jquery.lightbox-0.5.css');
}

function wp_add_gallery_script(){
    wp_register_script( 'jquery', WGL_URL . '/js/jquery-1.4.4.min.js');
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'jquerylightbox', WGL_URL . '/js/jquery.lightbox-0.5.js');
    wp_enqueue_script( 'jquerylightbox' );
}

// =======================
// ** Create the post type
// =======================
function wgl_create_post_type() {
    // Define the labels
    $labels = array(
        'name' => _x('WPDevelopersList', 'post type general name'),
        'add_new' => _x('Add New', 'new view')
    );

    // Register the post type
    register_post_type(WGL_POSTYPE, array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'query_var' => true,
        'menu_icon' => WGL_URL .'/images/gallery_ico.png',
       // 'register_meta_box_cb' => 'wgl_add_url_box',
        'supports' => array(
            'title',
)
    ));
}

// ===========================
// ** Create the icon in admin
// ===========================
function wgl_posttype_icon() {
    global $post_type;
    $qry_postype = ( isset($_GET['post_type']) ) ? $_GET['post_type'] : '' ;

    if (($qry_postype == WGL_POSTYPE) || ($post_type == WGL_POSTYPE)) {
        $icon_url = WGL_URL . '/images/gallery_ico.png';
        ?>
        <style type="text/css" media="all">
            /*<![CDATA[*/
            .icon32 { background: url(<?php echo $icon_url; ?>) no-repeat 1px !important;}
            /*]]>*/
        </style>
    <?php
    }
}

// ===================================
// ** Create box arrays for image urls
// ===================================
$wgl_box_images = array (
    'Photo' => array (
        array( 'wgl_small_img_url', 'Location of the small image:', 'image')
    ),
    'Url for large image' => array (
        array( 'wgl_large_img_url', 'Location of the large image:', 'text')
    )
);

// ===================================
// ** Add boxes for image's urls
// ===================================
//function wgl_add_url_box() {
//    global $wgl_box_images, $post;
//    if ( function_exists( 'add_meta_box' ) ) {
//        $val = explode(";", get_post_meta($post->ID, 'wgl_img_url', true));
//        foreach ( array_keys( $wgl_box_images ) as $key=>$wgl_box_image ) {
//            add_meta_box( $wgl_box_image, __( $wgl_box_image), 'wgl_post_url_box', WGL_POSTYPE, 'normal', 'high', $val[$key] );
//        }
//    }
//}

//function wgl_post_url_box ( $obj, $box) {
//    global $wgl_box_images, $post;
//    // Generate box contents
//    foreach ( $wgl_box_images[$box['id']] as $wgl_box ) {
//        echo '<br /><label for="'.$wgl_box["0"].'">'.$wgl_box["1"].'</label><br />'
//            . '<input style="width: 95%;" type="text" name="'.$wgl_box["0"].'" value="'.$box['args'].'"/>';
//    }
//}

// ===============================
// ** Save data when post is saved
// ===============================
function wgl_save_postdata($post_id, $post) {
    global $wgl_box_images;

    if ( 'page' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post->ID ))
            return $post->ID;
    } else {
        if ( ! current_user_can( 'edit_post', $post->ID ))
            return $post->ID;
    }

//    foreach ( $wgl_box_images as $wgl_box_image ) {
//        foreach ( $wgl_box_image as $wgl_fields ) {
//            $wgl_data[$wgl_fields[0]] =  $_POST[$wgl_fields[0]];
//        }
//    }

    if ( 'revision' == $post->post_type  ) {
        // don't store custom data twice
        return;
    }

    if ( get_post_meta($post->ID, $key, FALSE) ) {
        // Field has a value.
        update_post_meta($post->ID, 'wgl_img_url', $wgl_data['wgl_small_img_url'].';'.$wgl_data['wgl_large_img_url']);
    } else {
        // Field does not have a value.
        add_post_meta($post->ID, 'wgl_img_url', $wgl_data['wgl_small_img_url'].';'.$wgl_data['wgl_large_img_url']);
    }

    if (!$wgl_data['wgl_small_img_url'] && !$wgl_data['wgl_large_img_url']) {
        delete_post_meta($post->ID, 'wgl_img_url');
    }
}

//==================================
// ** Add Shortcode [wpgallerylist]
//==================================

add_shortcode('wpgallerylist', 'wpgallerylist_shortcode');

function wpgallerylist_shortcode($atts, $content = null) {
    global $wpdb;

    $rows = $wpdb->get_results( "SELECT w.id, w.post_date, w.post_title, w.post_content, m.meta_key, m.meta_value FROM $wpdb->posts w LEFT JOIN $wpdb->postmeta m on (w.id = m.post_id) WHERE w.post_type = 'wgl' and w.post_status='publish' and m.meta_key in ('wgl_img_url') ORDER BY w.post_date DESC");

    $display = '';
    $display = '<script type="text/javascript">
		// <![CDATA[
jQuery(function() {
	jQuery("#wpgallery a").lightBox({
			overlayOpacity: 0.6,
			containerResizeSpeed: 350,
			txtImage: "Изображение",
			txtOf: "из"
});
});
// ]]>
</script>';

    $display .= '<ul id="wpgallery">';

    foreach ( (array) $rows as $row ) {
        $display .= '<li>';

        $wp_images = explode( ";", $row->meta_value);

        $display .= '<div class="img_container"><a href="'.$wp_images[1].'">';
        $display .= '<img src="'.$wp_images[0].'"/>';
        $display .= '</a></div>';

        $display .= '<div class="text_container">';
        $display .= '<div>'.$row->post_title.'</div>';
        $display .= '<div>'.$row->post_content.'</div>';
        $display .= '</div>';

        $display .= '</li>';
    }

    $display .= '</ul><div class="clear"></div>';
    $display .= '<br><br><br>';

    return $display;
}
?>