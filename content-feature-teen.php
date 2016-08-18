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


   
          <article>
          
           
       <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                    
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php the_title();?>" ></a>
                    
					<?php
				}
				?> 
          
           <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h5 class="h5">MEET THE TEEN: <?php the_title(); ?></h5></a>
            <p>
              <date><?php the_date(); ?></date>
              
             </p>
             
            <?php wpe_excerpt('teen_info', 'teen_info_excerptmore'); ?>
             
             
           <!-- <div class="teen-thumbs row">
              <div class="col-sm-6"> <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/teen-thumb.jpg" class="img-responsive"> </div>
              <div class="col-sm-6"> <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/teen-thumb.jpg" class="img-responsive"> </div>
            </div>
            
            -->
            
            
          </article>
          <!--#meet the teen-->
          
      
      
      