<div class="sidebar-total">
<?php

if (! is_active_sidebar('sidebar-1')) {
    return;
}
;?>

    <div class="widget-area" role="complementary">
    
<?php dynamic_sidebar('sidebar-1');?>
</div> 
</div>