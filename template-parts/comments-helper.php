<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
    <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="comment-avatar img-thumbnail d-none d-sm-block">
            <?php echo get_avatar($comment,$size='100',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
        </div>
        <div class="comment-text">
            <div class="comment-author">
                <strong><?php echo get_comment_author() ?></strong>
                <span>
                    <strong>
                        <a href="#">
                        <span class="iconify" data-icon="pixelarticons:reply-all"></span>
                        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                         </a>
                    </strong>
                </span>
            </div>
            <?php comment_text() ?>
            <span class="comment-date">
                <?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , 'truelove_theme'), get_comment_date(),  get_comment_time()) ?>
            </span>
        </div>
    </div>

<?php
        }
endif;