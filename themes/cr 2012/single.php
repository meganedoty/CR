<?php get_header(); ?>
<?php
if ( in_category('work') ) {
?>
	<div id="older-arrow" class="newer-older">
	<?php
	$prev = get_previous_post( FALSE, '13' );
	if (!$prev) {
		$args = array(
		     'cat' => -13,
		     'posts_per_page' => 1,
		     'order' => 'DESC'
		);
		$my_query = new WP_Query($args);
		while ($my_query->have_posts()) {
		  $my_query->the_post(); ?>
		  <a href='<?php the_permalink(); ?> ' >></a>
	<?php
		wp_reset_query();
		}
	}
	else {
		previous_post_link('%link', '>', FALSE, '13');
	}
	?>
	</div>
	<div id="newer-arrow" class="newer-older">
	<?php
	$next = get_next_post( FALSE, '13' );
	if (!$next) {
		$args = array(
		     'cat' => -13,
		     'posts_per_page' => 1,
		     'order' => 'ASC'
		);
		$my_query = new WP_Query($args);
		while ($my_query->have_posts()) {
		  $my_query->the_post(); ?>
		  <a href='<?php the_permalink(); ?> ' ><</a>
	<?php
		wp_reset_query();
		}
	}
	else {
		next_post_link('%link', '<', FALSE, '13');
	}
}
	?>
</div>

	<?php 

	if ( in_category('work') ) {
		echo("<!--WORK-->");
		?>
		<div id="content">
		<?php
		if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	
				<article>
					<div class="post-right">
						<div class="post-excerpt">
							<a href="<?php the_permalink() ?>" class="excerpt-title" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
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
	<?php
	} elseif ( in_category('news') ) {
		echo("<!--BLOG-->");
		?>
		<div class="blog-content">
		<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
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
		<?php endwhile;
		endif;
	}
	?>
	
</div><!--#content-->
<?php //get_sidebar('portfolio-single'); ?>
<?php get_footer(); ?>