<?php get_header(); ?>
<?php //get_sidebar('portfolio'); ?>

<div id="thumb-grid">
	<div id="thumbnail-nav">
		<?php
		global $post;
		$args = array( 'numberposts' => 100, 'category' => $cat );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post);
		?>
			<div class="nav-thumb">
				<a href="<?php the_permalink() ?>" class="thumb-link">
		<?php
			$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
			if ( ! is_array($attachments) ) continue;
			$count = count($attachments);
			$first_attachment = array_shift($attachments);
			echo wp_get_attachment_image($first_attachment->ID);
			
		?>
			</a></div>
		<?php endforeach; ?>
	</div>

</div><!--#content-->

<!--
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="<?php echo $post->post_name; ?>" class="post-single">
				<div class="post-excerpt">
					<a href="<?php the_permalink() ?>" class="excerpt-title" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
				</div>
				<div class="post-content">
					<p>
						<a href="<?php the_permalink() ?>">
					<?php
						$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
						if ( ! is_array($attachments) ) continue;
						$count = count($attachments);
						$first_attachment = array_shift($attachments);
						echo wp_get_attachment_image($first_attachment->ID,'medium');
						
					?>
						</a>
					</p>
					 
				</div>		
				<div class="clear"></div>
			</div>
	<?php endwhile; else: ?>
		<div class="no-results">
			<p><strong><?php _e('There has been an error.'); ?></strong></p>
			<p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div>
	<?php endif; ?>
	<div class="oldernewer">
		<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
		<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
	</div>
	
</div>
-->
<?php get_footer(); ?>