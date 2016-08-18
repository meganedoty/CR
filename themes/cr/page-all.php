<?php get_header(); ?>
<main class="all-content">
    <div class="col-container">

	<section class="col">
		<h3>Art &#38; Illustration</h3>
		<ul>
		<?php
		$args = array( 'numberposts' => 100, 'category' => 601, orderby => 'title', order => 'ASC');
		$postslist = get_posts( $args );
		foreach( $postslist as $post ) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</section>

        <section class="col">
            <h3>Branding</h3>
            <ul>
            <?php
            $args = array( 'numberposts' => 100, 'category' => 6, 'orderby' => 'title', 'order' => 'ASC' );
            $postslist = get_posts( $args );
            foreach( $postslist as $post ) : ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
            </ul>
        </section>

        <section class="col">
            <h3>Magazines</h3>
            <ul>
            <?php
            $args = array( 'numberposts' => 100, 'category' => 7, 'orderby' => 'title', 'order' => 'ASC' );
            $postslist = get_posts( $args );
            foreach( $postslist as $post ) : ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
            </ul>
        </section>
        
        <section class="col">
            <h3>Print</h3>
            <ul>
            <?php
            $args = array( 'numberposts' => 100, 'category' => 9, 'orderby' => 'title', 'order' => 'ASC' );
            $postslist = get_posts( $args );
            foreach( $postslist as $post ) : ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
            </ul>
        </section>
        
        <section class="col">
            <h3>Web</h3>
            <ul>
            <?php
            $args = array( 'numberposts' => 100, 'category' => 10, 'orderby' => 'title', 'order' => 'ASC' );
            $postslist = get_posts( $args );
            foreach( $postslist as $post ) : ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
            </ul>
        </section>
    </div> <!-- flexContainer -->
</main><!--#content-->

<?php get_footer(); ?>