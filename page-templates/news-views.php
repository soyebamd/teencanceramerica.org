<?PHP //Custom Page Templates

/*

Template Name:  News & Views Page

*/

?>



<?php get_header(); ?>











<section id="left-col" class="col-md-8">





<header class="title"><h1 class="h4 pull-left">News &amp; Views</h1></header>


<?php 
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=5&category=news'.'&paged='.$paged);
?>


<?php //Post type for CPT




if ( $wp_query->have_posts() ) :



// Start the Loop.



while ( $wp_query->have_posts() ) : $wp_query->the_post();



?>







<div class="news-container">



  <div class="news-image">

  <a class="resource-links" href="<?php echo get_permalink(); ?>">

       <?php 

				

				if(has_post_thumbnail()) {

					$image_id = get_post_thumbnail_id();

					$image_url = wp_get_attachment_url($image_id);

					?>

                     

					<img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=376&h=227&q=100" alt="<?php the_title();?>" class="img-responsive" />

                   

					<?php

				}

		?>

        </a>

        </div>

        

        <div class="news-block">

        <a class="resource-links" href="<?php echo get_permalink(); ?>">

        <?php the_title( '<h3 class="h3">', '</h3>' ); ?>

        

        <?php wpe_excerpt('home_news', 'home_news_excerptmore'); ?>

        </a>

        </div>

        

        </div>

		

		<?php

        

		endwhile;

		

		next_posts_link('&laquo; Older Entries');  		previous_posts_link('Newer Entries &raquo;');



		else :

		

		// If no content, include the "No posts found" template.

		

		get_template_part( 'content', 'none' );

		

		endif;

		

		?>





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

