<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta name="robots" content="noindex">
		<script async src="//99884.tctm.co/t.js"></script>
		<meta charset="<?php bloginfo('charset'); ?>">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137220640-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137220640-1');
</script>
<script>
function getParam(p) {
  var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
  return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}
function getExpiryRecord(value) {
  var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 day expiry in milliseconds
  var expiryDate = new Date().getTime() + expiryPeriod;
  return {
    value: value,
    expiryDate: expiryDate
  };
}
function addGclid() {
  var gclidParam = getParam('gclid');
  var gclidFormFields = ['gclid_hidden']; // data provided by Dakota Zenner
  var gclidRecord = null;
  var currGclidFormField;
  var gclsrcParam = getParam('gclsrc');
  var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;
  gclidFormFields.forEach(function (field) {
    if (document.getElementById(field)) {
      currGclidFormField = document.getElementById(field);
    }
  });
  if (gclidParam && isGclsrcValid) {
    gclidRecord = getExpiryRecord(gclidParam);
    localStorage.setItem('gclid', JSON.stringify(gclidRecord));
  }
  var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
  var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;
  if (currGclidFormField && isGclidValid) {
    currGclidFormField.value = gclid.value;
  }
}
window.addEventListener('load', addGclid);
 </script>
	</head>
	<?php
	$body_class = '';
	$body_class = get_field('css_selector');
	?>
	
	<body <?php body_class($body_class); ?>>


	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-7 col-md-5">					
						<?php
							$logo = get_field('logo', 'option');
						?>
						<?php if($logo): ?>
							<img src="<?php echo $logo['url']; ?>" srcset="<?php echo $logo['url']; ?> 2x" alt="" />
						<?php endif; ?>						

					<div id="joint-commission">
						<img src="/wp-content/uploads/2020/01/joint-commission-150x150-1.png" style="width:60px">
					</div>
				</div>
				<div class="col-5 mobile-header d-xs-block d-sm-block d-md-none">
					<?php
						$title_header = get_field('title_header', 'option');
						$button_header = get_field('button_header', 'option');
						if($title_header): ?>
							<p><?php echo $title_header; ?></p>
						<?php endif; ?>
						<?php if($button_header): ?>
							<a href="tel:18889797127"><i class="fas fa-phone-alt"></i> (888) 979-7127</a>
						<?php endif; ?>
				</div>
				<div class="col-12 col-md-7 d-none d-md-block">
					<div class="header-cta">							
						<p><strong>Don't Wait. Get Help Now</strong>
							All calls 100% confidential and free</p>
						<a class="btn btn-secondary" href="tel:18889797127"><i class="fas fa-phone-alt"></i> (888) 979-7127</a>
					</div>
				</div>
			</div>
		</div>	
	</header>