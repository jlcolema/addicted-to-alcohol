<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('post') ?>">
		
		<div class="page-content">
		
			<!-- Section -->
				
			<div class="page-content__section">
				
				<div class="section-wave section-wave--upper">
					
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="section-wave__svg section-wave__svg--upper">
						<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
						<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
						<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
					</svg>
					
				</div>
				
				<div class="container page-content__container">
					
					<div class="row page-content__row">
						
						<div class="col page-content__col">
							
							<!-- Breadcrumbs -->
							
							<div id="breadcrumbs" class="page-content__breadcrumbs">
								
								<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb();}?>
								
							</div>
							
							<!-- Title -->
							
							<div class="title page-content__title">
								
								<h1 class="page-content__heading"><?php $title = get_field('custom_title'); if(!empty($title)) : echo $title; else : the_title(); endif; ?></h1>
								
							</div>
							
							<!-- Author -->
							
							<div class="page-content__meta">Author and Date</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="section-wave section-wave--lower">
					
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="section-wave__svg section-wave__svg--lower">
						<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
						<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
						<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
					</svg>
					
				</div>
				
			</div>
			
			<!-- Content -->
				
			<div class="page-content__main">
		
				<div class="container page-content__container">
		
					<div class="row page-content__row">
						
						<!-- Main -->
							
						<div class="col-12 col-md-12 col-lg-8 page-content__col">
	
							<div class="post-content">
									<?php get_template_part( 'templates/content', 'page' ); ?>
									<?php include(get_template_directory().'/templates/author-information.php'); ?>
									<?php include(get_template_directory().'/templates/article-resources.php'); ?>
							</div>
						</div>
						
						<!-- Sidebar -->
							
						<div class="col-12 col-md-12 col-lg-4 page-content__col" id="sidebar">
							<?php get_sidebar(); ?>
						</div>
			
					</div>
		
				</div>
			
			</div>
			
		</div>
		
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
