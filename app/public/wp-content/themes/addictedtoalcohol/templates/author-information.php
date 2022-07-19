<?php 
	$published_date = get_field('author_information');
?>

<div class="additional-info">
	<div class="row">
		<div class="col-12 col-md-6">
				<p><span style="font-size:smaller">Written by</span><br>Ohio Recovery Center Editorial Team</p>
				<?php include(get_template_directory().'/templates/date-options.php'); ?>
				<p class="small">&copy;<?php echo date('Y');?> Ohio Recovery Center | All Rights Reserved</p>
		</div>
		<div class="col-12 col-md-6 text-right">
			<p><u>This page does not provide medical advice.</u></p>
		</div>
	</div>
</div>
