<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        
        <?php if ( have_posts() ) : ?>
        
        <?php shape_content_nav( 'nav-above' ); ?>
        
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php //the_content(); ?>  <!-- "All the post content in a big smushed up pile." -->
        
        <?php //bloginfo("atom_url"); cool...  https://developer.wordpress.org/reference/functions/bloginfo/?>
        
        <!--
        <div class="entry-summary">
            <?php //the_excerpt(); ?>
        </div><!-- .entry-summary -- >
        -->
        
        
        <?php
          /* Include the Post-Format-specific template for the content.
          * If you want to overload this in a child theme then include a file
          * called content-___.php (where ___ is the Post Format name) and    that will be used instead.
          */
          get_template_part( 'content', get_post_format() );
          ?>
        
        
        <!--
            Basically, you make a loop (starts with while ends with endwhile) and put some stuff in it—
            stuff being WordPress Template Tags that pull information out of the posts we’re looping though, 
            just like bloginfo() pulled information out of our WordPress settings in the last lesson.
        -->
        
        <!--
            for all the extra bits that attend to any blog post: who wrote it, the time it was published, categories, tags, comments links-- 
            I like to break all this up into two sections: the meta stuff (author and entry date) which I put before the post content, 
            and the utility stuff (categories, tags and comments link) that I put after the content. 
            We’ll also put the post in its own containing article element with the title.
        -->
        
        <?php endwhile; ?>
        <?php shape_content_nav( 'nav-below' ); ?>
        
        <?php else : ?>
        <?php get_template_part( 'no-results', 'index' ); ?>
        
        <?php endif; ?>
        
        
    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>



