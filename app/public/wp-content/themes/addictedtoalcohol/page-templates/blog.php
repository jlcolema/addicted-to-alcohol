<?php
/*
Template Name: Blog
Template Post Type: page
*/

global $paged;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$page_layout = get_field('page_layout');

get_header(); ?>

<section>
	<div class="section-c1">
		<div class="title text-center">
			<h1>ADDICTION & <strong>RECOVERY BLOG</strong></h1>
		</div>
		<div class="container-fluid">
			<div class="box">
				<div class="row">

					<div class="col-12 col-md-12 col-lg-8">
						<div class="box-items d-flex">
							<div class="box-content d-flex flex-wrap">
								<?php 
									$paged = get_query_var('paged') ? get_query_var('paged') : 1; 
									$args = array (
											'post_type' => 'post',
											'posts_per_page' => 10,
											'order' => 'DESC',
											'paged' => $paged
									);
									$blog_query = new WP_Query($args);
									
									if ( $blog_query->have_posts() ) :
								?>
									<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
										<?php 
											$attachment_id = get_post_thumbnail_id(get_the_ID());
											$thumb = wp_get_attachment_image_src($attachment_id, 'blog-grid-img-v2', true);
											$thumb_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
											$default_thumb = get_template_directory_uri().'/images/blog-grid-dummy-img-v2.png';
										?>
										<div class="box-card">
											<div class="card">
												<img class="card-img-top" src="<?php echo has_post_thumbnail() ? $thumb[0] : $default_thumb; ?>" alt="<?php echo $thumb_alt; ?>">
												<div class="card-body">
													<h3><a href="<?php the_permalink(); ?>" class="card-text text-decoration-none text-dark font-weight-bold"><?php the_title(); ?></a></h3>
													<div class="date"><?php echo get_the_date('F d, Y'); ?></div>
													<p><?php echo wp_trim_words(get_the_content(), 30, '..'); ?></p>
													<div class="readmore"> 
														<a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">Read More <i class="fas fa-caret-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
									<?php
						                $links = paginate_links([
						                    'base'    => @add_query_arg('paged','%#%'),
						                    'format'  => '?paged=%#%',
						                    'total'   => $blog_query->max_num_pages,
						                    'current' => $paged,
						                    'prev_text' => ('« Prev'),
						                    'next_text' => ('Next »')
						                ]);

						                if ( $links ) {
						                    echo '<div class="nav-numbers">';
						                        echo $links;
						                    echo '</div>';
						                }
						            ?>
						        <?php else: ?>
						        	<h3>No posts found!</h3>
								<?php endif; wp_reset_query(); wp_reset_postdata(); ?>
							</div>
						</div>
					</div>

					
					<div class="col-12 col-md-12 col-lg-4" id="sidebar">
						<?php get_sidebar(); ?>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>