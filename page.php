<?php 

$page = $_SERVER['REQUEST_URI']; 

$page = str_replace('/', '', $page); 

$page = str_replace('.php', '', $page); 

$page = str_replace('?s=', '', $page); 

$page = $page ? $page : 'default'; 

?>

<?php get_header(); ?>











<section id="left-col" class="col-md-8 <?php echo $page ?>">

     
<div >
       

       <?php

				// Start the Loop.

				while ( have_posts() ) : the_post();



					// Include the page content template.

					get_template_part( 'content', 'page' );



					// If comments are open or we have at least one comment, load up the comment template.

					/* if ( comments_open() || get_comments_number() ) {

						 comments_template(); 

					} */

				endwhile;

			?>

       
</div>       

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