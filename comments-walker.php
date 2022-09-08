<?php
/** -----------------------------------------------
Yorum
----------------------------------------------- **/

function wpd_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    <br>

    <div class="comment-wrap">
        <div class="comment-img">
            <?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
        </div>
        <div class="comment-body">
            <h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
            <span class="comment-date"><?php printf(__('%1$s - %2$s', 'wpd'), get_comment_date(),  get_comment_time()) ?></span>
            <?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Yorum onay bekliyor', 'wpd'); ?></em><br /><?php } ?>
            <?php comment_text(); ?>
            <span class="comment-reply"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Cevapla', 'wpd'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
        </div>
    </div>
<?php }

// yorum cevapla

add_action('wp_enqueue_scripts', 'wpd_public_scripts');

function wpd_public_scripts() {
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
    }
}
?>