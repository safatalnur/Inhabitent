 <!-- journal page -->

<?php get_header(); ?>

<section class="journal-page">
    
    <div class="journal-post">
        <?php if( have_posts() ) :

        //The WordPress Loop: loads post content 
        while( have_posts() ) :
            the_post(); ?>
        
        <div class="journal-post-image">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('large');?>
        </div>
        
        <p><?php the_content(); ?></p>
        <a href="<?php the_permalink();?>" class="btn transparent-post-btn">read more →</a>
        
        <!-- Loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif;?>
    </div>


    <div class="journal-sidebar">   
        <?php get_sidebar();?>
    </div>


</section>
<?php get_footer();?>