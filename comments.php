<?php if ( post_password_required() ) { return; } ?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) { ?>
        <h4 class="comments-title">
            <?php comments_number(__('Yorum Yok', 'wpd'), __('1 Yorum', 'wpd'), '% ' . __('Yorum', 'wpd') ); ?>
        </h4>
        <ol class="comment-list">
            <?php wp_list_comments( array( 'avatar_size' => 70, 'style' => 'ul', 'callback' => 'wpd_comments', 'type' => 'all' ) ); ?>
        </ol>
        <?php the_comments_pagination( array( 'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __( 'Önceki', 'wpd') . '</span>', 'next_text' => '<span class="screen-reader-text">' . __( 'Sonraki', 'wpd') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>', ) ); ?>
    <?php } ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
        <p class="no-comments"><?php _e( '? Yorum yapmak, editör tarafından kısıtlanmıştır.', 'wpd'); ?></p>
    <?php } ?>
    <div class="comment-input-group">
        <?php comment_form(); ?>
    </div>
</div>