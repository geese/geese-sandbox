<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lustig_1942
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    
    <div id="content--background--outer-wrapper">  
        <div id="content--background--inner-wrapper">
            <div class="content--background-primary"></div>
            <div class="content--background-secondary"><div></div></div>
        </div>
    
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lustig-1942' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
                    <div id="wrapper__header-top">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    
			<?php
			//the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
                        <div class="site-title-wrapper">
                            <div class="header-left">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            </div><!-- .header-left -->
                            <div class="header-right">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            </div><!-- .header-right -->
                        </div><!-- .site-title-wrapper -->
			<?php else : ?>
                        <div class="site-title-wrapper">
                            <div class="header-left">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            </div><!-- .header-left -->
                            <div class="header-right">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            </div><!-- .header-right -->
                        </div><!-- .site-title-wrapper -->
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
                        <div class="site-description-wrapper">
                            <div class="header-left">
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                            </div><!-- .header-left -->
                            <div class="header-right">
<!--				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>-->
                            </div><!-- .header-right -->
                        </div><!-- .site-description-wrapper -->
			<?php
			endif; ?>
                    
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lustig-1942' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	

        
        
           <div id="content" class="site-content">
            
            
            