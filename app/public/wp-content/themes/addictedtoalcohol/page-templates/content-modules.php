<?php 

/* Template Name: Content Modules */ 

get_header(); ?>

<?php if ( have_rows( 'content_modules' ) ): ?>
	<?php while ( have_rows( 'content_modules' ) ) : the_row(); ?>

		<?php if ( get_row_layout() == 'hero_section' ) : ?>

			<?php  
				$layout = get_sub_field('layout');
				$heading = get_sub_field('heading');
				$bold_heading = get_sub_field('bold_heading');
				$subheading = get_sub_field('subheading');
				$other_content = get_sub_field('other_content');
				$button = get_sub_field('button');
				$add_phone_icon_to_button = get_sub_field('add_phone_icon_to_button');
				$image = get_sub_field('image');
				$background_overlay = get_sub_field('background_overlay');
				$background_image = get_sub_field('background_image');
				$bg_url = $background_image['sizes']['hero-bg'];
				$default_thumb = get_template_directory_uri().'/assets/images/hero.jpg';
			?>

			<?php if($layout == 'Layout One') : ?>
				<div class="hero" style="background-image:url(<?php echo $bg_url ? $bg_url : $default_thumb; ?>);">
					<div class="container">
						<?php if($heading) : ?>
							<div class="pre-heading"><?php echo $heading; ?></div>
						<?php endif; ?>
						<?php if($bold_heading) : ?>
							<h1><?php echo $bold_heading; ?></h1>
						<?php endif; ?>
						<?php if($subheading) : ?>
							<p><?php echo $subheading; ?></p>
						<?php endif; ?>
						<?php if($button) : ?>
							<a class="btn btn-secondary btn-lg" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <?php if($add_phone_icon_to_button) : ?><i class="fas fa-phone"></i><?php endif; ?></a>
						<?php endif; ?>
					</div>
				</div>
			<?php elseif($layout == 'Layout Three') : ?>
				<section class="hero-sec-v2 hero-layout-three <?php if($background_overlay == 'White') {echo 'style-white';}  ?>">
						<div class="section-a1">
							<div class="background" style="background-image:url(<?php echo $bg_url ? $bg_url : $default_thumb; ?>);">
								<div class="<?php if($background_overlay == 'White') {echo 'bg';} else{ echo 'opacity';} ?>"></div>
								
							
							<div class="text m-auto text-center">
								<?php if($bold_heading) : ?>
									<h1 class="text-white"><?php if($bold_heading) : ?><span class="font-weight-bold"><?php echo $bold_heading; ?></span><?php endif; ?></h1>
								<?php endif; ?>
								<?php if($heading) : ?>
									<h1 class="text-white"><?php echo $heading; ?></h1>
								<?php endif; ?>
								<?php if($subheading) : ?>
									<p class="text-white"><?php echo $subheading; ?></p>
								<?php endif; ?>
								<?php if($button) : ?>
									<a class="btn btn-secondary btn-lg" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <?php if($add_phone_icon_to_button) : ?><i class="fas fa-phone"></i><?php endif; ?></a>
								<?php endif; ?>
								
								<?php if($other_content) : ?>
									<div class="other-content">
									<?php echo $other_content; ?>
									<div>
								<?php endif; ?>
							</div>
								
							</div>
						</div>
				</section>
				
			<?php else : ?>
				<section class="hero-sec-v2">
					<?php if($image) : ?>
						<div class="section-d1" style="background-image:url(<?php echo $bg_url ? $bg_url : $default_thumb; ?>);">
							<div class="<?php if($background_overlay == 'White') {echo 'bg';} else{ echo 'opacity';} ?>"></div>
							<div class="container-fluid">
								<div class="box">
									<?php if($heading || $subheading) : ?>
										<div class="text-center">
											<?php if($heading) : ?>
												<h1 class="text-center text-white"><?php echo $heading; ?></h1>
											<?php endif; ?>
											<?php if($subheading) : ?>
												<p class="text-center text-white"><?php echo $subheading; ?></p>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									<div class="img text-center pt-5">
										<img src="<?php echo $image['sizes']['hero-inner-img']; ?>" alt="<?php echo $image['alt']; ?>" width="800">
									</div>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="section-a1">
							<div class="background" style="background-image:url(<?php echo $bg_url ? $bg_url : $default_thumb; ?>);">
								<div class="<?php if($background_overlay == 'White') {echo 'bg';} else{ echo 'opacity';} ?>"></div>
								<?php if($bold_heading) : ?>
									<div class="text m-auto text-center">
										<h1 class="text-white"><?php if($bold_heading) : ?><span class="font-weight-bold"><?php echo $bold_heading; ?></span><?php endif; ?></h1>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				</section>
			<?php endif; ?>
		
		<?php elseif ( get_row_layout() == 'content_block' ) : ?>

			<?php $section_heading = get_sub_field('section_heading'); ?>

			<?php if ( have_rows( 'content_rows' ) ) : ?>
				<div class="text-section who-we-are">
					<div class="container">
						<?php while ( have_rows( 'content_rows' ) ) : the_row(); ?>
							<?php  
								$content_layout = get_sub_field('content_layout');
								$content = get_sub_field('content');
								$media_type = get_sub_field('media_type');
								$image = get_sub_field('image');
								$video_url = get_sub_field('video_url');
								$video_iframe = get_sub_field('video_iframe');
								$button = get_sub_field('button');
							?>
							<div class="row">
								<?php if($content_layout == 'Two Columns') : ?>
									<div class="col-12 col-md-6">
										<?php if($media_type == 'Video') : ?>
											<div class="video-container">
												<?php if($video_url) : ?><iframe width="480" height="270" src="<?php echo $video_url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><?php endif; ?>
												<?php echo $video_iframe; ?>
											</div>
										<?php else: ?>
											<div class="image-container">
												<img src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>">
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<div class="<?php if($content_layout == 'Two Columns') {echo 'col-12 col-md-6';} else{echo 'col-12';} ?>">
									<?php if($section_heading) : ?>
										<h2><?php echo $section_heading; ?></h2>
									<?php endif; ?>
									<?php echo $content; ?>
									<?php if($button) : ?>
										<a class="btn btn-primary btn-lg" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?></a>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		
		<?php elseif ( get_row_layout() == 'content_image_slider_block' ) : ?>

			<?php if ( have_rows( 'content_rows' ) ) : ?>
				<?php $content_row=0; $slider_block=1; while ( have_rows( 'content_rows' ) ) : the_row(); ?>
					<?php  
						$pre_heading = get_sub_field('pre-heading');
						$heading = get_sub_field('heading');
						$content = get_sub_field('content');
						$mosaic_images = get_sub_field('mosaic_images');
						$slider_images = get_sub_field('slider_images');
						$button = get_sub_field('button');
						$image_layout = get_sub_field('image_layout');
					?>
					<?php if($image_layout == 'Slider') : ?>
						<section class="content-layout-slider">
							<div class="section-d2 d2<?php if($content_row%2 == 1) {echo ' font-bg';} ?>">
								<div class="container-fluid">
									<div class="row<?php if($content_row%2 == 1) {echo ' flex-row-reverse';} ?>">
										<div class="col-lg-5 col-md-12 align-self-center">
											<div class="box">
												<?php if($heading) : ?>
													<div class="title">
														<h2><?php echo $heading; ?></h2> 
													</div>
												<?php endif; ?>
												<?php if($content) : ?>
													<div class="content">
														<?php echo $content; ?>
													</div>
												<?php endif; ?>
												<?php if($button) : ?>
													<div class="button-wrapper two"> 
														<a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?><i class="fas fa-caret-right ml-6"></i></a>
													</div>
												<?php endif; ?>
											</div>
										</div>
										<?php if($slider_images) : ?>
											<div class="col-lg-7 col-md-12">
												<div class="box-slider">
													<div id="gallery-top<?php echo $slider_block; ?>" class="swiper-container gallery-top">
														<div class="swiper-wrapper">
															<?php foreach ($slider_images as $single_slide_img): ?>
																<div class="swiper-slide">
																	<img src="<?php echo $single_slide_img['sizes']['content-img-slider']; ?>" alt="<?php echo $single_slide_img['alt']; ?>" width="100%">
																</div>
															<?php endforeach; ?>
														</div>
														<!-- Add Arrows -->
														<div id="snext1" class="swiper-button-next swiper-button-white"><i class="fas fa-chevron-right"></i>
														</div>
														<div id="sprev1" class="swiper-button-prev swiper-button-white"><i class="fas fa-chevron-left"></i>
														</div>
													</div>
													<div id="gallery-thumbs<?php echo $slider_block; ?>" class="swiper-container gallery-thumbs">
														<div class="swiper-wrapper">
															<?php foreach ($slider_images as $single_slide_img): ?>
																<div class="swiper-slide">
																	<img src="<?php echo $single_slide_img['sizes']['content-img-slider-thumb']; ?>" alt="<?php echo $single_slide_img['alt']; ?>" width="100%">
																</div>
															<?php endforeach; ?>
														</div>
													</div>
												</div>
												<?php if($button) : ?>
													<div class="button-wrapper on text-center pt-5">
														<a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?><i class="fas fa-caret-right ml-6"></i></a>
													</div>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>
						<?php $slider_block++; ?>
					<?php else: ?>
						<div class="text-section our-facility<?php if($content_row%2 == 1){echo ' sec-reverse';} ?>">
							<div class="container">
								<div class="row">
									
									<?php if ( $mosaic_images ) : ?>
									<div class="col-12 d-block d-md-none">
										<div class="slider swiper-container">
											<div class="swiper-wrapper">
												<?php foreach ( $mosaic_images as $image ) : ?>
												<div class="slider-item swiper-slide">
													<img src="<?php echo $image['sizes']['content-img-mosaic']; ?>" alt="<?php echo $image['alt']; ?>" />
												</div>
												<?php endforeach; ?>
											</div>
											
											<div class="swiper-pagination"></div>
											
											<div id="sprev" class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
											<div id="snext" class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
											
										</div>
									</div>
									<?php endif; ?>
									
									<div class="col-12 col-md-6 text-center">
										<?php if ( $pre_heading ) : ?>
											<div class="pre-heading-h2"><?php echo $pre_heading; ?></div>
										<?php endif; ?>
										<?php if ( $heading ) : ?>
											<h2><?php echo $heading; ?></h2>
										<?php endif; ?>
										<?php echo $content; ?>
										<?php if ( $button ) : ?>
											<a class="btn btn-primary" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?>  <i class="fas fa-caret-right"></i></a>
										<?php endif; ?>
									</div>
									<?php if ( $mosaic_images ) : ?>
									<div class="col-12 col-md-6 d-none d-md-block">
										<?php $i=1; foreach ($mosaic_images as $single_img) : ?>
											<div class="<?php if($i == 1) {echo 'img-one';} elseif($i==2) {echo 'img-two';} elseif($i==3) {echo 'img-three';} ?>">
												<img src="<?php echo $single_img['sizes']['content-img-mosaic']; ?>" alt="<?php echo $single_img['alt']; ?>" />
											</div>
										<?php $i++; endforeach; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php $content_row++; endwhile; ?>
			<?php endif; ?>
		
		<?php elseif ( get_row_layout() == 'hover_content_box' ) : ?>

			<?php 
				$section_heading = get_sub_field('section_heading');
				$subheading = get_sub_field('subheading');
				$button_text = get_sub_field('button_text');
				$button_url = get_sub_field('button_url');
				$button_icon = get_sub_field('button_icon');
			?>

			<?php if ( have_rows( 'items' ) ) : ?>
				<div class="what-we-offer">
					<div class="container">
						<?php if($section_heading || $subheading) : ?>
							<div class="row">
								<div class="col-12 col-md-8 m-auto text-center">
									<?php if($section_heading) : ?>
										<h2><?php echo $section_heading; ?></h2>
									<?php endif; ?>
									<?php if($subheading) : ?>
										<p><?php echo $subheading; ?></p>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
						
						<div class="offers">
							<div class="row">
								<?php while ( have_rows( 'items' ) ) : the_row(); ?>
									<?php  
										$title = get_sub_field('title');
										$description = get_sub_field('description');
										$image = get_sub_field('image');
										$link = get_sub_field('link');
										$image_url = $image['sizes']['hover-content-img'];
									?>
									<div class="col-12 col-md-6 col-lg-4">
										<a href="<?php echo $link ? $link : 'void:javascript()'; ?>" <?php if($image) : ?>style="background:url(<?php echo $image_url; ?>);" <?php endif; ?>>
											<?php if($title) : ?>
												<h4><?php echo $title; ?></h4>
											<?php endif; ?>
											<?php if($description) : ?>
												<p><?php echo $description; ?>												
											</p>												
											<?php endif; ?>
										</a>
									</div>
								<?php endwhile; ?>
								<?php if($button_text) : ?>
									<div class="<?php echo $button_icon; ?> col-12 col-md-6 col-lg-4 btn-align-center">
										<div class="full-btn-cnt">
										<a class="btn btn-secondary btn-lg full-btn" href="<?php echo esc_url($button_url); ?>">
											<i class="fas fa-phone-alt" aria-hidden="true"></i>
											<?php echo $button_text; ?>											
										</a>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		
		<?php elseif ( get_row_layout() == 'content_image_grid' ) : ?>
			
			<?php  
				$section_pre_heading = get_sub_field('section_pre_heading');
				$heading = get_sub_field('heading');
				$subheading = get_sub_field('subheading');
				$button = get_sub_field('button');
			?>

			<?php if ( have_rows( 'items' ) ) : ?>
				<div class="why-choose">
					<div class="container">
						<?php if($heading || $subheading) : ?>
							<div class="row">
								<div class="col-12 col-md-8 m-auto text-center text-black pb-5">
									<?php if($section_pre_heading) : ?>
										<div class="pre-heading-h2"><?php echo $section_pre_heading; ?></div>
									<?php endif; ?>
									<?php if($heading) : ?>
										<h2><?php echo $heading; ?></h2>
									<?php endif; ?>
									<?php if($subheading) : ?>
										<p><?php echo $subheading; ?></p>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
						<div class="row text-center text-black">
							<?php while ( have_rows( 'items' ) ) : the_row(); ?>
								<?php  
									$image = get_sub_field('image');
									$title = get_sub_field('title');
									$description = get_sub_field('description');
									$image_url = $image['sizes']['content-img-grid'];
									$image_url_2x = $image['sizes']['content-img-grid-2x'];
								?>
								<div class="col-12 col-md-6 col-lg-4">
									<?php if($image) : ?>
										<img src="<?php echo $image_url; ?>" srcset="<?php echo $image_url_2x; ?> 2x" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
									<?php if($title) : ?>
										<h3><?php echo $title; ?></h3>
									<?php endif; ?>
									<?php if($description) : ?>
										<p><?php echo $description; ?></p>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
							<?php if($button) : ?>
								<div class="col-12">
									<a class="btn btn-primary" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <i class="fas fa-caret-right"></i></a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
					
			
		
		<?php elseif ( get_row_layout() == 'testimonials' ) : ?>

			<?php  
				$section_pre_heading = get_sub_field('section_pre_heading');
				$heading = get_sub_field('heading');
			?>
			
			<?php if ( have_rows( 'items' ) ) : ?>
				<div class="testimonials">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-8 m-auto text-center">
								<?php if($section_pre_heading) : ?>
									<div class="pre-heading-h2"><?php echo $section_pre_heading; ?></div>
								<?php endif; ?>
								<?php if($heading) : ?>
									<h2><?php echo $heading; ?></h2>
								<?php endif; ?>
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								  	<?php $item=1; while ( have_rows( 'items' ) ) : the_row(); ?>
								  		<?php  
								  			$quote = get_sub_field('quote');
								  			$person_name = get_sub_field('person_name');
								  			$short_intro = get_sub_field('short_intro');
								  		?>
										<div class="carousel-item<?php if($item == 1) {echo ' active';} ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-star-review-1.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/5-star-review-1.png 2x" alt="" />
											<?php if($quote) : ?>
												<p>“<?php echo $quote; ?>”</p>
											<?php endif; ?>
											<?php if($person_name || $short_intro) : ?>
												<div class="author"><?php if($person_name) : ?><strong>— <?php echo $person_name; ?></strong><?php endif; ?> <?php echo $short_intro; ?></div>
											<?php endif; ?>
										</div>
									<?php $item++; endwhile; ?>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		
		<?php elseif ( get_row_layout() == 'blog' ) : ?>

			<?php  
				$section_heading = get_sub_field('section_heading');
				$subheading = get_sub_field('subheading');
				$show_posts = get_sub_field('show_posts');
				$select_posts = get_sub_field('select_posts');
				$button = get_sub_field('button');
			?>

			<div class="blog-grid">
				<div class="container">
					<div class="row">
						<?php if($section_heading) : ?>
							<div class="col add-resources">
								<?php if($section_heading) : ?>
									<h2><?php echo $section_heading; ?></h2>
								<?php endif; ?>
								<?php if($subheading) : ?>
									<p><?php echo $subheading; ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="row">
						<?php
							if($show_posts == 'Custom' && $select_posts) {
								$args = array (
										'post_type' => 'post',
										'posts_per_page' => 3,
										'post__in'	=> $select_posts,
										'order' => 'post__in',
								);
							} else{
								$args = array (
										'post_type' => 'post',
										'posts_per_page' => 3,
										'order' => 'DESC',
								);
							}

							$blog_query = new WP_Query($args);
							
							if ( $blog_query->have_posts() ) :
						?>

							<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
								<?php 
									$attachment_id = get_post_thumbnail_id(get_the_ID());
									$thumb = wp_get_attachment_image_src($attachment_id, 'blog-grid-img', true);
									$thumb_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
									$default_thumb = get_template_directory_uri().'/images/blog-grid-dummy-img.png';
								?>
								<div class="col">
									<a href="<?php the_permalink(); ?>">
										<?php if(has_post_thumbnail()) : ?>
											<img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt; ?>" />
										<?php else: ?>
											<img src="<?php echo $default_thumb; ?>" alt="blog-image" />
										<?php endif; ?>
										<h3><?php the_title(); ?></h3>

										<div class="blog-grid__excerpt">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur earum dolor, ex, facere unde esse voluptatem nisi architecto itaque dolorum ut, quos eum soluta enim odio quisquam eligendi in consequatur?</p>
										</div>

										<div class="blog-grid__read-more">Read More</div>

										<div class="date-meta"><?php echo get_the_date('F d, Y'); ?></div>

									</a>
								</div>
							<?php endwhile; ?>

						<?php endif; wp_reset_query(); wp_reset_postdata(); ?>
					</div>
					<div class="row">
						<?php if($button) : ?>
							<div class="d-grid col mx-auto">
								<?php if($button) : ?>
									<a class="btn btn-primary btn-lg" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <i class="fas fa-caret-right"></i></a>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		
		
		<?php elseif ( get_row_layout() == 'center_heading_content' ) : ?>

			<?php  
				$section_pre_heading = get_sub_field('section_pre_heading');
				$heading = get_sub_field('heading');
				$content = get_sub_field('content');
				$layout = get_sub_field('layout');
				$remove_top_padding = get_sub_field('remove_top_padding');
				$remove_bottom_padding = get_sub_field('remove_bottom_padding');
			?>

			<section class="center-heading-content <?php echo $layout; ?>">
				<div class="section-a2 <?php if($remove_top_padding) : echo 'remove-top-padding'; endif; ?> <?php if($remove_bottom_padding) : echo 'remove-bottom-padding'; endif; ?>">
					<div class="container-fluid">
						<div class="row">
							<?php if($heading) : ?>
								<div class="col-12 col-lg-6 col-md-12 align-self-center heading_t1">
									<h2 class="mb-5 mb-lg-0"><?php if($section_pre_heading) : ?>A LITTLE BIT<?php endif; ?>
									<br>
									<span class="font-weight-bold"><?php echo $heading; ?></span></h2>
								</div>
							<?php endif; ?>
							<?php if($content) : ?>
								<div class="col-12 col-lg-6 col-md-12">
									<?php echo $content; ?>
								</div>
							<?php endif; ?>
						</div>     
					</div>    
				</div>
			</section>
		
		<?php elseif ( get_row_layout() == 'cta' ) : ?>

			<?php  
				$heading = get_sub_field('heading');
				$button = get_sub_field('button');
				$add_padding = get_sub_field('add_padding');
			?>

			<section class="inline-cta <?php if($add_padding): ?>cta-padding <?php endif; ?>">
					<div class="container-fluid">
						<div class="cta-flex">
						
							<?php if($heading) : ?>
								<div><?php echo $heading; ?></div>
							<?php endif; ?>
							<?php  ?>
							<a class="btn btn-secondary" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
							
						</div>     
					</div>    
			</section>



		<?php elseif ( get_row_layout() == 'content_columns' ) : ?>

			<?php  
				$heading = get_sub_field('heading');
				$columns = get_sub_field('columns');
				$background = get_sub_field('background');
			?>

			<section class="multi-columns multi-bg-<?php echo $background; ?> <?php echo $columns; ?>-columns">
					<div class="container">
						<?php if($heading) : ?>
							<h2><?php echo $heading; ?></h2>
						<?php endif; ?>
						<div class="multi-col-wrapper">
						<?php if ( have_rows( 'grid_content' ) ) : ?>
							<?php while ( have_rows( 'grid_content' ) ) : the_row(); ?>
								<div><?php echo get_sub_field('content'); ?></div>
							 <?php endwhile; ?>
							<?php endif; ?>
						</div>     
					</div>    
			</section>



		<?php elseif ( get_row_layout() == 'content_blocks_v2' ) : ?>

			<?php  
				$heading = get_sub_field('heading');
				$pre_heading = get_sub_field('pre-heading');
				$sub_heading = get_sub_field('sub_heading');
			?>

			<section class="content-block-v2">
					<div class="container">
						<?php if($pre_heading) : ?>
							<h4><?php echo $pre_heading; ?></h4>
						<?php endif; ?>
						
						<?php if($heading) : ?>
							<h2><?php echo $heading; ?></h2>
						<?php endif; ?>
						
						<?php if($sub_heading) : ?>
							<p class="sub-heading"><?php echo $sub_heading; ?></p>
						<?php endif; ?>
						
						<div class="content-block-wrapper">
						<?php if ( have_rows( 'blocks_content' ) ) : ?>
							<?php while ( have_rows( 'blocks_content' ) ) : the_row(); 
							
							$thumbnail = get_sub_field('thumbnail');
							$title = get_sub_field('title');
							$location = get_sub_field('location');
							$content = get_sub_field('content');
							$url = get_sub_field('url');
							
							?>
								<div>
									<?php if($url) : ?>
										<a href="<?php echo $url['url']; ?>"></a>
									<?php endif; ?>
									<?php if($thumbnail) : ?>
										<img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['title']; ?>" />
									<?php endif; ?>
									<?php if($title) : ?>
										<div class="block-title"><?php echo $title; ?></div>
									<?php endif; ?>
									<?php if($location) : ?>
										<div class="block-loc"><?php echo $location; ?></div>
									<?php endif; ?>
									<?php if($content) : ?>
										<div class="block-content"><?php echo $content; ?></div>
									<?php endif; ?>
								</div>
							 <?php endwhile; ?>
							<?php endif; ?>
						</div>     
					</div>    
			</section>



		
		<?php elseif ( get_row_layout() == 'content_box' ) : ?>

			<?php if ( have_rows( 'items' ) ) : ?>
				<section class="content-box-section">
				    <div class="section-a3">
				        <div class="container-fluid">
				            <div class="box">
				                <div class="group d-flex flex-wrap justify-content-between">
				                	<?php while ( have_rows( 'items' ) ) : the_row(); ?>
				                		<?php  
				                			$heading = get_sub_field('heading');
				                			$content = get_sub_field('content');
				                			$button = get_sub_field('button');
				                		?>
					                    <div class="box-content">
					                    	<?php if($heading) : ?>
					                        	<h3><?php echo $heading; ?></h3>
					                        <?php endif; ?>
					                        <?php if($content) : ?>
						                        <div class="ml-7">
						                            <?php echo $content; ?>
						                        </div>
						                    <?php endif; ?>
						                    <?php if($button) : ?>
						                    	<div class="button">
						                    		<a class="btn button" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <i class="fas fa-caret-right"></i>
						                    		</a>
						                        </div>
						                    <?php endif; ?>
					                    </div>
				                    <?php endwhile; ?>
				                </div>
				            </div>
				        </div>
				    </div>
				</section>
			<?php endif; ?>
		
		<?php elseif ( get_row_layout() == 'accordion' ) : ?>
				
			<?php  
				$section_heading = get_sub_field('section_heading');
				$short_content = get_sub_field('short_content');
				$background_image = get_sub_field('background_image');
				$bg_url = $background_image['sizes']['accordion-sec-bg'];
				$default_thumb = get_template_directory_uri().'/images/10.jpg';
			?>

			<?php if ( have_rows( 'accordion_items' ) ) : ?>
				<section class="accordion-section">
				    <div class="section-a4" style="background-image:url(<?php echo $bg_url ? $bg_url : $default_thumb; ?>);">
				        <div class="container-fluid">
				            <div class="box">
				            	<?php if($section_heading) : ?>
				                	<h4 class="text-center"><?php echo $section_heading; ?></h4>
				                <?php endif; ?>
				                <?php if($short_content) : ?>
					                <?php echo $short_content; ?>
					            <?php endif; ?>
				                <div class="box-accordion">
				                	<?php while ( have_rows( 'accordion_items' ) ) : the_row(); ?>
					                	<div class="accordion-item">
						                    <button class="accordion d-flex justify-content-between align-items-center"><?php the_sub_field( 'heading' ); ?><i class="fas fa-plus"></i></button>
						                    <div class="panel border-bottom">
						                        <div class="text">
						                            <?php the_sub_field( 'content' ); ?>
						                        </div>
						                    </div>
					                	</div>
				                	<?php endwhile; ?>
				                </div>
				            </div>
				        </div>
				    </div>
				</section>
			<?php endif; ?>

		
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>	

<?php /* if(is_front_page()) echo do_shortcode('[ark-chat]'); */ ?>
	
<?php get_footer(); ?>
