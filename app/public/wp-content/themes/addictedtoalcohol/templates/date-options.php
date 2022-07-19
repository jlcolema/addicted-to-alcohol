<?php  
	$date_options = get_field('date_options');
	$date_choice = $date_options['date_choice'];
	$date_published = $date_options['date_published'];
	$date_edited = $date_options['date_edited'];
?>
<?php if($date_choice == 'Date Published') : ?>
	<div class="meta-date"><span>Published on: </span><?php echo $date_published; ?></div>
<?php elseif($date_choice == 'Date Modified') : ?>
	<div class="meta-date"><span>Edited on: </span><?php echo $date_edited; ?></div>
<?php elseif($date_choice == 'Date Published & Modified') : ?>
	<div class="meta-date"><span>Published on: </span><?php echo $date_published; ?> | <span>Edited on: </span><?php echo $date_edited; ?></div>
<?php endif; ?>