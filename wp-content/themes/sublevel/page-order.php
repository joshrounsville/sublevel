<?php
/*
 Template Name: Order Page
 *
*/
?>


<?php get_header(); ?>


    <section>
      <div class="container">

        <div class="row text-center mar-b--20">
          <div class="span12">
            <h1 class="h2">Ordering a Sublevel Kit</h1>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <ul class="list-order-steps">
              <li>
                <h5 class="text-orange">Step 1</h5>
                <h3>What Size?</h3>
                <p>Choose your shell sizes, whether you need reinforcment rings, and your bearing edges.</p>
              </li>
              <li>
                <h5 class="text-orange">Step 2</h5>
                <h3>Choose a Finish</h3>
                <p>There’s a lot to choose from. We offer many options from custom finishes to wraps.</p>
              </li>
              <li>
                <h5 class="text-orange">Step 3</h5>
                <h3>Choose Your Hardware</h3>
                <p>What hardware fits your dream kit best? Whether it’s beaver tail lugs or wood hoops, we’ll make it happen.</p>
              </li>
              <li>
                <h5 class="text-orange">Step 4</h5>
                <h3>Wood or Acrylic?</h3>
                <p>Going for a classic maple sound, or something more specific like an acrylic kit?</p>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>


    <section class="bg-gray">
      <div class="container">

        <div class="row text-center">
          <div class="span12">
            <ul class="list-inline list-spacer-horz">
              <li><h4 class="h2 mar-b--0">Ready to start your custom drum project?</h4></li>
              <li><a href="<?php echo get_template_directory_uri(); ?>/library/downloads/sublevel-drums-order-form.pdf" target="_blank" class="btn">Download Order Form</a></li>
            </ul>
          </div>
        </div>

      </div>
    </section>


<?php get_footer(); ?>