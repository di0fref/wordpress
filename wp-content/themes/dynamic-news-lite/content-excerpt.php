		
	<article id="post-<?php the_ID(); ?>" <?php post_class('content-excerpt'); ?>>
		
		<h2 class="post-title entry-title"><a href="<?php esc_url(the_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		
		<div class="postmeta clearfix"><?php dynamicnews_display_postmeta(); ?></div>

		<?php dynamicnews_display_thumbnail_index(); ?>
		
		<div class="entry clearfix">
			<?php the_excerpt(); ?>
			<a href="<?php esc_url(the_permalink()) ?>" class="more-link"><?php esc_html_e( 'Read more', 'dynamic-news-lite' ); ?></a>
		</div>
		
		<div class="postinfo clearfix"><?php dynamicnews_display_postinfo_index(); ?></div>

	</article>