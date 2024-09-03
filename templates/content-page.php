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
