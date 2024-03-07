<?php
    /*
     * Template Name: Template Blog
     */
?>

<?php  get_header(); ?>

    

    <!-- Blog -->
    <section class="main_container pt50 pb50">
        <div class=''>
            <div class='mb50'>
                <h1 class="main_title text-center"><?php echo (the_title()); ?></h1>
            </div> 
        </div>

        <?php 
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
                'post_type' => 'post', 
                'posts_per_page' => '12', 
                'paged' =>  $paged, 
                'post_status' => 'publish',
                //'orderby' => 'date',
                //'order'   => 'DESC',
            );
          $myQuery = new WP_Query($args);
        ?>
        <?php if ($myQuery->have_posts()) : ?>
            <div class="grid-container col-2 gap50">
                <?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
                    <div class="grid-item">
                           <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/showroom-1.png" class="img-full"> -->
                            <!-- 
                            thumbnail (150px)
                            medium (300px)
                            medium Large (768px)
                            large (1024px)
                        -->
                        <?php $url = get_the_post_thumbnail_url( get_the_ID(), 'image_740_500' ); ?>
                        <div class="holderSetBgImgGrid"  style='background-image: url(<?php echo $url; ?>);'>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-2-col-style-638x335.png" class="img-full display-block">
                        </div>

                        <!-- <img src="<?php //echo $url; ?>" class="img-full"> -->
                        <?php //echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
                        <?php //the_post_thumbnail('featured-large'); ?>

                        <div class='content-info-no-bg mt30'>
                            <h2><?php echo the_title(); ?></h2>
                            <a href="<?php echo get_post_permalink(get_the_ID(), true, true); ?>" class='btn-explore btn-blue mt20'>READ</a>
                        </div>
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


<?php get_footer(); ?>

