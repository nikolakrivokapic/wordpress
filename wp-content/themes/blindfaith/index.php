<?php get_header(); ?>
<?php if ( ! have_posts() ) : ?>
        <h1>Not Found</h1>
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>

<div class="post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="post-details">
            <div class="post-details-left">
                Posted on <strong><?php the_date(); ?></strong> by <span class="author"><?php the_author(); ?></span> under <span class="author"><?php the_category(', '); ?></span>
                </div>
                <div class="post-details-right">
<?php edit_post_link('Edit', '<span class="comment-count">  ' , '</span>'); ?><span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>
</div>
        </div>
 
        <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                <?php the_excerpt(); ?>
        <?php else : ?>
                <?php the_content('Read More'); ?>
        <?php endif; ?>
 
        <div class="dots"></div>

        <?php if ( have_comments() ) : ?>
        <h4><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number() ),number_format_i18n( get_comments_number() ) );
        ?></h4>
         
        // Comment loop goes here
         
        <?php else: ?>
        <h4>No comments</h4>
        <?php endif; ?>

        <?php if ( ! comments_open() ) : ?>
            <h4>Comments are closed.</h4>
        <?php else: ?>
         
        <h4>Leave a Comment</h4> 
        <a name="comments"></a>
                    <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform"> 
                        <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' /> 
                        <input type="text" value="Name" name="author" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Name / Alias (required)</label><br /> 
                        <input type="text" value="Email" name="email" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Email Address (required, not shown)</label><br /> 
                        <input type="text" value="" name="url"><label>Website (optional)</label><br /> 
                        <textarea rows="7" cols="60" name="comment"></textarea><br /> 
                        <input type="submit" value="Add Your Comment" /> 
                    </form>
         
        <?php endif; ?>
    </div><!-- post -->
    <?php endwhile; ?>

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
            <div id="older-posts"><?php next_posts_link('Older Posts'); ?></div>
            <div id="newer-posts"><?php previous_posts_link('Newer Posts'); ?></div>
    <?php else: ?>
            <div id="only-page">No newer/older posts</div>
    <?php endif; ?>
<?php get_footer(); ?>