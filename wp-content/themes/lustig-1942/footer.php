<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lustig_1942
 */

?>
</div><!-- #content -->

	

	<footer id="colophon" class="site-footer">
            <div class="footer--background-wrapper">
                <div class="site-info">
                    <div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lustig-1942' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'lustig-1942' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'lustig-1942' ), 'lustig-1942', '<a href="http://underscores.me/">Gisela Chodos</a>' );
			?>
                    </div>
		</div><!-- .site-info -->
                <div></div>
                <div></div>
		
            </div>
	</footer><!-- #colophon -->
        
        </div> <!-- #content--background-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
