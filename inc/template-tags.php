<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package one-eighty-church
 */

function echo_staff_bios() {
	echo "
		<h1>Meet the Staff</h1>
		<div class='row'>
			<div class='col-sm-4'>
				<a href='#p-sam'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/pastor-sam.jpg' . ")'>
						<div class='portfolio-title'>Dr. Sammy Kim</div>
					</div>
				</a>
			</div>
			<div class='col-sm-4'>
				<a href='#lydia-kim'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/lydia-kim.jpg'. "'>
						<div class='portfolio-title'>Pastor Lydia Kim</div>
					</div>
				</a>
			</div>
			<div class='col-sm-4'>
				<a href='#billy-kim'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/billy-kim.jpg'. "'>
						<div class='portfolio-title'>Pastor Billy Kim</div>
					</div>
				</a>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-4'>
				<a href='#henry-kim'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/henry-kim.jpg'. "'>
						<div class='portfolio-title'>Henry Kim</div>
					</div>
				</a>
			</div>
			<div class='col-sm-4'>
				<a href='#sarah-bennett'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/sarah-bennett.jpg'. "'>
						<div class='portfolio-title'>Sarah Bennett</div>
					</div>
				</a>
			</div>
			<div class='col-sm-4'>
				<a href='#charles-bennett'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/charles-bennett.jpg'. "'>
						<div class='portfolio-title'>Charles Bennett</div>
					</div>
				</a>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-4'>
				<a href='#stu-still'>
					<div class='portfolio-container' style='background: url(" . get_template_directory_uri() . '/images/portraits/stu-still.jpg'. "'>
						<div class='portfolio-title'>Stu Still</div>
					</div>
				</a>
			</div>
		</div>
	";
}

if ( ! function_exists( 'one_eighty_church_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function one_eighty_church_posted_on() {
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
			esc_html_x( 'Posted on %s', 'post date', 'one-eighty-church' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'one-eighty-church' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'one_eighty_church_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function one_eighty_church_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'one-eighty-church' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'one-eighty-church' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'one-eighty-church' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'one-eighty-church' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'one-eighty-church' ),
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
					__( 'Edit <span class="screen-reader-text">%s</span>', 'one-eighty-church' ),
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
