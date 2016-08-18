<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>"  class="col-md-6">

 <?php  twentyfifteen_post_thumbnail();  ?>
 
 
 
	<?php
	
	
		// Page thumbnail and title.
		
		
		 
		
       
		the_title( '<h3 class="h3 ">', '</h3>' );
	?>
    
    
    
    
    
    <div class="founder-text">
    
    
               <?php echo get_post_meta($post->ID, 'role', true);   ?>
              </div>
              
              
               
	<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	
    
    
    
    
    
    
    
    
    
    
    
     
    
    
    
    <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

    
    

	<!-- .entry-content -->
</article><!-- #post-## -->
