<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<script async src="//99884.cctm.xyz/t.js"></script>
		<meta charset="<?php bloginfo('charset'); ?>">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		

		<?php wp_head(); ?>
		<?php 
	
    if(is_front_page()){	

        $markup = <<<SCHEMA
        <script type='application/ld+json'> 
		  {
			"@context": "http://www.schema.org",
			"@type": "MedicalClinic",
			"@id": "https://wordpress-580272-2746383.cloudwaysapps.com/",
			"name": "Ohio Recovery Center",
			"url": "https://wordpress-580272-2746383.cloudwaysapps.com/",
			"logo": "https://wordpress-580272-2746383.cloudwaysapps.com/wp-content/uploads/2022/02/2022-02-18_15-16-33.png",
			"image": "https://wordpress-580272-2746383.cloudwaysapps.com/wp-content/uploads/2022/02/2022-02-18_15-16-33.png",
			"description": "Located in Van Wert, Ohio, Ohio Recovery Center provides comprehensive dual diagnosis treatment for individuals struggling with drug and alcohol addiction and mental illness.",
			"telephone": "+1 (419) 904-4158",
			"address": {
			  "@type": "PostalAddress",
			  "streetAddress": "15145 Lincoln Highway",
			  "addressLocality": "Van Wert",
			  "addressRegion": "OH",
			  "postalCode": "45891",
			  "addressCountry": "USA"
			},  
			  "hasMap": "https://www.google.com/maps/place/Ohio+Recovery+Center/@40.4308349,-85.3084071,9z/data=!4m9!1m2!2m1!1sOhio+Recovery+Center!3m5!1s0x883e6bc9f87e9661:0x85627a7e3cdead67!8m2!3d40.8773096!4d-84.5313835!15sChRPaGlvIFJlY292ZXJ5IENlbnRlcpIBGmFkZGljdGlvbl90cmVhdG1lbnRfY2VudGVy",
			"openingHours": "Mo-Su",			
			"parentOrganization" : {
				"name" : "ARK Behavioral Health",
				"url" : "https://arkbh.com/"},
			  "areaServed":[{"@type":"City","name":["Ada","Akron","Alliance","Amherst","Ashland","Ashtabula","Athens","Aurora","Avon","Avon Lake","Barberton","Bay Village","Beachwood","Beavercreek","Bedford","Bedford Heights","Bellbrook","Bellefontaine","Bellevue","Belpre","Berea","Bexley","Blue Ash","Bowling Green","Brecksville","Broadview Heights","Brooklyn","Brook Park","Brookville","Brunswick","Bryan","Bucyrus","Cambridge","Campbell","Canal Fulton","Canal Winchester","Canfield","Canton","Carlisle","Celina","Centerville","Chardon","Cheviot","Chillicothe","Cincinnati","Circleville","Clayton","Cleveland","Cleveland Heights","Clyde","Columbiana","Columbus","Conneaut","Cortland","Coshocton","Crestline","Cuyahoga Falls","Dayton","Deer Park","Defiance","Delaware","Delphos","Dover","Dublin","East Cleveland","East Liverpool","East Palestine","Eastlake","Eaton","Elyria","Englewood","Euclid","Fairborn","Fairfield","Fairlawn","Fairview Park","Findlay","Forest Park","Fostoria","Franklin","Fremont","Gahanna","Galion","Garfield Heights","Geneva","Germantown","Girard","Grandview Heights","Granville","Green","Greenfield","Greenville","Grove City","Groveport","Hamilton","Harrison","Heath","Highland Heights","Hilliard","Hillsboro","Hubbard","Huber Heights","Hudson","Huron","Independence","Ironton","Jackson","Kent","Kenton","Kettering","Kirtland","Lakewood","Lancaster","Lebanon","Lima","Logan","London","Lorain","Louisville","Loveland","Lyndhurst","Macedonia","Madeira","Mansfield","Maple Heights","Marietta","Marion","Martins Ferry","Marysville","Mason","Massillon","Maumee","Mayfield Heights","Medina","Mentor","Mentor-on-the-Lake","Miamisburg","Middleburg Heights","Middletown","Milford","Monroe","Montgomery","Moraine","Mount Healthy","Mount Vernon","Munroe Falls","Napoleon","Nelsonville","New Albany","New Carlisle","New Franklin","New Lexington","New Philadelphia","Newark","Newton Falls","Niles","North Canton","North College Hill","North Olmsted","North Ridgeville","North Royalton","Northwood","Norton","Norwalk","Norwood","Oakwood","Oberlin","Olmsted Falls","Ontario","Oregon","Orrville","Oxford","Painesville","Parma","Parma Heights","Pataskala","Pepper Pike","Perrysburg","Pickerington","Piqua","Port Clinton","Portsmouth","Powell","Ravenna","Reading","Reynoldsburg","Richmond Heights","Rittman","Riverside","Rocky River","Rossford","St. Bernard","St. Clairsville","St. Marys","Salem","Sandusky","Seven Hills","Shaker Heights","Sharonville","Sheffield Lake","Shelby","Sidney","Silverton","Solon","South Euclid","Springboro","Springdale","Springfield","Steubenville","Stow","Streetsboro","Strongsville","Struthers","Sylvania","Tallmadge","Tiffin","Tipp City","Toledo","Toronto","Trenton","Trotwood","Troy","Twinsburg","Uhrichsville","Union","University Heights","Upper Arlington","Upper Sandusky","Urbana","Van Wert","Vandalia","Vermilion","Wadsworth","Wapakoneta","Waterville","Warren","Warrensville Heights","Washington Court House","Wauseon","Waverly","Wellston","West Carrollton","Westerville","Westlake","Whitehall","Wickliffe","Willard","Willoughby","Willoughby Hills","Willowick","Wilmington","Wooster","Worthington","Wyoming","Xenia","Youngstown","Zanesville"]},{"@type":"State","name":["Ohio","Indiana","Michigan","Illinois","Pennsylvania","West Virginia","Kentucky"]   }]}
		</script>
SCHEMA;
        echo $markup;
    }
	
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-225368916-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-225368916-1');
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
					<a href="<?php echo home_url(); ?>">
						<?php
							$logo = get_field('logo', 'option');
						?>
						<?php if($logo): ?>
							<img src="<?php echo $logo['url']; ?>" srcset="<?php echo $logo['url']; ?> 2x" alt="" />
						<?php endif; ?>
						
					</a>
					<div id="joint-commission">
						<!-- <img src="/wp-content/uploads/2020/01/joint-commission-150x150-1.png" style="width:60px"> -->
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
							<a href="<?php echo $button_header['url']; ?>"><i class="fas fa-phone-alt"></i> <?php echo $button_header['title']; ?></a>
						<?php endif; ?>
				</div>
				<div class="col-12 col-md-7 d-none d-md-block">
					<div class="header-cta">
						<?php

							if( have_rows('cta', 'option') ):
								while( have_rows('cta', 'option') ) : the_row();
								
								$title = get_sub_field('title');
								$sub_title = get_sub_field('sub_title');
								$button = get_sub_field('button');
							?>
								<p><strong><?php echo $title; ?></strong>
								<?php echo $sub_title; ?></p>
								<a class="btn btn-secondary" href="<?php echo $button['url']; ?>"><i class="fas fa-phone-alt"></i> <?php echo $button['title']; ?> (419) 904-4158</a>

						<?php endwhile; else : endif; ?>
					</div>
				</div>
			</div>
		</div>		
		<div class="mobile-nav-overlay"></div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-wrap">
				<a href="<?php echo home_url(); ?>" class="logo-wrap">
					<?php
						$logo = get_field('logo', 'option');
					?>
					<?php if($logo): ?>
						<img src="<?php echo $logo['url']; ?>" srcset="<?php echo $logo['url']; ?> 2x" alt="" />
					<?php endif; ?>
				</a>
				<?php wp_nav_menu( array(
					'theme_location'  => 'primary',
					'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav w-100',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) ); ?>
			</div>
			<button class="navbar-close"></button>
		</nav>			
	</header>
	<?php if(!is_front_page()): ?>
	<div class="after-header"></div>
	<?php endif; ?>