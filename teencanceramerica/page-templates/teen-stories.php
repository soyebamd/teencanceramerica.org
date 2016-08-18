<?PHP //Custom Page Templates
/*
Template Name:  Teen Stories
*/
?>

<?php get_header(); ?>



<section id="left-col" class="col-md-12">
        <div class="title">
          <h4 class="h4 pull-left"><?php the_title(); ?></h4>
        </div>
        
        <!--what we do blog-->
        
        <div id="celebrity-ambassadors">
        
          <div class="row">
          
            <div class="clearfix  margin-tb-10"></div>
            
            
<div class="teen-posts">      
           <!--loop-->
           
           
               <?php //Post type for CPT
			   
			
$temp = $wp_query1;
$wp_query1= null;
$wp_query1 = new WP_Query();
$wp_query1->query('showposts=20&post_type=teenstories'.'&paged='.$paged);




if ( $wp_query1->have_posts() ) :

// Start the Loop.

while ( $wp_query1->have_posts() ) : $wp_query1->the_post();

?>
           
            <article class="col-md-6 ">
            
            <div class="row">
            
            <section class="feature-img col-md-5">  <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
          <img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=200&h=210&q=100" alt="<?php the_title();?>" class="img-responsive" />
          <?php
				}
				
				else{ ?>
          <img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=http://www.kingtidestaging.com/clients/teencanceramerica/wp-content/uploads/2015/03/no-image.png&w=376&h=376&q=100" alt="<?php the_title();?>" class="img-responsive" />
          <?php
					}
				
				
		?>
            
            </section>
            
            <section class="col-md-7">
            
              <h3 class="h3"><?php the_title(); ?></h3>
              
              <?php the_date('l, F j, Y', '<p style="color:#929292;">', '</p>'); ?>
              
               <?php wpe_excerpt('teen_exc', 'teen_exc_excerptmore'); ?>



               <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> Continue reading <?php the_title(); ?></a>
               
         <?php    //echo '<div class="read-more"><a href="'. get_permalink($post->ID) . '" > Read More  <i class="fa fa-angle-double-right"></i> </a></div>'; ?>
        
            </section>
            </div>
            </article>
            
            
            
            
        <?php
        
		endwhile; ?>  <div class="clearfix"></div>
		
<?php		next_posts_link('&laquo; Older Entries');  		previous_posts_link('Newer Entries &raquo;');


		else :
		
		// If no content, include the "No posts found" template.
		
		get_template_part( 'content', 'none' );
		
		endif;
		
		?>      
            
            
            
            
            
            
            </div>
            
            
            
            
            
            
            <!--end loop-->
            
            
            
            
            
            
         
            
            
          </div>
        </div>
        <!--end what we do blog-->
      </section>



      




<?php get_footer(); ?>
