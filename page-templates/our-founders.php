<?PHP //Custom Page Templates
/*
Template Name: Our Founders
*/
?>

<?php get_header(); ?>





<section id="left-col" class="col-md-8">


 <div class="title">
          <h4 class="h4 pull-left">our founders</h4>
</div>
        
        
     
       
      <div id="what-we-do-blogs">
          <div class="row">
            <div class="clearfix  margin-tb-10"></div>
           
           
           
           
           
           
           
           
        <?php
		
		query_posts( array( 'post_type' => 'our-founders' ) );


				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content-founder', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>        
            
            
            
            
            
            
            
            
            
          
          </div>
        </div>
       
       
 </section>
      
      



<!--sidebar-->
<?php get_sidebar('home'); ?>
<!--#sidebar-->



<?php get_footer(); ?>
