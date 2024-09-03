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