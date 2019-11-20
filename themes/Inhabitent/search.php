<?php get_header(); ?>

<section class="search-post">
        
    <div class="search">
        <?php if( have_posts() ) :
            //The WordPress Loop: loads post content 
                while( have_posts() ) :
                    the_post(); ?>
    
                    <h2><?php the_title(); ?></h2>
                    <?php endwhile;?>

                <?php else : ?>
                    <p>No posts found</p>
        <?php endif;?>
    </div>  

    <div class="search-sidebar">
        <?php get_sidebar();?>
    </div>
</section>

<?php get_footer();?>