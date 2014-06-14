<?php get_header(); ?>

<!-- #UPDATES -->
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    
    <?php get_template_part( 'content', 'none' ); ?>

    <?php endwhile; ?>

<?php endif; ?>
<!-- /#UPDATES -->


<!-- #FESTINFO -->
<?php

    $args = array(
        'post_type' => 'work',
        'cat' => '4'
    );

    $the_query = new WP_Query( $args );

?>

<!-- /#FESTINFO -->


<!-- #VENUES -->
<!-- /#VENUES -->

<!-- #SCHEDULE -->
<!-- /#SCHEDULE -->

<!-- #LINEUP -->
<!-- /#LINEUP -->

<!-- #WORKSHOPS -->
<!-- /#WORKSHOPS -->

<!-- #SUBMISSIONS -->
<!-- /#SUBMISSIONS -->

<!-- #SPONSORS -->
<!-- /#SPONSORS -->

<!-- #DONATE -->
<!-- /#DONATE -->

<!-- #STAFF -->
<!-- /#STAFF -->


<section id="content" role="main">



</section><!-- #content -->


    
<?php get_footer(); ?>