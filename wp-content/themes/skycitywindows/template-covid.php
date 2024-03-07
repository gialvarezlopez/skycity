<?php
    /*
     * Template Name: Template Covid
     */
?>

<?php  get_header(); ?>

    <section class="main_container pt50 pb50">
        <div class=''>
            <div class='mb50'>
                <h1 class="main_title text-center"><?php echo strtoupper(get_the_title()); ?></h1>
            </div> 
        </div>

        <div class="holder-small">
            <?php echo (get_the_content()); ?>
        </div>
    </section>



<?php get_footer(); ?>

