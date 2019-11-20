<?php get_header(); ?>

<?php the_posts_navigation();?>

<div class="findus">


    <div class="findus-form">
            <?php if( have_posts() ) :
            //The WordPress Loop: loads post content 
                while( have_posts() ) :
                    the_post(); ?>
    
                    <h2><?php the_title(); ?></h2>
                    <div class="google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.
            2090410034552!2d-79.39998404903697!3d43.643818979019144!2m3!1f0!2f0!3f0!
            3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34ded41454b3%3A0x648b029428613f49!
            2sRED%20Academy%20Toronto!5e0!3m2!1sen!2sca!4v1574194146032!5m2!1sen!2sca" 
            width="700" height="450" frameborder="0" style="border:0;" 
            allowfullscreen=""></iframe>
</div>
            <?php the_content(); ?>
    
            <!-- Loop ends -->
            <?php endwhile;?>

            <?php else : ?>
                <p>No posts found</p>
            <?php endif;?>
    </div>

    <div class="findus-sidebar">
            <?php get_sidebar();?>
    </div>
</div>
    
<?php get_footer();?>