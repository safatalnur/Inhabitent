<!-- shop -->

<?php get_header(); ?>
<!-- <?php the_posts_navigation();?> -->


<Div class="shop-header">
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
</Div>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <div class="shop-picture">
    <?php the_post_thumbnail('large');?>
    <!-- <h2><?php the_title(); ?></h2> -->
    </div>

    <!-- <h3><?php the_permalink();?></h3> -->
    <!-- <?php the_content(); ?> -->
    <!-- <?php echo "$ " . get_field('price');?> -->
    
    <!-- Loop ends -->
    <?php endwhile;?>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>