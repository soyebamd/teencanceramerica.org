<?php get_header(); ?>





<section id="left-col" class="col-md-8">



<div id="celebrity-ambassadors">
        
          <div >
          
            <div class="clearfix  margin-tb-10"></div>
            
            
            
           <!--loop-->
           
            
            
            
            
            
            <!--end loop-->
            
            
            
            
            
            
         
            
         
       
    	<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		
       </div></div>
 </section>
      
      



<!--sidebar-->
<?php get_sidebar('home'); ?>
<!--#sidebar-->



<?php get_footer(); ?>
