<?PHP //Custom Page Templates
/*
Template Name:  Hernan's Page
*/
?>

<?php get_header(); ?>



      <div class="container">
<header class="title "><h1 class="h4 pull-left"><?php the_title(); ?> </h1></header>
</div>

      <section id="left-col" class="col-md-8">
      
      
          <div class="clearfix  margin-tb-10"></div>
    
    
<?php 
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('&paged='.$paged);
?>
      
          
      
      
 <?php 
if ( $wp_query->have_posts() ) :

// Start the Loop.

while ( $wp_query->have_posts() ) : $wp_query->the_post();

?>
   
      
<?php the_content(); ?>

        
        
                 
            
 <?php
        
		endwhile; ?>
        
        <div class="clearfix"></div>
		
<?php		next_posts_link('&laquo; Older Entries');  		previous_posts_link('Newer Entries &raquo;');

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
  <div class="clearfix"></div>

<!--hernan's blog-->

<div class="col-md-12">
  <header class="title ">
    <h1 class="h4 pull-left">HERNAN'S BLOG</h1>
  </header>
  <div class="clearfix  margin-tb-20"></div>
  <div class="row">
    <section id="hernan-slider-post">
    
    
    
<?php 
$temp = $wp_query1;
$wp_query1= null;
$wp_query1 = new WP_Query();
$wp_query1->query('showposts=12&post_type=hernan'.'&paged='.$paged);


if ( $wp_query1->have_posts() ) :

// Start the Loop.

while ( $wp_query1->have_posts() ) : $wp_query1->the_post();

?>
      <article class="col-md-3">
        <div class="feature-img">
          <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
          <img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=376&h=227&q=100" alt="<?php the_title();?>" class="img-responsive" />
          <?php
				}
				
				else{ ?>
          <img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=http://www.kingtidestaging.com/clients/teencanceramerica/wp-content/uploads/2015/03/no-image.png&w=376&h=227&q=100" alt="<?php the_title();?>" class="img-responsive" />
          <?php
					}
				
				
		?>
        </div>
        <?php the_title( '<h3 class="h3">', '</h3>' ); ?>
        <p>
          <?php the_date() ?>
        </p>
        <?php wpe_excerpt('home_news', 'home_news_excerptmore'); ?>
      </article>
      <?php
        
		endwhile; ?>  <div class="clearfix"></div>
		
<?php		next_posts_link('&laquo; Older Entries');  		previous_posts_link('Newer Entries &raquo;');


		else :
		
		// If no content, include the "No posts found" template.
		
		get_template_part( 'content', 'none' );
		
		endif;
		
		?>
    </section>
  </div>
</div>
<!--#end-->






<?php get_footer(); ?>
