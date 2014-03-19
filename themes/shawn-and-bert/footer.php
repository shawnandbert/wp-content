<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Shawn-and-Bert
 */
?>
    </div><!-- #main -->
        <?php if ( is_active_sidebar('prefooter-1') || is_active_sidebar('prefooter-2') || is_active_sidebar('prefooter-3') ) : ?>
            <div id="prefooter">
                <div id="prefooter-inner" class="row">

                <?php if ( is_active_sidebar( 'prefooter-1' ) ) : ?>
                <div <?php sugarspice_prefooter_class(); ?> role="complementary">
                    <?php dynamic_sidebar( 'prefooter-1' ); ?>
                </div><!-- #first .widget-area -->
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'prefooter-2' ) ) : ?>
                <div <?php sugarspice_prefooter_class(); ?> role="complementary">
                    <?php dynamic_sidebar( 'prefooter-2' ); ?>
                </div><!-- #second .widget-area -->
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'prefooter-3' ) ) : ?>
                <div <?php sugarspice_prefooter_class(); ?> role="complementary">
                    <?php dynamic_sidebar( 'prefooter-3' ); ?>
                </div><!-- #third .widget-area -->
                <?php endif; ?>
                                
                </div>
            </div><!-- #prefooter -->
        <?php endif; ?>
        </div><!-- #page -->

        <footer id="footer" class="site-footer" role="contentinfo">
            <?php 
            if(has_nav_menu('footer')){


              wp_nav_menu( array( 
                    'theme_location'=> 'footer', 
                    'container'     => false,
                    'menu_id'       => 'footer-nav',
                    'fallback_cb'   => 'wp_page_menu' ,
                    'depth'         => 1
                ) ); 
            }
            ?>

        </footer>

<?php wp_footer(); ?>

</body>
</html>