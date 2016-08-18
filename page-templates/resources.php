<?PHP //Custom Page Templates

/*

Template Name:  Resources

*/

?>



<?php get_header(); ?>



      <section id="left-col" class="col-md-8">

      

      

      <div class="">



<header class="title"><h1 class="h4 pull-left">Resource Center</h1></header>









<div id="what-we-do-blogs" class="resources-blocks">

          <div class="row">

          

          <div class="clearfix  margin-tb-10"></div>

          

          

        <div id="divide">  

          

<?php //Post type for CPT



query_posts( array( 'post_type' => 'post', 'showposts' => 4, 'category_name' => 'resources' ) );



if ( have_posts() ) :



// Start the Loop.



while ( have_posts() ) : the_post();



?>

	

          

            <article class="col-md-6">

            <a class="resource-links" href="<?php echo get_permalink(); ?>">

            <div class="feature-img">    <?php 

				if(has_post_thumbnail()) {

					$image_id = get_post_thumbnail_id();

					$image_url = wp_get_attachment_url($image_id);

					?>

                    

					<img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=376&h=227&q=100" alt="<?php the_title();?>" class="img-responsive" />

                    

					<?php

				}

		?></div>

            </a>

            

            

              

               <a class="resource-links" href="<?php echo get_permalink(); ?>">

		 <?php the_title( '<h3 class="h3">', '</h3>' ); ?>

               </a>

        <a class="resource-links" href="<?php echo get_permalink(); ?>">

        <?php wpe_excerpt('home_news', 'home_news_excerptmore'); ?>

        </a>    

  

            </article>

            

 <?php

        

		endwhile; ?>

        

        <div class="clearfix"></div>

		

<?php		next_posts_link('&laquo; Older Entries');  		previous_posts_link('Newer Entries &raquo;');



		else :

		

		// If no content, include the "No posts found" template.

		

		get_template_part( 'content', 'none' );

		

		endif;

		

		?>           

            

            

            

            

            

            

            

              

            

            

            

            

            

            

            

            

            

            

          

          

          

          

          </div></div>

        </div>  </div>

        

        

        </section>















      

      





<!--sidebar-->



<?php

if(is_page('celebrity-ambassadors')){

   //do nothing

} else if(is_page('board-of-directors')) { 

    //do nothing

} else {

   get_sidebar('home');

}

?>





<!--#sidebar-->





<?php get_footer(); ?>