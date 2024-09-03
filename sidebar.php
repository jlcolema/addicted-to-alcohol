<!-- sidebar -->

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

	<?php if(get_field('medical_reviewer')) : ?>

	<div class="review-block show-desktop">
		<div class="medical-reviewer">
		<?php $post_object = get_field('medical_reviewer'); if( $post_object ):
					$post = $post_object;
					setup_postdata( $post ); ?>
		<div class="mr-headshot-block">
			<div class="mr-headshot">
			<img width="2490" height="2490" src="https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" itemprop="image" srcset="https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot.jpg 2490w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-300x300.jpg 300w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-1024x1024.jpg 1024w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-150x150.jpg 150w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-768x768.jpg 768w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-1536x1536.jpg 1536w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-2048x2048.jpg 2048w, https://www.addictionresource.net/wp-content/uploads/2020/02/dr-johnelle-smith-headshot-240x240.jpg 240w" sizes="(max-width: 2490px) 100vw, 2490px">
			</div>
		</div>
			<div class="mr-text">Medically Reviewed by<br> <a class="mr-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<?php if( have_rows('date_options') ): ?>
					<?php while( have_rows('date_options') ): the_row(); ?>
					<?php if( get_sub_field('date_choice') == 'None' ): ?>
					<?php endif; ?>
					<?php if( get_sub_field('date_choice') == 'Date Published' ): ?>
						<span>on <span itemprop="datePublished"><?php the_sub_field('date_published'); ?></span></span>
					<?php endif; ?>
					<?php if( get_sub_field('date_choice') == 'Date Modified' ): ?>
						<span>on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></span>
					<?php endif; ?>
					<?php if( get_sub_field('date_choice') == 'Date Published & Modified' ): ?>
						<span>on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></span>
					<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php endif; ?>

	<?php
	$blog_cta = get_field('blog_cta', 'option');
	if($blog_cta) {
		
		$bc_title = $blog_cta['title'];
		$bc_content = $blog_cta['content'];
		$bc_button = $blog_cta['button'];
		$bc_sub_text = $blog_cta['sub_text'];
	}
	?>

	<div class="widget widget__cta">
		<div class="text-widget widget__text-widget">
			<?php if($bc_title) : ?>
				<h3 class="widget__title"><?php echo $bc_title; ?></h3>
			<?php endif; ?>
			<?php if($bc_content) : ?>
				<p class="widget__content"><?php echo $bc_content; ?></p>
			<?php endif; ?>
			<?php if($bc_button) : ?>
				<a href="<?php echo $bc_button['url']; ?>" class="btn btn-secondary btn-outline-light widget__button"><?php echo $bc_button['title']; ?> <i class="fas fa-phone-alt widget__icon"></i></a>
			<?php endif; ?>
			
			<?php if($bc_sub_text) : ?>
				<p class="small"><?php echo $bc_sub_text; ?></p>
			<?php endif; ?>
						
		</div>
	</div>

	<?php /*

	<div class="widget">
		<div class="text-widget">
			<?php echo do_shortcode('[ark-chat type="sidebar"]'); ?>
		</div>
	</div>

	*/ ?>
	
	
	

		<?php if(have_rows('related_links')) : ?>
			<div class="widget">
				<div class="links-widget">
				<?php if(get_field('related_widget_heading', 'options')) : ?>
					<h3><?php echo get_field('related_widget_heading', 'options'); ?></h3>
				<?php endif; ?>
					<ul>
						<?php while(have_rows('related_links')) : the_row(); ?>
							<?php $title = get_sub_field('related_link')['title']; $url = get_sub_field('related_link')['url']; ?>
							<li><a href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>

		<?php endif; ?>

		<?php if(have_rows('people_also_read')) : ?>
			<div class="widget widget__people">
				<div class="links-widget">
				<?php if(get_field('widget_heading', 'options')) : ?>
					<h3 class="widget__title"><?php echo get_field('widget_heading', 'options'); ?></h3>
				<?php endif; ?>
				<ul class="widget__list">
						<?php while(have_rows('people_also_read')) : the_row(); ?>
							<?php $title = get_sub_field('title'); $url = get_sub_field('url'); ?>
							<li class="widget__item"><a href="<?php echo $url; ?>" class="widget__link"><?php echo $title; ?></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>

		<?php endif; ?>
	
	<!-- Verify Insurance Coverage -->

	<div class="widget widget__insurance">
		<div class="text-widget widget__text-widget">
			
			<h3 class="widget__title">Verify Insurance Coverage</h3>

			<p class="widget__content">Need help determining if your insurance will cover Alcohol Treatment? Use our verification form by clicking below.</p>
			
			<a href="/insurance-verification/" class="btn btn-secondary btn-outline-light widget__button">Verify Coverage</a>
									
		</div>
	</div>

<!-- /sidebar -->
