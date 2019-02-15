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
    <title><?php wp_title( '|', true, 'right' ); ?>Green Gravel Comedy</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <meta name="description" content="The Green Gravel Comedy Fest is a three-day alternative comedy festival bringing the finest comedic voices to the heart of Iowa. It’s time. Because Iowa laughs harder.">
    <meta name="author" content="Matthew Mesaros">
<!-- #Mobile Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1.0, user-scalable=no">
    <meta property="og:title" content="The Green Gravel Comedy Festival" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.greengravelcomedyfest.com" />
    <meta property="og:image" content="http://www.greengravelcomedyfest.com/<?php bloginfo('template_url'); ?>/img/branding2.svg" />
    <?php wp_head(); ?>
    </head>
    <!-- #HTML5 Support -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

    <header>
        <div class="social group">
            <a href="https://twitter.com/GreenGravelFest" id="twitter" class="icon"><img src="<?php bloginfo('template_url'); ?>/img/twitter_trans.svg" alt="@GreenGravelFest Twitter page" /></a>
            <a href="https://www.facebook.com/GreenGravelComedyFest" id="facebook" class="icon"><img src="<?php bloginfo('template_url'); ?>/img/facebook_trans.svg" alt="Facebook page" /></a>
        </div>
        <nav id="navMain">
            <ul class="group">
                <li><a class="logotype pulse">Green Gravel Comedy Festival</a></li>
                <li data-type="link"><a href="#updates" data-scroll="updates">News</a></li>
                <li data-type="link"><a href="#about" data-scroll="about">Fest Info</a></li>
                <li data-type="link"><a href="#schedule" data-scroll="schedule">Schedule</a></li>
                <li data-type="link"><a href="#lineup" data-scroll="lineup">Lineup</a></li>
                <li data-type="link"><a href="#submissions" data-scroll="submissions">Submissions</a></li>
                <li data-type="link"><a href="#sponsors" data-scroll="sponsors">Sponsors</a></li>
                <li data-type="link"><a href="#staff" data-scroll="staff">Staff</a></li>
            </ul>
        </nav>

        <a href="#" class="navToggle">+</a>
        
        <p>We’d like to thank each every member of the audiences that made our inaugural Green Gravel one to remember! We had a fantastic time in Toledo and are grateful to have been able to put on shows that champion comedians from Iowa and beyond. Please keep it tuned to our Facebook page for updates on future Green Gravel comedy events. We’ve got some bonkers projects in the pipeline for central Iowa and can’t wait to bring you Green Gravel 2015! Dig it the most! -The Green Gravel Team</p>
        
        <div id="repaso-slider">
           <ul class="slides-container">
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Bumblebee's-Bar.JPG"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Tom-Arnold-Award-Recipient-Dan-Umthun.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Martin-Morrow.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/Kevin-McDonald.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Bumblebee's.JPG"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Mike-Lebovitz-(1).jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/David-Phillips.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Julie-Bane.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Patrick-Hastie.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Mat-Alano-Martin.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Matt-Champagne.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/Casey-Crawford.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/Junior-Stopka.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/Kelly-Anneken.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/kashian.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/Peter-Banachowski.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/hires/Martin-Morrow-at-Bumblebee's.jpg"/></li>
                <li><img src="<?php bloginfo('template_url'); ?>/img/repaso/collage.jpg"/></li>
            </ul>
            <nav class="slides-navigation">
                <a href="" class="next"></a>
                <a href="" class="prev"></a>
            </nav>
        </div><!-- /repaso-slider -->
            
        
        <nav id="navMin">
            <ul class="group">
                <li class="festinfo group">
                    <a href="#about">Festival Info</a>
                    <a class="nav-toggle"></a>
                    <ul class="subnav">
                        <li><a href="#venues">Venues</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#staff">Staff</a></li>
                    </ul>
                </li>
                <li class="schedule group">
                    <a href="#lineup">Schedule</a>
                    <a class="nav-toggle"></a>
                    <ul class="subnav">
                        <li><a href="#lineup">Lineup</a></li>
                        <li><a href="#workshops">Workshops</a></li>
                        <li><a href="#submissions">Submissions</a></li>
                    </ul>
                </li>
                <li class="donate group"><a href="#donate">Donate</a></li>
                <li class="media">
                    <a href="https://twitter.com/GreenGravelFest">Twitter</a>
                    <a href="https://www.facebook.com/GreenGravelComedyFest">Facebook</a>
                </li>
            </ul>
        </nav>
        
    </header><!-- /header -->