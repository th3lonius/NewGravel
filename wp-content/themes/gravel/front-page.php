<?php get_header(); ?>

<?php get_template_part( 'article', 'header' ); ?>



<!-- #UPDATES -->
<article class="padded">

	<section id="updates" class="col-2-3">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<article class="wrapper group">

			<?php the_title( '<h4>', '</h4>' ); ?>

			<time><?php the_time('F j, Y'); ?> @ <?php the_time('g:i a'); ?></time>

			<?php the_content(); ?>

			</article>

			<?php endwhile; ?>

			<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</section>

</article>
<!-- /#UPDATES -->


<!-- #FESTINFO -->
<section id="festinfo">
	<?php

		$args = array(
			'post_type' => 'festinfo'
		);

		$the_query = new WP_Query( $args );

	?>

	<?php if ( $the_query->have_posts() ) : ?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php get_template_part( 'content', 'simple' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>
</section>
<!-- /#FESTINFO -->

    
<?php get_footer(); ?>