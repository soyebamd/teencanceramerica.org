<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	
	
		// Page thumbnail and title.
		
		
       
		the_title( '<header class="title"><h1 class="h4 pull-left">', '</h1></header><!-- .entry-header -->' );
	?>
    
    
     <div id="what-we-do-blogs" class="entry-content">
     
     <figure class="feature-img margin-tb-20">
        
     <?php  twentyfifteen_post_thumbnail();  ?>
          
        
        </figure>
        
        
        
     
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
	
     
     
     </div>
    
    
    
    <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

    
    

	<!-- .entry-content -->
</article><!-- #post-## -->
