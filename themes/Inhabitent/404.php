<?php get_header(); ?>

<section class="page-404">
    <div class="content-404">
        <h2>oops! that page can't be found</h2>
        <p>It looks like nothing was found at this location. Maybe try one 
            of the links below or a search?</p>
    
    <?php get_search_form();?>
    <!-- <form  action="action.php" method="post">
        <input class="input-404" type="text" placeholder="Type and hit enter">
     </form> -->

     <div class="recent-post">

         <?php the_widget( 'WP_Widget_Recent_Posts'); ?>
     </div>
    
     <div class="most-used-categories">
         <h2>most used categories</h2>
         <ul>
             <?php wp_list_categories( array (
                 'orderby' => 'count',
                 'order' => 'DESC',
                 'show_count' => 1,
                 'title_li' => '',
                 'number' => 10
             )); ?>
         </ul>
     </div>

     <div class="archives-404">
        <!-- <h2>archives</h2>
        <p>Try looking in the monthly archives. <span>&#128578</span></p> -->
        <?php 
        $archive_content = '<p>' . sprintf(esc_html('Try looking in the monthly archives. %1$s'),
        convert_smilies(':)')) .'</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");?>
     </div>
    
    
    
    </div>
    
    <div class="sidebar-404">
        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer();?>