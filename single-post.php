<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<!--=====================================================
=            Blog Header with Featured image            =
======================================================-->
<?php 
$img_id = get_post_thumbnail_id(); 
$img = wp_get_attachment_image_url($img_id, 'blog-header');
?>

<style type="text/css">
#header-img {
	height: 40vh;
	background: url("<?php echo $img; ?>") no-repeat top center;

	  -webkit-background-size: 100%;

	  -moz-background-size: 100%;

	  -o-background-size: 100%;

	  background-size: 100%;	
}

@media (max-width: 1600px) {
	#header-img {
		height: 40vh;
	}
}
@media (max-width: 1500px) {
	#header-img {
		height: 30vh;
	}
}
@media (max-width: 1000px) {
	#header-img {
		height: 20vh;
	}
}
@media (max-width: 700px) {
	#header-img {
		height: 15vh;
	}
}
@media (max-width: 500px) {
	#header-img {
		height: 8vh;
	}
}	
</style>
<figure id="header-img">
	
	<!-- <img src="<?php echo wp_get_attachment_image_url($img_id, 'blog-header'); ?>"> -->
	
</figure>


<!--====  End of Blog Header with Featured image  ====-->


	<div id="primary" class="content-area container">
		<div class="row">
			<main id="main" class="site-main col-sm-12 col-md-12 col-lg-9">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'post-mfw-002' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<aside id="sidebar-mfw-001" class="col-sm-12 col-md-12 col-lg-3">

				<?php get_sidebar();  ?>

			</aside>
		</div> <!-- END ROW -->
	</div><!-- #primary -->


<?php
get_footer();
