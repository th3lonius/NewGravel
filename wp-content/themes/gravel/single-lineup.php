<?php

/* Template Name: Lineup Page */

get_header(); ?>
    
    <section id="lineup" class="noiseBG">
    
    <span style="font-size: 26px; color: red; float: right;">I am single-lineup</span>
    
		<h2>Lineup</h2>
		
		<article class="wrapper performers">
		
		<?php if ( have_posts() ) : ?>
		

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_title( '<h5>', '</h5>' ); ?>
				<img src="<?php the_field( 'image' ); ?>"/>
				<?php the_field( 'bio' ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		
		</article>

</section><!-- #lineup -->

<?php get_footer(); ?>