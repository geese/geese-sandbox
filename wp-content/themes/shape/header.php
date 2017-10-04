<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Shape
 * @since Shape 2.0
 */
?><!DOCTYPE html>


<!--   these below here are "HTML conditional comments" for version of IE  -->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    
<head>
    <!--
        Displays information about your site, mostly gathered from the information you supply in your User Profile and General Settings WordPress Administration Screens. 
        It can be used anywhere within a template file. This always prints a result to the browser. If you need the values for use in PHP, use get_bloginfo().
        https://developer.wordpress.org/reference/functions/bloginfo/
    -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    
    <meta name="viewport" content="width=device-width" />
    
    <title>       
        <?php         
         /*
          * Print the <title> tag based on what is being viewed.
          */
        
        global $page, $paged;
        wp_title('|', true, 'right');
        
        // Add the blog name.
        bloginfo( 'name' );
        
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
        
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
        
        ?>      
        
    </title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    
    <!-- 
    <head>
    https://developer.wordpress.org/reference/functions/wp_head/
    <!-- First add the elements you need in <head>; then last, add: 
    <?php //wp_head(); ?>
    </head>
    -->
    <body <?php body_class(); ?>>
        
    <!--

    The body tag for our theme. The body_class() function adds a bunch of useful CSS classes to the body tag that 
    come in handy when we want to style the theme based on a variety of conditions. To see a live example, 
    view the source of this page, and look for the body tag. You’ll see something like this:

    <body class="single single-post postid-3781 single-format-standard singular">

    Because we’re on a single post, we get the class “single”. Because this post is of the standard post format, 
    we get the “post-format-standard” class. View the source of different types of views 
    (archives, pages, the front page, search results, etc) and observe how the body classes change.

    -->
    
</head>    
    
    

<div id="page" class="hfeed site">
     <header id="masthead" class="site-header" role="banner">
         <hgroup>            
            <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
         </hgroup>
         
         <!--
            Update 16th April, 2013. hgroup has now been removed from the HTML5 specification. We are working on an article to help guide authors on which markup patterns they should use instead.
            -->
         
         <nav role="navigation" class="site-navigation main-navigation">
         
            <h1 class="assistive-text"><?php _e( 'Menu', 'shape' ); ?></h1>
            <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', 'shape' ); ?></a></div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
         
         </nav><!-- .site-navigation .main-navigation -->
     </header><!-- #masthead .site-header -->
<div id="main" class="site-main">
    
    <!-- newer themes use <div id="content" class="site-content">  -->

