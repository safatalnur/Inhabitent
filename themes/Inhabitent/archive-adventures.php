<?php get_header(); ?>


<div class="adventures-main">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<div class="adventures-title">
    <p><?php the_title(); ?></p>
    <?php the_post_thumbnail('large');?>
    <a href="<?php the_permalink(); ?>" class="btn transparent-btn">Read more</a>

</div>
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>
    
<?php get_footer();?>