<?php get_header(); ?>

<!-- inserting products -->

<section class="front-page-header">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


        <?php 
        the_post_thumbnail('large');
        ?>
   
    <?php endwhile;?>
    <div class="front-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo"/>
    </div>
<?php the_posts_navigation();?>
</section>

<!-- product-type section -->
<?php $product_types = get_terms('product_type', array(
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC'
)); ?>

<div class="shop-stuff">
    <h3>SHOP STUFF</h3>
</div>

<div class="shop-item">

    <?php 
        $terms = get_terms( array (
            'taxonomy' => 'product-type',
            'hide_empty' => false,
    ));
    if (! empty($terms)):
    ?>
    <div class="product_type_blocks">
  
        <?php foreach ($terms as $term):
            ?>
        <div class="product_type_block_wrapper">
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/<?php echo $term->slug;?>.svg"/>
            <p><?php echo $term->description; ?></p>
            <a href="<?php echo get_term_link(  ); ?>" class="product-type-btn" ><?php echo $term->name;?> STUFF</a>
        </div>
        <?php endforeach;?>
    </div>
    <?php endif; ?>
</div>
<!-- <?php foreach($terms as $term):?>
    <a href="<?php echo "product-type/" .$term->slug;?><?php echo $term->name ;?></a>

<?php endforeach;?>



 <!-- post type starts here -->

 <div class="inhabitent-journal-title">

        <h3>inhabitent journal</h3>

        </div>

<div class="inhabitent-journal">
    <?php
    $args = array( 
                'post_type'=>'post',
                'posts_per_page' => 3, 
                'order' => 'dSC', 
                'orderby' => 'date');
    $postslist = get_posts( $args);

      
    
    foreach ($postslist as $post): setup_postdata($post); ?>
    
        <div class="inhabitent-journal-image">
            <?php the_post_thumbnail('large'); ?>
            <div class="inhabitent-journal-subtitle">
                <p><?php the_date(); ?> <span><?php echo " / " . "Comments"?></span></p>
                <h3><?php the_title();?></h3>
                <a href="<?php the_permalink(); ?>" class="btn journal-transparent-btn">Read entry</a>
            </div>
        </div>
    <?php endforeach;?>
    
   
</div>

<div class="inhabitent-adventures-title">
        <h3>latest adventures</h3>

</div>

<div class="inhabitent-adventures">
<?php
    $args = array( 
                'post_type'=>'adventures', 
                'order' => 'ASC', 
                'orderby' => 'date');
    $adventureslist = get_posts( $args);

      
    
    foreach ($adventureslist as $post): setup_postdata($post); ?>
        <figure class="inhabitent-adventures-image">
            <?php the_post_thumbnail('large'); ?>
        
        
            <div>
                <p><?php the_title();?></p>
                <a href="<?php the_permalink(); ?>" class="btn inhabitent-transparent-btn">Read more</a>
            </div>
        </figure>
    <?php endforeach;?>

    

</div>
<div class="inhabitent-adventures-link">
    <p><a href="/inhabitent/adventures">more adventures</a></p>
</div>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>