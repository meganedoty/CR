<?php get_header(); ?>
<?php //get_sidebar('tags'); ?>

<div class="blog-content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<h2><?php the_title(); ?></h2>
	
			<div class="the-post-content">
				<?php the_content(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
			</div>
	
			<div class="post-meta">
				<p><?php //comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
				<p class="post-tags"><?php the_time('F j, Y'); ?></p>
				<p class="post-tags"><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
			</div><!--.postMeta-->
		</div><!--.post-single-->
	<?php endwhile; else: ?>
		<div class="no-results">
			<p><strong><?php _e('There has been an error.'); ?></strong></p>
			<p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--noResults-->
	<?php endif; ?>
		
	<div class="oldernewer">
		<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
		<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
	</div><!--.oldernewer-->
	
</div><!--#content-->
<?php get_footer(); ?>