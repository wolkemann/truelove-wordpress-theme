
<?php if(! have_comments()) : ?>
    <?php else: ?>
    <?php 
        wp_list_comments(
            array(
                'style' => 'div',
                'avatar_size' => 120,
                'short_ping' => true,
                'callback' => 'better_comments'
            )
        );
    ?>
<?php endif; ?>
<div class="post comments-wrapper">
<?php 
    if(comments_open()) {
        comment_form(array(
            'class_form' => 'comments-form',
            'title_reply_before' => '<h2 class="comments-reply-title" id="reply-title">',
            'title_reply_after' => '</h2>'
        ));

    } else {

    }
?>
</div>