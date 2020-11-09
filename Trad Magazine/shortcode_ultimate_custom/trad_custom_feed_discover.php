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

<div class="su-posts su-posts-default-loop">

	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> has-post-thumbnail hentry blog-snippet-article-listpage">
				<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
				<div class="entry-featured blog-snippet-featured-img">
				   <a href="<?php the_permalink(); ?>" class="entry-thumb" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>">
							  <span class="view">View Post</span>
						  </a>
			<?php endif; ?>	
			</div>
				
				<div class="blog-snippet-featured-text entry-wrap">
					<br>	  
					<h2 class="entry-title">
						  <a href="<?php the_permalink(); ?>" style="color: #fff;"><?php the_title(); ?></a>
						  </h2>
					<br>	  
					<h2 class="entry-title">
						  <a href="<?php the_permalink(); ?>" style="color: #fff;" ><?php the_author() ; ?></a>
						  </h2>					
					<br>	  
					<h2 class="entry-title">
						  <a href="<?php the_permalink(); ?>" style="color: #fff;" ><?php the_time( get_option( 'date_format' ) ); ?></a>
						  </h2>	
				    
					</div>
			</article>
<hr>
		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
