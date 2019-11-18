<?php get_header(); ?>

<section class="single-journal">

<div class="single-journal-main">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    <?php the_content(); ?>
    
    <div class="single-journal-awesome">
        <ul class="single-journal-social">
            <li><i class="fab fa-facebook-f"></i> Like </li>
            <li><i class="fab fa-twitter"></i> tweet </li>
            <li><i class="fab fa-pinterest"></i> pin </li>
        </ul>
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>

<div class="single-journal-sidebar">
<?php get_sidebar();?>
</div>

</section>
<?php get_footer();?>