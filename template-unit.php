<?php
//Custom Page Templates
/*
Template Name: Unit Page Template
*/
?>
<?php
$page = $_SERVER['REQUEST_URI'];
$page = str_replace('/', '', $page);
$page = str_replace('.php', '', $page);
$page = str_replace('?s=', '', $page);
$page = $page ? $page : 'default';
?>
<?php get_header(); ?>
<section id="left-col" class="col-md-8 <?php echo $page ?>">
	<div>
		<div class="title">
			<h4 class="h4 pull-left"><?php echo the_title(); ?></h4>
		</div>
		<div class="hospital-gallery-wrap">
			<div class="row">
				<div class="col-sm-12">
					<span class="unit-content">
						<?php $featured_gallery_image = get_post_meta($post->ID, 'featured_gallery_image', true); if ( $featured_gallery_image ) { echo $featured_gallery_image; } else { echo 'no img'; } ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; else: ?>
						<p>Something when wrong</p>
						<?php endif; ?>
					</span>
					<!-- hide these elements on load -->
					<div class="hide">
						<?php $featured_gallery_images_hidden = get_post_meta($post->ID, 'featured_gallery_images_hidden', true); if ( $featured_gallery_images_hidden ) { echo $featured_gallery_images_hidden; } else { echo 'no img'; } ?>
					</div>
				</div>
				
			</div>
		</div>
		<div class="hospital-quote">
			<?php $unit_quote = get_post_meta($post->ID, 'unit_quote', true); if ( $unit_quote ) { echo $unit_quote; echo '<div class="left-quote"></div><div class="right-quote"></div>'; } else { echo ''; } ?>
			
			<span><?php $unit_quote_by = get_post_meta($post->ID, 'unit_quote_by', true); if ( $unit_quote_by ) { echo $unit_quote_by; } else { echo ''; } ?></span>
		</div>
		<?php
		$pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
		$pages = array();
		foreach ($pagelist as $page) {
		$pages[] += $page->ID;
		}
		$current = array_search($post->ID, $pages);
		$prevID = $pages[$current-1];
		$nextID = $pages[$current+1];
		?>
		<div class="unit-navigation">
			<?php if (!empty($prevID)) { ?>
			<div class="previous-unit unit-pager">
				<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
				Previous</a>
			</div>
			<?php }
			if (!empty($nextID)) { ?>
			<div class="next-unit unit-pager">
				<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</a>
			</div>
			<?php } ?>
		</div>
		<?php get_template_part( 'content', 'hospital-blog-slider' ); ?>
	</div>
</section>
<!--sidebar-->
<?php
get_sidebar('hospital');
?>
<!--#sidebar-->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
	<!-- The container for the modal slides -->
	<div class="slides"></div>
	<!-- Controls for the borderless lightbox -->
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
<ol class="indicator"></ol>
<!-- The modal dialog, which will be used to wrap the lightbox content -->
<div class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body next"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left prev">
				<i class="glyphicon glyphicon-chevron-left"></i>
				Previous
				</button>
				<button type="button" class="btn btn-primary next">
				Next
				<i class="glyphicon glyphicon-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
</div>
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="/wp-content/themes/teencanceramerica/css/bootstrap-image-gallery.min.css">
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="/wp-content/themes/teencanceramerica/js/bootstrap-image-gallery.min.js"></script>
<?php get_footer(); ?>