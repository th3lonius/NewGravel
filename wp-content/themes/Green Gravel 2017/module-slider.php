<!-- #SLIDER -->
<article class="slider">

<header><h3 class="flag">2016 in Photos</h3></header>

<?php

    $args = array(
      'post_type' => 'gallery',
      'name' => '2016'
    );

    $the_query = new WP_Query( $args );

?>

	<?php if ( $the_query->have_posts() ) : ?>

		<div id="slides">

            <ul class="slides-container">
                
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <!-- Slider -->
			<?php if( have_rows('images') ) : ?>

                <?php while( have_rows('images') ): the_row(); 

                $image = get_sub_field('photo');

                ?>
                
                <li>
                    <img class="preserve" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                </li>
                
                <?php endwhile; ?>
                
				<?php endif; ?>

			<?php endwhile; ?>

            </ul><!-- .slides-container -->

        <nav class="slides-navigation">
          <a href="#" class="next"></a>
          <a href="#" class="prev"></a>
        </nav>
            
		</div><!-- #slides -->
		
		<?php endif; ?>

</article><!-- #slides -->