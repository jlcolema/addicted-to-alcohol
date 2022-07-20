<?php get_header(); ?>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-8">
				<div id="breadcrumbs">
					<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb();}?>
				</div>
				<div class="post-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'templates/content', 'page' ); ?>
						<?php include(get_template_directory().'/templates/author-information.php'); ?>
						<?php include(get_template_directory().'/templates/article-resources.php'); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-4" id="sidebar">
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
