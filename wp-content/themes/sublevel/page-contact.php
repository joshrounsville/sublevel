<?php
/*
 Template Name: Contact Page
 *
*/
?>


<?php get_header(); ?>


    <section>
      <div class="container">

        <div class="row text-center">
          <div class="span12">
            <h1 class="h2">Get in Touch</h1>
          </div>
        </div>

        <div class="row">
          <div class="span8 offset2 span-m-10 offset-m-1">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
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