<?php get_header(); ?>

<main class="container">
	<div id="content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="feat-img">
			<?php the_post_thumbnail(); ?>
		</div>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>
		<article>
			<div class="post-content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</article>
		<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
		</div><!-- #post-## -->
	<?php endwhile; /* end loop */ ?>
	</div><!--#content-->
</main>

<?php get_footer(); ?>