<?php
/*
Template Name: Contact
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php  
	$header_banner = get_field('header_banner');
	$button = get_field('button');
	$address = get_field('address');
	$phone_number = get_field('phone_number');
	$email_address = get_field('email_address');
	$heading = get_field('heading');
	$content = get_field('content');
	$form = get_field('form');
	$google_map = get_field('google_map');

	$header_banner_url = $header_banner['sizes']['hero-bg'];
?>

<section class="section-b1">
	<div class="background"<?php if($header_banner) : ?> style="background-image: url(<?php echo $header_banner_url; ?>);"<?php endif; ?>>            
		<div class="background-opacity"></div>            
	</div>        
	<div class="container-fluid">
		<div class="ii">
			<div class="box">
				<div class="box-content">
					<div class="title text-center">
						<?php if($heading) : ?>
						<h1><?php echo $heading; ?></h1>
						<?php endif; ?>
					</div>
					<div class="text">
						<?php echo $content; ?>
					</div>
					<?php if($button) : ?>
						<div class="button-wrapper text-center">
							<a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <i class="fas fa-phone ml-10"></i></a>
						</div>
					<?php endif; ?>
					
					<?php if ($form) : ?>
						<div class="contact-box-form">
							<?php echo $form; ?>
						</div>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
		<div class="items">
			<div class="box-items d-flex">
				<?php if($address) : ?>
					<div class="element-items text-center">
						<i class="fas fa-map-marker-alt"></i>
						<p><?php echo $address; ?></p>
					</div>
				<?php endif; ?>
				<?php if($phone_number) : ?>
					<div class="element-items text-center">
						<i class="fas fa-phone"></i>
						<p><?php echo $phone_number; ?></p>
					</div>
				<?php endif; ?>
				<?php if($email_address) : ?>
					<div class="element-items text-center">
						<i class="fas fa-envelope"></i>
						<p>General Inquires: <br> <?php echo $email_address; ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php if($google_map) : ?>
	<section class="section-b2">
		<?php echo $google_map; ?>
	</section>
<?php endif; ?>

<?php get_footer(); ?>