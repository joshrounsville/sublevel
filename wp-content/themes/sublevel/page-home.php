<?php
/*
 Template Name: Home Page
 *
*/
?>


<?php get_header(); ?>


    <section>
      <div class="container">

        <div class="row text-center mar-b--20">
          <div class="span12">
            <h2>We offer great options for your custom drum project:</h2>
          </div>
        </div>

        <div class="row text-center">
          <div class="span3">
            <div class="icon-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/icons/saw.svg" alt="saw icon" width="65" height="65">
            </div>
            <h3>Custom Bearing Edges</h3>
            <p>We can cut any edge that you desire, whether it’s a 45°, double 45°, or a full round over. Edges give each kit its tone and personality.</p>
          </div>
          <div class="span3">
            <div class="icon-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/icons/paint-brush.svg" alt="paint brush icon" width="36" height="65">
            </div>
            <h3>Finishes</h3>
            <p>We can do any finish that you desire: Wrap, paint, stain,etc... or, come up with an idea and throw it at us!</p>
          </div>
          <div class="span3">
            <div class="icon-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/icons/drum-head.svg" alt="drum head icon" width="68" height="68">
            </div>
            <h3>Quality Shells</h3>
            <p>We work with 100% all maple Keller Shells. Choose plys ranging from 5, 6, 8, 10, 15 and hundreds of different sizes!</p>
          </div>
          <div class="span3">
            <div class="icon-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/icons/drum-head-cycle.svg" alt="drum head cycle icon" width="68" height="68">
            </div>
            <h3>Reclaim/Create:</h3>
            <p>for the drummer who has always wanted a custom kit but doesn't have the budget: we’ll clean up your kit and make it sing again!</p>
          </div>
        </div>

      </div>
    </section>


    <section class="bg-gray">
      <div class="container">

        <div class="row text-center">
          <div class="span12">
            <h2><a href="http://instagram.com/subleveldrumcompany" target="_blank">Instagram Feed</a></h2>
          </div>
        </div>

        <div class="row instagram" id="instagram"></div>

      </div>
    </section>

<?php get_footer(); ?>