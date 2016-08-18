<?php get_header(); ?>
<main class="container>
<div class="page-content">
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
</main>

<?php get_footer(); ?>