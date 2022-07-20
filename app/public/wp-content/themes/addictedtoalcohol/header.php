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

	<header class="header">

		<div class="container header__container">
		
			<div class="row align-items-center header__row">
				
				<!-- Logo -->

				<div class="col header__col">

					<div class="logo">

						<a href="<?php echo home_url(); ?>" class="logo__link">
					
							<?php
								$logo = get_field('logo', 'option');
							?>
						
							<?php if($logo): ?>
								<img src="<?php echo $logo['url']; ?>" srcset="<?php echo $logo['url']; ?> 2x" alt="" class="logo__img" />
							<?php endif; ?>
					
						</a>
	
					</div>

				</div>

				<!-- Primary Menu -->

				<div class="col header__col">

					<nav class="navbar navbar-expand-lg primary-nav">
					
						<div class="container-fluid primary-nav__container">

							<button class="navbar-toggler primary-nav__toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    							<span class="navbar-toggler-icon primary-nav__icon"></span>
    						</button>

							<?php
					
								wp_nav_menu(
									array(
										// 'menu'			 => '',
										// 'menu_class'		 => 'navbar-nav w-100',
										// 'container'		 => '<div>',
										'container_class'	 => 'collapse navbar-collapse primary-nav__div',
										'container_id'	 	 => 'navbarNavDropdown',
										'fallback_cb'	 	 => 'WP_Bootstrap_Navwalker::fallback',
										// 'before'			 => '',
										// 'after'			 => '',
										// 'link_before'	 => '',
										// 'link_after'		 => '',
										// 'echo'			 => '',
										'depth'				 => '2',
										'walker'			 => new WP_Bootstrap_Navwalker(),
										'theme_location'	 => 'primary',
										'items_wrap'		 => '<ul class="navbar-nav primary-nav__list %2$s">%3$s</ul>',
										// 'item_spacing'	 => 'preserve',
									)
								);
								
							?>

						</div>
			
					</nav>	
				
				</div>

				<!-- CTA -->

				<div class="col header__col">

					<div class="text-end header-cta primary-cta">
	
						<?php

							if( have_rows('cta', 'option') ):
						
								while( have_rows('cta', 'option') ) : the_row();
								
								$title = get_sub_field('title');
								// $sub_title = get_sub_field('sub_title');
								$button = get_sub_field('button');
							?>

							<p class="primary-cta__title">
								<?php echo $title; ?>
								<?php /* echo $sub_title; */ ?>
							</p>
							
							<div class="primary-cta__phone">

								<a class="primary-cta__link" href="<?php echo $button['url']; ?>">
									<?php echo $button['title']; ?> (419) 904-4158
								</a>

						<?php endwhile; else : endif; ?>

					</div>

				</div>

			</div>

		</div>		
		
	</header>
	<?php if(!is_front_page()): ?>
	<div class="after-header"></div>
	<?php endif; ?>
