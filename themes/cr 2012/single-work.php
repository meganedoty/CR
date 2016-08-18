<?php get_header(); ?>
<div id="older-arrow" class="newer-older"><?php previous_post_link('%link', '>') ?></div>
<div id="newer-arrow" class="newer-older"><?php next_post_link('%link', '<') ?></div>
<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
				<div class="post-right">
					<div class="post-excerpt">
						<a href="<?php the_permalink() ?>" class="excerpt-title" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
						<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?> Hi.
					</div>
				</div>
				<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
				<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--.post-content-->

			</article>

		</div><!-- #post-## -->



	<?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php //get_sidebar('portfolio-single'); ?>
<?php get_footer(); ?>