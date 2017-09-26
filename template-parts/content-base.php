<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package one-eighty-church
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    the_content();

    wp_link_pages( array(
      'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'one-eighty-church' ),
      'after'  => '</div>',
    ) );
  ?>
</article><!-- #post-<?php the_ID(); ?> -->
