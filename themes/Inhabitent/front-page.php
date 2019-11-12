<?php get_header(); ?>
<!-- <h1><i class="fas fa-search"></i></h1> -->
<!-- inserting products -->

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

        <?php the_title();
        the_post_thumbnail('large');

        the_content();?>
    <?php endwhile;?>

<?php the_posts_navigation();?>


<div class="shop-stuff">
    <h2>SHOP STUFF</h2>
</div>

<div class="shop-item">

<?php 
$terms = get_terms( array (
    'taxonomy' => 'product-type',
    'hide_empty' => 0,
    ));
    if (! empty($terms)):
?>
    <div class="product_type_blocks">
  
        <?php foreach ($terms as $term):?>
        <div class="product_type_block_wrapper">
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug;?>do.svg" alt="<?php echo $term->name;?>" />
            <p><?php echo $term -> descripton; ?></p>
            <a href="<?php echo get_term_link( $term ); ?>" class="btn" ><?php $term->name;?> STUFF</a>
        </div>
        <?php endforeach; wp_reset_postdata();?>
    </div>
    <?php endif; ?>
</div>
<!-- <?php foreach($terms as $term):?>
    <a href="<?php echo "product-type/" .$term->slug;?><?php echo $term->name ;?></a>

<?php endforeach;?> -->



    
    <?php
    $args = array( 'numbersposts' => 3, 'order' => 'ASC', 'orderby' => 'title');
    $postslist = get_posts( $args);
    
    foreach ($postslist as $post): setup_postdata($post); ?>
    
        <div>

            <?php the_date(); ?>
            <brt />>
            <?php the_title();?>
            <?php echo wp_trim_words(get_the_excerpt(), 10, "..."); ?>
        </div>
    <?php endforeach;?>
    
    <!-- <h1>Hey this is the home page</h1> -->
   


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>