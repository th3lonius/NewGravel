<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tyler
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no">
    <meta property="og:title" content="The Green Gravel Comedy Festival" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.greengravelcomedyfest.com" />
    <meta property="og:image" content="http://www.greengravelcomedyfest.com/img/branding2.svg" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!--        <div class="social group">
            <a href="https://twitter.com/GreenGravelFest" id="twitter" class="icon"><img src="/img/twitter_trans.svg" alt="@GreenGravelFest Twitter page" /></a>
            <a href="https://www.facebook.com/GreenGravelComedyFest" id="facebook" class="icon"><img src="/img/facebook_trans.svg" alt="Facebook page" /></a>
        </div>-->
        <nav class="nav-down">
            <ul>
                <li></li>
                <li data-type="link"><a href="#updates" data-scroll="updates">News</a></li>
                <li data-type="link"><a href="<?php echo site_url(); ?>/festinfo" data-scroll="about">Fest Info</a></li>
                <li data-type="link"><a href="<?php echo site_url(); ?>/schedule" data-scroll="schedule">Schedule</a></li>
                <li data-type="link"><a href="<?php echo site_url(); ?>/lineup" data-scroll="lineup">Lineup</a></li>
                <li data-type="link"><a href="<?php echo site_url(); ?>/submissions" data-scroll="submissions">Submissions</a></li>
                <li data-type="link"><a href="#sponsors" data-scroll="sponsors">Sponsors</a></li>
                <li data-type="link"><a href="#staff" data-scroll="staff">Staff</a></li>
            </ul>
        </nav>


<!--<a class="logotype pulse">Green Gravel Comedy Festival</a>-->

<header>

	<?php
		if ( is_single() ) {
		
			echo the_title('<h2>','</h2>');
			
		} elseif ( is_front_page() ) {
		
		
		
		} else {
		
			?> <h2><?php echo $post->post_type; ?></h2>
			
			<?php
		
		}
	?>

</header>

<main>