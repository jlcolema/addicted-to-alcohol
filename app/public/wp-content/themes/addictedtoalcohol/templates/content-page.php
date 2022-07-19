<div <?php post_class('post') ?> id="post-<?php the_ID(); ?>">
		
	<div class="title">
		<h1><?php $title = get_field('custom_title'); if(!empty($title)) : echo $title; else : the_title(); endif; ?></h1>
	</div><!-- /title -->

	<?php include(get_template_directory().'/templates/quick-jump.php'); ?>
	<?php include(get_template_directory().'/templates/page-snippet.php'); ?>	
	
	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
		<?php the_post_thumbnail(); // Fullsize image for the single post ?>
	<?php endif; ?>
	<!-- /post thumbnail -->
			
	<div class="entry">
		<?php the_content(); ?>
	</div><!-- /entry -->
	
</div><!-- /post -->