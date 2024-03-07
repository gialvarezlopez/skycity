<?php  get_header(); ?>

  <section class="main_container pt50 pb50">
        <div class=''>
            <div class='mb50'>
                <h1 class="main_title text-center"><?php the_title(); ?></h1>
            </div> 
        </div>

        <div class="holder-small">
          <?php the_content(); ?>
        </div>
  </section>


<?php
  //get_template_part('template_inc/inc','footer');
  get_footer();
?>