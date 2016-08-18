<?php
/**
 * The home slider template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">




      <div class="text-container">
        
        <?php the_title( '<h2 class="h2">', '</h2>' ); ?>
        
       
        <?php the_content();
		
		edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		
		?>
        
        
       </div>
      
      
      <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                 
<a href="<?php the_field('slider-link'); ?>" style="display:block;">

  <img src="<?php echo $image_url; ?>" class="img-responsive">
                     
                     </a>
                    
					<?php
				}
				?>
     
      </article>
      
      
      