<?php foreach ($comments as $comment) { ?>
<div class="comment">
    <a name="comment-<?php comment_ID(); ?>"></a>
    <?php echo get_avatar( $comment->comment_author_email, $size = '40'); ?>
    <div class="comment-right">
        <span class="comment-author"><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></span> <span class="comment-date">on <?php comment_date(); ?></span>
        <p><?php echo $comment->comment_content; ?></p>
    </div>
    <div class="spacer"></div>
</div><!-- comment -->
<?php } ?>