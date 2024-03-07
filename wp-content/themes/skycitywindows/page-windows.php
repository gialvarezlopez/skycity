<?php  get_header(); ?>

    <section class="main_container pt50 pb50">
        <div class=''>
            <div class='mb50'>
                <h1 class="main_title text-center"><?php the_title(); ?>	</h1>
            </div> 
        </div>

        <?php 
          $args = array(
              'post_type' => 'window', 
              'posts_per_page' => '6',
              'paged' =>  $paged, 
              'post_status' => 'publish',
              //'orderby' => 'date',
              //'order'   => 'DESC',
            );
          $myQuery = new WP_Query($args);
        ?>
        <?php if ($myQuery->have_posts()) : ?>
          <div class="grid-container row-gap40 dynamic-grid-fluid" id="">
            <?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
              <div class="grid-item">
                <div class='content-info'>
                    <h2><?php echo the_title(); ?></h2>
                    <h3><?php echo get_field('window_description',  get_the_ID(), true)['sub_heading']; ?></h3>
                </div>
                  <!-- <img src="images/showroom/showroom-1.png" class="img-full"> -->
                  <!-- 
                    thumbnail (150px)
                    medium (300px)
                    medium Large (768px)
                    large (1024px)
                  -->
                  <?php $url = get_the_post_thumbnail_url( get_the_ID(), 'image_610_570' ); ?>
                  <!-- <img src="<?php //echo $url; ?>" class="img-full display-block"> -->
                  <div class='holderSetBgImgGrid' style='background-image: url(<?php echo $url; ?>);'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-3-col-style-420x333.png" class="img-full display-block">
                  </div>
                  <!--
                  <?php //$url = get_field('window_description',  get_the_ID(), true)['featured_image']['sizes']['image_610_570']; ?>
                  <?php //$url = get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>
                  -->
                  <!-- <img src="<?php echo $url; ?>" class="img-full display-block"> -->
                  <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-5.png" class="img-full"> -->
                <div class='holder-view-window'><a href="<?php echo get_post_permalink(get_the_ID()); ?>" class='btn-explore btn-gray mt40'>VIEW</a></div>
              </div>
                
            <?php endwhile;  wp_reset_postdata(); ?>
          </div>

          <div class="pagination holder-pagination">
            <?php 
                echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $myQuery->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => '?paged=%#%',
                      'show_all'     => false,
                      'type'         => 'list',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      //'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                      //'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                      'prev_text'    => sprintf( '<i></i> %1$s', __( 'Prev', 'text-domain' ) ),
                      'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
                      'add_args'     => false,
                      'add_fragment' => '',
                  ) );
            ?>
          </div>
        <?php endif; ?>

 
    </section>




<?php
  //get_template_part('template_inc/inc','footer');
  get_footer();
?>