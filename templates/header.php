<!--  Mobile Menu  -->

<div class="mobile-menu">
    
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-menu-nav']);
      endif;
    ?>

    <div class="clear">
        <i class="material-icons">clear</i>
    </div>
</div>


<!--   Header   -->

<header class="header sticky-header">
    <div class="container">
        <div class="header-inner">
            <div class="logo-section">
                
                <?php if ( function_exists( 'the_custom_logo' ) ) :  ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
                
            </div>

            <nav>
                
                <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills']);
                  endif;
                ?>
                
                <div class="mobile-btn">
                    <i class="line1"></i>
                    <i class="line2"></i>
                    <i class="line3"></i>
                </div>

            </nav>
        </div>
    </div>
</header>