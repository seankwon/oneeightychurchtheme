<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one-eighty-church
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer">
    <div class="site-info custom-container">
      <div class="row">
        <div class="col-sm-4">
          <h3>GET IN TOUCH</h3>
          <div class="social">
            <a target="_blank" href="http://www.facebook.com/180church">
              <img src="<?php echo get_template_directory_uri() . "/images/facebook.png" ?>">
            </a>
            <a target="_blank" href="http://www.youtube.com/user/180churchNYC">
              <img src="<?php echo get_template_directory_uri() . "/images/youtube.png" ?>">
            </a>
            <a target="_blank" href="http://180brg.tumblr.com/">
              <img src="<?php echo get_template_directory_uri() . "/images/tumblr.png" ?>">
            </a>
            <a target="_blank" href="http://pinterest.com/180Church/">
              <img src="<?php echo get_template_directory_uri() . "/images/pinterest.png" ?>">
            </a>
          </div>
          <div class="info-wrapper">
            180 Church Office
            <br />
            180church@180church.tv
            <br />
            <br />
            180 Church © 2017
          </div>
          <h3>COME TO SERVICE</h3>
          <div class="info-wrapper">
            AMC Loews Theater
            <br />
            890 Broadway
            <br />
            New York, NY 10003
            <br />
            Take: 4, 5, 6, N, R, Q to Union Square and walk up Broadway to 19th St
            <br />
            Service starts at 12 noon every Sunday!
          </div>
        </div>
        <div class="col-sm-4">
          <h3>SERVICE LOCATION</h3>
        </div>
        <div class="col-sm-4">
          <h3>DON'T MISS A SERMON!</h3>
        </div>
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
