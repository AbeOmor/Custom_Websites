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
	
		<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> has-post-thumbnail hentry blog-snippet-article">
				<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
				<div class="entry-featured blog-snippet-featured-img">
				   <a href="<?php the_permalink(); ?>" class="entry-thumb" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>">
							  <span class="view">View Post</span>
						  </a>
				</div>
				<?php endif; ?>

				<div class="blog-snippet-featured-text entry-wrap">
					<header class="entry-header">
						  <h2 class="entry-title">
						  <a href="<?php the_permalink(); ?>" title="Permalink to: &quot;#Rona’d&quot;"><?php the_title(); ?></a>
						  </h2>
						  <p class="p-meta">
						  <span>
						  In <?php the_category(" "); ?> by <?php the_author() ; ?>
						  </span>
						  <span><?php the_time( get_option( 'date_format' ) ); ?>
						  </span>
						  </p>
					</header>      

					<div class="entry-content excerpt">
						  <?php the_excerpt(); ?>
					</div>
					</div>
			</article>
<hr>
		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
