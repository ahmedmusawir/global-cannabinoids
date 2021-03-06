<?php 
/**
 *
 * MODULE: Blog Index Block w/ Sidebar 001
 *
 */
?>

<main id="blog-index-block-with-sidebar-mfw-001" class="">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- <h1 class="display-2 text-center">Our Stories</h1>	 -->

			<section class="container">

				<div class="row">

					<div class="col-sm-12 col-md-9 col-lg-9">				

						<article class="post-item" >
							
							<?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>

									<?php
									endif;

									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'post-item-mfw-001' );

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif; 
							?>				

						</article>

					</div> <!-- END COL 9 -->	

					<div class="col-sm-12 col-md-3 col-lg-3">

						<?php get_sidebar(); ?>
						
					</div> <!-- END SIDEBAR COL 3 -->					

				</div> <!-- END ROW -->	

				
			</section> <!-- END MAIN CONTAINER -->



		</main><!-- #main -->
	</div><!-- #primary -->
	

</main>