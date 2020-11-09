<?php defined( 'ABSPATH' ) || exit; ?>

<?php
/**
 * READ BEFORE EDITING!a
 *
 * Do not edit templates in the plugin folder, since all your changes will be
 * lost after the plugin update. Read the following article to learn how to
 * change this template or create a custom one:
 *
 * https://getshortcodes.com/docs/posts/#built-in-templates
 */
?>

<?php
/**
<div class="su-posts su-posts-default-loop">

	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	
		<div id="su-post-<?php the_ID(); ?>" class="su-post">

<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
<a class="su-post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				<?php endif; ?> 

				<h2 class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!-- 				<div class="su-post-meta">
					<?php _e( 'Categories', 'shortcodes-ultimate' ); ?>: <?php the_category(" "); ?>
				</div> -->
			
				<div class="su-post-excerpt">
					<?php the_excerpt(); ?>
				</div>

				<div class="su-post-meta">
					By: <?php the_author() ; ?> | <?php the_time( get_option( 'date_format' ) ); ?> 
				</div>
			
<!-- 				<?php if ( have_comments() || comments_open() ) : ?>
					<a href="<?php comments_link(); ?>" class="su-post-comments-link"><?php comments_number( __( '0 comments', 'shortcodes-ultimate' ), __( '1 comment', 'shortcodes-ultimate' ), '% comments' ); ?></a>
				<?php endif; ?> -->
			</div> 
<hr>
			
		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
	 */
?>

<?php
/**
-------

<div class="su-posts su-posts-default-loop">

	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	
		<div id="su-post-<?php the_ID(); ?>" class="su-post">

<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
<div class="entry-featured">
       <a href="<?php the_permalink(); ?>" class="entry-thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>">
                  <span class="view">View Post</span>
              </a>
	<?php endif; ?>
<div class="entry-wrap">
      
<header class="entry-header">
      <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="Permalink to: &quot;#Rona’d&quot;"><?php the_title(); ?></a>
    </h2>
    <p class="p-meta"><span>In <a href="<?php the_permalink(); ?>" title="View all posts in: “Uncategorized”"> <?php _e( 'Categories', 'shortcodes-ultimate' ); ?>: <?php the_category(" "); ?></a> By: <?php the_author() ; ?> </span><span><?php the_time( get_option( 'date_format' ) ); ?> </span></p></header>      


<div class="entry-content excerpt">
  <p><?php the_excerpt(); ?></p>
</div>

    </div>
                  </div>

</div>
	<hr>		
		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>

-------
*/
?>
<div class="su-posts su-posts-default-loop">
<?php if ( $posts->have_posts() ) : ?>

<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> has-post-thumbnail hentry blog-snippet-article">

<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
<div class="entry-featured blog-snippet-featured-img">
       <a href="<?php the_permalink(); ?>" class="entry-thumb" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>">
                  <span class="view">View Post</span>
              </a>
<?php endif; ?>

                  </div>

<div class="blog-snippet-featured-text entry-wrap">
      
<header class="entry-header">
      <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="Permalink to: &quot;#Rona’d&quot;"><?php the_title(); ?></a>
    </h2>
    <p class="p-meta">
		<span><a href="<?php the_permalink(); ?>" title="View all posts in: “Uncategorized”">In <?php the_category(" "); ?></a> by <?php the_author() ; ?></span><span><?php the_time( get_option( 'date_format' ) ); ?></span>
	</p>
			</header>      
<div class="entry-content excerpt">
  <p><?php the_excerpt(); ?></p>
</div>
    </div>
</article>
<hr>
		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>
</div>
