<?PHP //Custom Page Templates
/*
Template Name:  Hernan's Page desing 2
*/
?>
<?php get_header(); ?>

<div class="container">
  <header class="title ">
    <h1 class="h4 pull-left">
      <?php the_title(); ?>
    </h1>
  </header>
</div>
<section id="left-col" class="col-md-8">
  <div class="clearfix  margin-tb-10"></div>
  <?php 
if ( have_posts() ) :

// Start the Loop.

while ( have_posts() ) : the_post();

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
<div class="col-md-12" id="hernan-for-desk">
  <header class="title ">
    <h1 class="h4 pull-left">HERNAN'S BLOG</h1>
  </header>
  <p>My name is Hernan. I was 15 when I went through treatment for Acute Myelogenous Leukemia. Somehow I beat it - but I felt so much was wrong about my experience. Things that could have helped other young people survive were missing.</p>
  <p>Now, I'm on a crusade to film the stories of teenage cancer fighters all across America. So far I've covered 34 states; I've driven 14,500 miles and have gathered 15 terabytes of footage, but I'm a long way from finished. I need your help to reach those teens in the remaining states that so desperately need to be heard. Join me and we will tell their story together!</p>
  <div class="road-carousel">
<?php 
$temp = $wp_query1;
$wp_query1= null;
$wp_query1 = new WP_Query();
$wp_query1->query('showposts=12&post_type=hernan'.'&paged='.$paged);


if ( $wp_query1->have_posts() ) :

// Start the Loop.

while ( $wp_query1->have_posts() ) : $wp_query1->the_post();


?>
    <div class="road-sub">
      <div class="road-sub-img">
        <?php 
				
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=376&h=227&q=100" alt="<?php the_title();?>" class="img-responsive" />
        <?php
				}
				
				else{ ?>
        <img  src="http://www.kingtidestaging.com/clients/teencanceramerica/wp-content/uploads/2015/03/no-image.png" alt="<?php the_title();?>" class="img-responsive" />
        <?php
					}
				
				//size-full wp-image-4863
		?>
      </div>
      <div class="road-sub-block">
        <h3><?php the_title(); ?></h3>
        <p>
          <?php the_date(); ?>
        </p>
        <?php wpe_excerpt('home_news', 'home_news_excerptmore'); ?>
      </div>
    </div>
    <?php
        
		endwhile; ?>
    <div class="clearfix"></div>
    <?php		next_posts_link('&laquo; Older Entries');  		previous_posts_link('Newer Entries &raquo;');


		else :
		
		// If no content, include the "No posts found" template.
		
		get_template_part( 'content', 'none' );
		
		endif;
		
		?>
  </div>
  <div class="clearfix  margin-tb-20"></div>
  <div class="row">
    <section id="hernan-slider-post"> </section>
  </div>
</div>
<!--#end-->
<?php get_footer(); ?>
