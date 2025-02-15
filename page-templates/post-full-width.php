<?php
/**
* Template Name: Full Width
* Template Post Type: post
*/
?>
<?php get_header(); ?>

<div class="page-content">
	<div class="container">
		<div class="row">
            <div class="col-12 col-md-12 col-lg-12">
				<div id="breadcrumbs">
					<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb();}?>
				</div>			
				<div class="post-content">
								
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						
						<?php include(get_template_directory().'/templates/date-options.php'); ?>
						<?php include(get_template_directory().'/templates/quick-jump.php'); ?>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<?php the_content(); ?>
						<?php include(get_template_directory().'/templates/author-information.php'); ?>
						<?php include(get_template_directory().'/templates/article-resources.php'); ?>

					</div>
					<!-- /article -->

				<?php endwhile; ?>
				<?php else: ?>

					<!-- article -->
					<article>
						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
					</article>
					<!-- /article -->

				<?php endif; ?>

				</div>					
			</div>			
		</div>
	</div>
</div>

<?php get_footer(); ?>
