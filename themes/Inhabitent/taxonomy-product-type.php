<?php get_header(); ?>


<?php $term = get_term_by (
        'slug',
        get_query_var( 'term'),
        get_query_var( 'taxonomy')
);
?>

<div class="product-type-header">
    <h2><?php echo $term ->name; ?></h2>
    <p><?php echo $term->description; ?></p>
</div>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- <h2><?php the_title(); ?></h2> -->
    <?php the_post_thumbnail('small');?>
    <!-- <h3><?php the_permalink();?></h3> -->
    <!-- <?php the_content(); ?> -->
    <?php echo "$ " . get_field('price');?>

    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>