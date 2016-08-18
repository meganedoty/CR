<div id="sidebar">
	<div id="thumbnail-nav">
		<?php
		global $post;
		$args = array( 'numberposts' => 20, 'category' => $cat );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post);
		?>
			<div class="nav-thumb">
				<a href="#<?php echo $post->post_name; ?>" class="thumb-link">
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
</div><!--sidebar-->