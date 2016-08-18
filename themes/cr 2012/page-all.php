<?php get_header(); ?>

<div class="all-content">
	<div class="all-column first-column">
		<h3>Magazines</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 4 );
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
		
		<h3>Identity</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 5 );
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="all-column">
		<h3>Print</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 6 );
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
		
		<h3>Posters</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 15 );
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="all-column">
		<h3>Film</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 18 );
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
		
		<h3>Web</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 7 );
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>

</div><!--#content-->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
	<script type="text/javascript">
		jQuery('.all-content').equalHeights();
	</script>