	<footer class="footer">
		<div class="container footer__container">
			<div class="row footer__row">
				<div class="col-12 col-md-4 footer__col">
					<a href="<?php echo home_url(); ?>" class="footer-logo__link">
						<?php
							$logo_footer = get_field('logo_footer', 'option');
							if($logo_footer): ?>
								<img src="<?php echo $logo_footer['url']; ?>" srcset="<?php echo $logo_footer['url']; ?> 2x" alt="" class="footer-logo__image" />
							<?php endif; ?>
					</a>
					<?php
						$about = get_field('about', 'option');
						if($about): ?>
							<p class="footer-about"><?php echo $about; ?></p>
						<?php endif; ?>
				</div>
				<div class="col-12 col-md-8 footer__col">
					<div class="row footer__row">
						<?php custom_column_menu('footermenu'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<div class="copyrights">
		<div class="container copyrights__container">
			<div class="row copyrights__row">
				<div class="col-12 col-md-6 copyrights__col">
					<ul>
						<?php

							if( have_rows('social_icons', 'option') ):
								while( have_rows('social_icons', 'option') ) : the_row();
								
								$facebook = get_sub_field('facebook');
								$twitter = get_sub_field('twitter');
								$linkedin = get_sub_field('linkedin');
							?>
							
							<?php if($facebook): ?>
								<li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
							<?php endif; ?>
							<?php if($twitter): ?>
								<li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li>
							<?php endif; ?>
							<?php if($linkedin): ?>
								<li><a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin"></i></a></li>
							<?php endif; ?>
						<?php endwhile; else : endif; ?>
					</ul>
				</div>
				<div class="col-12 col-md-6 copyrights__col">
					<?php
						$copyrights = get_field('copyrights', 'option');
						$year = date("Y");
						echo sprintf($copyrights,$year);
					?>
				</div>
			</div>
		</div>
	</div>
	
	


<?php wp_footer(); ?>

<script>var $ = jQuery;$(function() {$('.lazy').lazy();});</script>

<div class="foot">
<?php
if( have_rows('cta', 'option') ){
	while( have_rows('cta', 'option') ) {
		
	the_row();
	
	$title = get_sub_field('title');
	$sub_title = get_sub_field('sub_title');
	$button = get_sub_field('button');
	}
}
?>
  <a href="<?php echo $button['url']; ?>">
      <div class="foot-cta-txt">For 24/7 Treatment Help Call</div>
      <div class="foot-number"><?php echo $button['title']; ?></div>
    </a>
</div>
</div>

	<!--Footer CTA-->

	<?php /* <div class="callNowSpacer"></div> */ ?>

	<div class="call-now">
		
		<div id="callNowFooter" class="container  call-now__container">
							
			<div class="row align-items-center justify-content-md-center call-now__row">
				
				<h3 class="col-md-auto call-now__heading">Treatment Questions? Call 24/7.</h3>
				
				<div class="col-md-auto call-now__button">
				
					<a href="tel:+8552160376" class="wp-block-button__link btn-primary btn-lg call-now__link"><i class="fas fa-phone-alt call-now__icon" aria-hidden="true"></i> (855) 216-0376</a>
					
				</div>
				
			</div>
							
		</div>
		
	</div>

</body>

<script defer src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

</html>
