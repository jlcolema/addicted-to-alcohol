	<footer>
		<div class="container">			
			<div class="row">
				<div class="col-12 col-md-4">
					<a href="<?php echo home_url(); ?>">
						<?php
							$logo_footer = get_field('logo_footer', 'option');
							if($logo_footer): ?>
								<img src="<?php echo $logo_footer['url']; ?>" srcset="<?php echo $logo_footer['url']; ?> 2x" alt="" />
							<?php endif; ?>
					</a>
					<?php
						$about = get_field('about', 'option');
						if($about): ?>
							<p><?php echo $about; ?></p>
						<?php endif; ?>
				</div>
				<div class="col-12 col-md-8">
					<div class="row">
						<?php custom_column_menu('footermenu'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<div class="copyrights">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
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
				<div class="col-12 col-md-6">
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
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Source+Sans+Pro:300,400,400i,600,700' ] }
  };

  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
</script>
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
<div class="callNowSpacer"></div>
<div id="callNowFooter" class="container-fluid">
	<div class="inner-container">
		<div class="row">
			<h3>Treatment Questions? Call 24/7.<a href="tel:+1234567890" class="wp-block-button__link"><i class="fas fa-phone-alt" aria-hidden="true"></i> (123) 456-7890</a></h3>
		</div>
	</div>       
</div>
	</body>
<script defer src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
</html>
