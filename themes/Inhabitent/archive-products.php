<!-- archive product shop -->

<?php get_header(); ?>

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
 
        <div class="archive-product-image">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('large');?>
        </a>
    
        <figcaption class="archive-product-caption">
            <h2><?php echo the_title() . "........." . "$ " . get_field('price');?></h2>
        </figcaption>
        </div>
    <!-- Loop ends -->
    <?php endwhile;?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</div>
    
<?php get_footer();?>