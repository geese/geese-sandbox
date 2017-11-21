<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Lustig_1942
 */

if ( ! function_exists( 'lustig_1942_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function lustig_1942_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'lustig-1942' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'lustig-1942' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'lustig_1942_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function lustig_1942_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'lustig-1942' ) );
			if ( $categories_list ) {
                                print('<span class="cat-icon">'
                                        .'<svg  
                                                style="display:block"
                                                width="25"
                                                id="categories-icon" 
                                                data-name="Layer 1" 
                                                xmlns="http://www.w3.org/2000/svg" 
                                                viewBox="0 0 14.15 14.06">

                                                <defs>
                                                        <style>.cls-1{fill:#231e21;}</style>
                                                </defs>

                                                <title>categories-2</title>

                                                <rect class="cls-1" width="4" height="4"/>
                                                <rect class="cls-1" x="5.07" width="4" height="4"/>
                                                <rect class="cls-1" y="5.02" width="4" height="4"/>
                                                <rect class="cls-1" x="5.07" y="5.02" width="4" height="4"/>
                                                <rect class="cls-1" x="10.13" y="5.02" width="4" height="4"/>
                                                <rect class="cls-1" y="10.04" width="4" height="4"/>
                                                <rect class="cls-1" x="5.07" y="10.04" width="4" height="4"/>
                                                <rect class="cls-1" x="10.13" y="10.04" width="4" height="4"/>

                                        </svg>' 
                                        .'</span>');
                            
				/* translators: 1: list of categories. */
				printf(  '<span class="cat-links">'
//                                        .'<span class="cat-icon">'
//                                        .'<svg 
//                                                id="categories-icon" 
//                                                data-name="Layer 1" 
//                                                xmlns="http://www.w3.org/2000/svg" 
//                                                viewBox="0 0 14.15 14.06">
//
//                                                <defs>
//                                                        <style>.cls-1{fill:#231e21;}</style>
//                                                </defs>
//
//                                                <title>categories-2</title>
//
//                                                <rect class="cls-1" width="4" height="4"/>
//                                                <rect class="cls-1" x="5.07" width="4" height="4"/>
//                                                <rect class="cls-1" y="5.02" width="4" height="4"/>
//                                                <rect class="cls-1" x="5.07" y="5.02" width="4" height="4"/>
//                                                <rect class="cls-1" x="10.13" y="5.02" width="4" height="4"/>
//                                                <rect class="cls-1" y="10.04" width="4" height="4"/>
//                                                <rect class="cls-1" x="5.07" y="10.04" width="4" height="4"/>
//                                                <rect class="cls-1" x="10.13" y="10.04" width="4" height="4"/>
//
//                                        </svg>' 
//                                        . '</span>'
                                        . esc_html__( '%1$s', 'lustig-1942' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'lustig-1942' ) );
			if ( $tags_list ) {
                                print('<span class="tags-icon"></span>');
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( '%1$s', 'lustig-1942' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'lustig-1942' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'lustig-1942' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
