<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



<article id="post-<?php the_ID(); ?>" class="celeb-posts page-nav">


            
            <div class="row">
            
            <section class="feature-img col-md-4">  <?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>
            
            </section>
            
            <section class="col-md-8">
            
              <header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h3 class="h3">', '</h3>' );
			else :
				the_title( sprintf( '<h3 class="h3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
			endif;
		?>
	</header><!-- .entry-header -->
             
             	<div class="entry-content">
                
                
                

             <?php the_excerpt(); ?>
              
              </div>
             
            </section>
            </div>
            </article>



<!-- #post-## -->
