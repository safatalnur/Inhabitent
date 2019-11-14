<?php get_header(); ?>
<?php the_posts_navigation();?>

<div class="adventures-header">
    <h2>latest adventures</h2>
</div>
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

    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>
    
<?php get_footer();?>