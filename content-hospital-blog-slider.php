<div class="title" style="margin-bottom:30px;">
	<h4 class="h4 pull-left">NEWS &amp; UPDATES</h4>
</div>
<div class="blog-wrap">
	<div class="carousel slide" id="blog-carousel">
		<div role="listbox" class="carousel-inner">
			<?php
			function isMobile() {
		    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
			}
			// Item size (set here the number of posts for each group)
			if(isMobile()){
			    $i = 1;
			}
			else {
			    $i = 3;
			}
			
			// Set the arguments for the query
			global $post;
			$args = array(
			'category_name' => 'hospital',
			'numberposts' => 21, // -1 is for all
			'post_type' => 'post', // or 'post', 'page'
			'orderby' => 'date', // or 'date', 'rand'
			'order' => 'ASC' // or 'DESC'
			);
			// Get the posts
			$myposts = get_posts($args);
			// If there are posts
			if ($myposts):
			// Groups the posts in groups of $i
			$chunks = array_chunk($myposts, $i);
			$html   = ""; /*
			* Item
			* For each group (chunk) it generates an item
			*/
			foreach ($chunks as $chunk):
			// Sets as 'active' the first item
			($chunk === reset($chunks)) ? $active = "active" : $active = "";
			$html .= '<div class="item ' . $active . '">';
				/*
				* Posts inside the current Item
				* For each item it generates the posts HTML
				*/
				foreach ($chunk as $post):
					if(isMobile()){
					    $html .= '<div class="col-xs-12">';
						}
						else {
						   $html .= '<div class="col-xs-4">';
						}
					$html .= '<a href="' . get_permalink($post->ID) . '">';
						$html .= '<div class="blog-carousel-image">';
							$html .= get_the_post_thumbnail($post->ID, 'medium');
						$html .= '</a>';
						$html .= '<div class="blog-carousel-liner">';
							$html .= '<h4><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></h4>';
							$html .= '<span>Posted on ' . get_the_date('m.d.y') . '</span>';
							$html .= '<p class="hospital-excerpt"> ' . hospitalExcerpt() . '</p>';
							$html .= '<p><a class="hospital-rm" href="' . get_permalink($post->ID) . '">read more</a></p>';
						$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
				endforeach;
			$html .= '</div>';
			endforeach;
			// Prints the HTML
			echo $html;
			endif;
			?>
		</div>
	</div>
	<a data-slide="prev" role="button" href="#blog-carousel" class="left carousel-control">
	</a>
	<a data-slide="next" role="button" href="#blog-carousel" class="right carousel-control">
	</a>
</div>