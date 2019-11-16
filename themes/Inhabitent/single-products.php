<?php get_header(); ?>


<div class="single-page">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="single-page-image">
    <?php the_post_thumbnail('large');?>
    </div>

    <div class="single-page-contents">
    <h2><?php the_title(); ?></h2>
    <h1><?php echo "$ " . get_field('price');?></h1>
    <!-- <h3><?php the_permalink();?></h3> -->
    <?php the_content(); ?>
    
    <!-- Loop ends -->

    <div class="single-products-awesome">
        <ul class="single-products-social">
            <li><i class="fab fa-facebook-f"></i> Like </li>
            <li><i class="fab fa-twitter"></i> tweet </li>
            <li><i class="fab fa-pinterest"></i> pin </li>
        </ul>
    </div>
    </div>
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</div>
    
<?php get_footer();?>