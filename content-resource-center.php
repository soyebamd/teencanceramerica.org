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
    	

    
  

  <div class="row">

  <section class="col-md-6">
  
  	<?php //Post type for CPT
		
		
		 
		 
		 
query_posts( array( 'showposts' => 1, 'category_name' => 'news' ) );

			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
			
		?>	
  
  
  
  
              <div class="blog-feature-img">
              
              <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                    
				 <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">	<img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php the_title();?>" > </a>
                    
					<?php
				}
				?> 
          
              </div>
              <h3 class="h3"> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
             
              <?php wpe_excerpt('teen_info', 'teen_exc_excerptmore'); ?>
			  
			  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More...</a>
             
             <?php 
              
              	endwhile;
			
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
              
              
            </section>
            
          
          
          
        
            
            
            <section class="col-md-6" id="resource-posts">
             
             
             
             	<?php //Post type for CPT
		
query_posts( array( 'showposts' => 3, 'category_name' => 'news', 'offset'=>1) );

			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
			
		?>	
             
              <!--loop-->
              <article>
                <div class="resource-feature"><?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                    
					<img class="event-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=93&q=100" alt="<?php the_title();?>" />
                    
                    
                    
					<?php
				}
				?> 
                
               
                
                
          </div>
                <div class="resource-text">
                  <h4 class="h4">
                    <date><?php the_date(); ?></date>
                  </h4>
               
               <?php wpe_excerpt('resource_text', 'resource_text_excerptmore'); ?>
               
               <a href="<?php echo get_permalink(); ?>"> Read More...</a>
               
                </div>
              </article>
             
             
             <?php  	endwhile;
			
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
        
        
              <!--end loop-->
            </section>
          </div>
