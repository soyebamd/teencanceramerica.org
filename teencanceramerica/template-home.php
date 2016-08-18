<?PHP

//Custom Page Templates

/*
Template Name: Front Page
*/

?>

<?php get_header(); ?>

<section id="left-col" class="col-md-8">
<div>
  <!--STATE OF THE NATION-->
  <section id="resource-center">
    <div class="title">
      <h4 class="h4 pull-left">In The News</h4>
    </div>
    <?php get_template_part( 'content-resource-center', get_post_format() ); ?>
  </section>
  
  <!--#STATE OF THE NATION-->
</div>
<div class="row">
    <div class="col-md-8" id="in-the-news">
    
    <div class="row">
    
      <div class="title">
        <h4 class="h4 pull-left">STATE OF THE NATION</h4>
        <div class="news-nav pull-right"> <span id="slider-next"> </span> <span  id="slider-prev"> </span> </div>
      </div>
      <!--news blog loop-->
      <section id="news-posts">
        <?php //Post type for CPT	
		
	
		
/*		
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => array('resources'),
	'paged' => $paged,
	'showposts' => 8
);
query_posts($args);
	*/
	
query_posts( array( 'post_type' => 'post', 'showposts' => 4, 'category_name' => 'resources' ) );

			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
						/*
					 included file - content-slider.php
					 */
					get_template_part( 'content-news', get_post_format() );

				endwhile;
			
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
?>
        <!--loop-->
      </section>
      
      </div>
      <!--#news blog loop-->
    </div>
    <div class="col-md-4" id="upcoming-events">
    
    <div class="rpw">
      <div class="title">
        <h4 class="h4 pull-left">Upcoming Events</h4>
      </div>
      <!--upcoming-events-posts-->
      <section id="upcoming-events-posts">
        <article>
          <?php get_template_part( 'content-upcoming-events', get_post_format() ); ?>
        </article>
      </section>
      <!--#upcoming-events-posts-->
    </div>
  </div></div>
</section>

<!--sidebar-->
<?php get_sidebar('home'); ?>
<!--#sidebar-->
<?php get_footer(); ?>