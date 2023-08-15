<!-- Sidebar
============================================= -->
<div class="sidebar nobottommargin col_last">
    <div class="sidebar-widgets-wrap">
        <?php
            
            if ( is_active_sidebar( 'custom_theme_sidebar' ) ){
                dynamic_sidebar( 'custom_theme_sidebar' );
            }

        ?>
    </div>
</div><!-- .sidebar end -->