<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package one-eighty-church
 */

get_header(); ?>
  
  <section class="section-two">
    <div class="custom-container location-section">
      <div class="text-center lead">Sunday Services @ <strong>12pm</strong> at <strong>AMC Loews Theater, 890 Broadway (@ 19th St) New York, NY 10003</strong></div>
    </div>
  </section>

  <section style="background: url('<?php echo get_template_directory_uri() . '/images/bg-grey-static.jpg' ?>');" id="primary" class="content-area section-one">
    <main id="home-page" class="wrapper">
      <h2 class='info-rect'>Find out more:</h2>
      <div class='row'>
        <div class='col-sm-8'>
          <h3>Latest Teaching</h3>
          <div class="panel panel-default">
            <div class="panel-body">
              <h6>September 17, 2017</h6>
              <h4>Where is Jesus in our vulnerability</h4>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/DPlyM4BHn04" frameborder="0" allowfullscreen></iframe>
              <h5>Where is Jesus in our vulnerability - Billy Kim</h5>
              <p>
                 The culture we live in often presents an adverse posture towards vulnerability - more or less, 
                 we are the products of hearts that are numbed.
                 However, deep within the human heart, amidst the allure of success, significance, 
                 and popularity, we long for our calling as the beloved. The invitation of the gospel 
                 and the journey of faith is recognizing the depth and pursuit 
                 of Gods love for us, and our ability to close the gap of intimacy 
                 in our relationships through the power of vulnerability. 
              </p>
              <p>© 180 Church 2017</p>
            </div>
          </div>
        </div>
        <div class='col-sm-4'>
          <h3>Resources</h3>
          <div class="resource-panel panel panel-default">
            <div class="panel-body">
              <h4>Our Mission</h4>
              <img src="<?php echo get_template_directory_uri() . '/images/home-turning.jpg' ?>">
            </div>
          </div>
          <div class="resource-panel panel panel-default">
            <div class="panel-body">
              <h4>Connect With Us</h4>
              <img src="<?php echo get_template_directory_uri() . '/images/home-living.jpg' ?>">
            </div>
          </div>
        </div>
      </div>
		</main><!-- #main -->
	</section><!-- #primary -->


<?php
//get_sidebar();
get_footer();
