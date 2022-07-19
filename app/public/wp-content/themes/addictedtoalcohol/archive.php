<?php get_header(); ?>

<section>
	<div class="section-c1">
		<div class="title text-center">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</div>
		<div class="container-fluid">
			<div class="box">
				<div class="row no-gutters">
					<div class="col-lg-8 col-md-12">
						<div class="box-items d-flex">
							<div class="box-content d-flex flex-wrap">
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<?php get_template_part( 'templates/content', 'post' ); ?>
									<?php endwhile; ?>
									<?php get_template_part( 'templates/pagination', 'post' ); ?>
								<?php else : ?>
									<?php get_template_part( 'templates/content', 'none' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
