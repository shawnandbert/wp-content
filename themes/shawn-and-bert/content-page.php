<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Shawn-and-Bert
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
                   if (! is_front_page()){ ?>
                      
                       
                        
                     <div class="content-top">  
                        <div class="line"></div>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                     </div>
                <?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sugarspice' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'sugarspice' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->