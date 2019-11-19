<!-- archive product shop -->

<?php get_header(); ?>
<!-- <?php the_posts_navigation();?> -->


<div class="shop-header">
    <h2>shop stuff</h2>
    <ul class="product-nav">
        <?php

        $terms = get_terms ([
            'taxonomy' => 'product-type',
            'hide-empty' => false,
        ]);

        foreach ($terms as $term) {
            echo '<li><a href=' . get_term_link($term) . '>' .$term->name . '</a></li>';
        }
        ?>
    


    </ul>
</div>

<div class="shop-picture">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
 
    
    <!-- <a href="<?php the_permalink();?>"> -->
    <?php the_post_thumbnail('large');?>
    

    <!-- <?php the_content(); ?> -->
    <!-- <?php echo "$ " . get_field('price');?> -->
    
    <!-- Loop ends -->
    <?php endwhile;?>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</div>
    
<?php get_footer();?>