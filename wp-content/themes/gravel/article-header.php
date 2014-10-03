<header>

	<?php
		if ( is_singular('lineup') ) {

			echo the_title('<h2 class="lineup" data-0="opacity: 1;" data-10p="opacity: 0;">','</h2>');

		} elseif ( get_post_type() == 'lineup' ) {

			?> <h2 class="lineup" data-0="opacity: 1;" data-10p="opacity: 0;"><?php echo $post->post_type; ?></h2> <?php

		} elseif ( get_post_type() == 'festinfo' ) {

			?> <h2 class="festinfo" data-0="opacity: 1;" data-10p="opacity: 0;"><?php echo $post->post_type; ?></h2> <?php

		} elseif ( get_post_type() == 'schedule' ) {

			echo the_title('<h2 class="schedule" data-0="opacity: 1;" data-10p="opacity: 0;">','</h2>');

		} else {

			?> <h2 data-0="opacity: 1;" data-10p="opacity: 0;"><?php echo $post->post_type; ?></h2> <?php

		}
	?>

</header>