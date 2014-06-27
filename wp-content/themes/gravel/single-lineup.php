<?php

/* Template Name: Lineup Page */

get_header(); ?>
    
    <article class="col-2-3">
    
		<header><h2>Lineup</h2></header>
		
		<?php if ( have_posts() ) : ?>
		

			<?php while ( have_posts() ) : the_post(); ?>
			
                <?php $image = get_field('image'); ?>
                <?php if( !empty($image) ): 
 
					// vars
					$url = $image['url'];
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// thumbnail
					$size = 'medium';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ]; ?>

				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
				<?php the_title( '<h1>', '</h1>' ); ?>
				<p><?php the_field( 'bio' ); ?></p>
				
				<?php endif; ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
	</article>
	
	<?php get_template_part( 'aside', 'lineup' ); ?>
	
<?php get_footer(); ?>