<?php


require_once 'inc/KTC.post.php';


// Register top right add areas
function theme_widgets_init() {
	
	
	register_sidebar( array(
    'id'          => 'top-right-add',
    'name'        => __( 'Top Right Add Section', $text_domain ),
    'description' => __( 'Top Right Add Section Widget.', $text_domain ),
	
	'before_widget' => '<article>',
		'after_widget'  => '</article>',
		
) );
	

}

  
  /*
  
  dynamic_sidebar('primary-widget-area');
     
  */
  
  
 

//add excerpt word length

 

    

function teen_exc($length) {
    return 40;
    }

    function home_news($length) {
    return 50;
    }
	
	
	 function resource_text($length) {
    return 16;
    }
	
	  function teen_info($length) {
    return 70;
    }
	
	
  
	
    function teen_info_excerptmore($more) {
		
		
	  return '<div class="read-more"><a href="'. get_permalink($post->ID) . '" > Read more about me...</a></div>';}
	  
	  
	
   
    function home_news_excerptmore($more) {
		
		
	  return '<div class="read-more"><a href="'. get_permalink($post->ID) . '" > Read More...</a></div>';}
	  
	  
	  
    function resource_text_excerptmore($more) {
		
		
	  return '...';}

	  function teen_exc_excerptmore($more) {
		
		
	  return '...';}
   
	
	
	    function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
    add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
    add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
    }
	
	
	    /*<?php wpe_excerpt('home_news', 'home_news_excerptmore'); ?>
    <?php wpe_excerpt('wpe_excerptlength_teaser', 'wpe_excerptmore'); ?>
	*/


function hospitalExcerpt($excerpt_word_count=20)
{
    global $post;
    $excerpt = $post->post_excerpt;
    if( $excerpt == '' )
    {
        $excerpt = $post->post_content;
        $excerpt = strip_shortcodes( $excerpt );
        $excerpt = str_replace(']]>', ']]>', $excerpt);
        $excerpt = strip_tags($excerpt);
	$words = explode(' ', $excerpt, $excerpt_word_count + 1);
	if (count($words) > $excerpt_length)
		{
		array_pop($words);
		$excerpt = implode(' ', $words);
		$excerpt .= '[...]';
		}
    }
    return $excerpt;
}

