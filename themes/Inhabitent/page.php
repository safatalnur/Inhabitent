<?php get_header(); ?>

<?php the_posts_navigation();?>

<div class="findus">
    <div class="findus-form">
            <?php if( have_posts() ) :
            //The WordPress Loop: loads post content 
                while( have_posts() ) :
                    the_post(); ?>
    
                    <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
    
            <!-- Loop ends -->
            <?php endwhile;?>

            <?php else : ?>
                <p>No posts found</p>
            <?php endif;?>
    </div>

    <div class="findus-sidebar">
            <?php get_sidebar();?>
    </div>
</div>
    
<?php get_footer();?>