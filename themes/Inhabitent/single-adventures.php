<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <?php the_post_thumbnail('large');?>
    
    <div class="adventures-content">
    <h2><?php the_title(); ?></h2>
    <!-- <h3><?php the_permalink();?></h3> -->
        <div class="adventures-content-text">
            <?php the_content(); ?>

    <div class="adventures-awesome">
        <ul class="adventures-social">
            <li><i class="fab fa-facebook-f"></i> Like </li>
            <li><i class="fab fa-twitter"></i> tweet </li>
            <li><i class="fab fa-pinterest"></i> pin </li>
        </ul>
    </div>

        </div>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


    
<?php get_footer();?>