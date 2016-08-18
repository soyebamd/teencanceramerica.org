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




              <!--loop-->
              <article>
                <div class="blog-feature-img">
                
                
                <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                    
					<img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php the_title();?>" />
                    
					<?php
				}
				?>
                
                </div>
                  <?php the_title( '<h3 class="h3">', '</h3>' ); ?>
                
               <?php wpe_excerpt('home_news', 'home_news_excerptmore'); ?>
                
                
              </article>
              <!--loop-->
            
            
   
      
