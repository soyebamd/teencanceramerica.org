<section id="home-sidebar" class="col-md-4">
  
  <!--section1-->
  <?php if ( is_page( 'hernan-donate' )):  ?>
  
  <div class="title shop-title" style=" display:block; height: auto; float: left">
    <h4 class="h4 pull-left">JOIN THE REBELLION </h4>
  </div>
  <div class="clearfix  margin-tb-10"></div>
  <p>From gas to hotels to equipment, Hernan needs all the help he can get! If you want to see Hernan finish his journey and make it to your state, please consider a donation. Any amount helps! </p>
  <p> Help Hernan spread the word for Teen Cancer America and give teens and young adults across the country the chance to share their stories! </p>
  <p> CLICK ON THE DONATE BUTTON BELOW TO CONTRIBUTE AND JOIN THE ROAD REBELLION TODAY!</p>
  <a href="http://www.teencanceramerica.org/donate/" class="btn btn-default pull-right ">Donate Now</a>
  <div  class="clearfix"></div>
  <?php endif; ?>
  
  
  
  
  
  
  <!--section2  -->
  <?php //if  (is_front_page() || is_home() ): ?>
  
  <div class="title">
    <h4 class="h4 pull-left">Our Hospital Partners</h4>
  </div>
  <section id="sidebar-wrapper">
    <ul class="sidebar-hospitals">
    <?php
    $mypages = get_pages("parent=6931&sort_column=post_date");
    foreach ( $mypages as $mypage ) {
    if ($mypage->ID) {
    echo '<li><a href="' . get_permalink( $mypage->ID ) . '" title="' . esc_attr( $mypage->post_title ) . '">';
    echo $mypage->post_title;
    echo '</a>';
    echo '</li>';
  }
  }
  ?>
</ul>
  
  <!--section3-->
  <!--HERNAN'S BLOG SECTION-->
  <?php if(is_page( 'road-rebellion' )){ ?>
  <div class="clearfix" style="height:30px;"></div>
  <article id="hernan-for-mob">
    <div  id="hernan-for-mob">
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
        <?php   next_posts_link('&laquo; Older Entries');     previous_posts_link('Newer Entries &raquo;');
        else :
        
        // If no content, include the "No posts found" template.
        
        get_template_part( 'content', 'none' );
        
        endif;
        
        ?>
      </div>
      
      
    </div>
  </article>
  <?php } ?>
  <!--#meet the teen-->
  <article class="tca-social">
    <ul class="list-inline list-unstyled social-icons " style="margin:0;">
      <div class="title shop-title" style=" display:block; height: auto; float: left">
        <h4 class="h4 pull-left">FOLLOW US </h4>
      </div>
      <li><a target="_blank" href="http://facebook.com/teencanceramerica/"><i class="fa fa-facebook"></i></a></li>
      <li><a target="_blank" href="http://twitter.com/teencancerusa/"><i class="fa fa-twitter"></i></a></li>
      <li><a target="_blank" href="http://instagram.com/teencanceramerica/"><i class="fa fa-instagram"></i></a></li>
      <li> <a target="_blank" href="http://www.youtube.com/user/TeenCancerAmerica"><i class="fa fa-youtube"></i></a></li>
    </ul>
  </article>
  
  
  
  
  
  <!--section4-->
  <?php if(is_page( 'road-rebellion' )){ ?>
  <!--no title-->
  
  <?php } else { ?>
  <article id="dynamic-side-tory">
    <div class="title shop-title" style=" display:block; height: auto; float: left">
      
      <h4 class="h4 pull-left"> WANT MORE? KEEP READING...</h4>
    </div>
    <ul class="list-inline list-unstyled ">
      
      <?php
      
      query_posts( array( 'orderby'=>'rand', 'showposts'=>1, 'year'=>2015 ) );
      ?>
      
      <?php //For Post ?>
      
      <?php if (have_posts()) : ?>
      
      <?php while (have_posts()) : the_post(); // the loop ?>
      
      <li class="post" id="post-<?php the_ID(); ?>">
        
        <h4 style="font-size:15px;"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h4">
          
          <?php the_title(); ?>
          
        </a></h4>
        
        <small><em>
        
        <?php the_time('F jS, Y') ?>
        
        by
        
        <?php the_author() ?>
        
        </em> </small> <br>
        
        <?php wpe_excerpt('Read More...'); ?>
        
      </li>
      
      <?php endwhile; ?>
      
      <?php else : ?>
      
      <h2 class="center">Not Found</h2>
      
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
      
      <?php endif; ?>
      
    </ul>
    
  </article>
  
  <?php } ?>
  
  <!--section5-->
  <article id="subscribe">
    <div style=" display:block; height: auto; float: left" class="title shop-title">
      
      <h4 class="h4 pull-left">Subscribe to Our Newsletter</h4>
    </div>
    <div style="clear:both;"></div>
    <?php echo do_shortcode('[formassembly formid=387862]'); ?>
  </article>
  
</section>

<!--sidebar wrapper-->
</section>