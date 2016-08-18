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

<?php 

query_posts( array( 'post_type' => 'upcoming-events' ) );

			if ( have_posts() ) :
			
				while ( have_posts() ) : the_post(); ?>
				
					<div class="blog-feature-img">   <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                    
				<a href="<?php the_permalink(); ?>">	<img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php the_title();?>"  id="post-<?php the_ID(); ?>" /> </a>
                    
					<?php
				}
				?> </div>

	<?php 			endwhile;
			
			else :
		
				get_template_part( 'content', 'none' );

			endif;
?>

    
<ul class="list-unstyled">


<?php 

query_posts( array( 'post_type' => 'upcoming-events' ) );

			if ( have_posts() ) :
			
				while ( have_posts() ) : the_post(); ?>
				
				 <li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
                 

	<?php 			endwhile;
			
			else :
		
				get_template_part( 'content', 'none' );

			endif;
?>

    

               

              
                 
                </ul>
                
                
                

