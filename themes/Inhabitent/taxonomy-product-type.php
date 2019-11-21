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

<div class="product-type-content">
    <?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="product-type-image">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('large');?>
        </a>

        <figcaption class="figure-caption">
            <h2><?php echo the_title() . "......" . "$ " . get_field('price');?></h2>
        </figcaption>
     </div>  

    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>
 
<?php get_footer();?>