<?php get_header(); ?>
<?php //get_sidebar('portfolio'); ?>
<div id="older-arrow" class="newer-older">
<?php
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
	}
?>
</div>
<div id="newer-arrow" class="newer-older"><a href="http://carlarozman.com/wp/all"><</a></div>
<div id="content-work">
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/carlarozman_work_page.jpg" />
	<!--<p>Our mission is to make work that is strong, fun and effective. Please select a category above to view, or the left/right arrow to begin.</p>-->
</div><!--#content-->

<?php get_footer(); ?>