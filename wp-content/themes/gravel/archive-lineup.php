<?php

/* Template Name: Lineup Page */

get_header(); ?>
    
<?php
 
    $args = array(
        'post_type' => 'lineup'
    );

    $lineup_query = new WP_Query( $args );

?>
    
    <section id="lineup" class="noiseBG">
    
    <span style="font-size: 26px; color: red; float: right;">I am archive-lineup</span>
    
		<h2>Lineup</h2>
		
		<article class="wrapper performers">
		
		<h3>Featured Performers</h3>

		<?php if ( $lineup_query->have_posts() ) : ?>
		
			<ul class="group">

			<?php while ( $lineup_query->have_posts() ) : $lineup_query->the_post(); ?>
                    
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_title( '<h5>', '</h5>' ); ?>
						<img src="img/performers/kashian_t.jpg"/>
					</a>
				</li>

			<?php endwhile; ?>
			
			</ul>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		
		</article>

	</section><!-- #lineup -->

<?php get_footer(); ?>


<?php the_field( 'year' ); ?>