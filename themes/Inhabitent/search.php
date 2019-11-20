<?php get_header(); ?>

<section class="search-post">
        
    <div class="search">
        <?php if( have_posts() ) :
            //The WordPress Loop: loads post content 
                while( have_posts() ) :
                    the_post(); ?>
                    <div class="search-title">
                        <h2><?php the_title(); ?></h2>
                        <?php echo wp_trim_words(get_the_content(), 50, '[...]'); ?>
                        <div class="search-title-read">
                            <a href="<?php the_permalink();?>" class="btn transparent-post-btn">read more →</a>
                        </div>
                    </div>
                    <?php endwhile;?>

                <?php else : ?>
                    <div class="no-post">
                        <h2>No posts found</h2>
                    </div>
        <?php endif;?>
    </div>  

    <div class="search-sidebar">
        <?php get_sidebar();?>
    </div>
</section>

<?php get_footer();?>