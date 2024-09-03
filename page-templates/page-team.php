<?php
/*
Template Name: Team
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); 
		$heading = get_sub_field('heading');
		$text = get_sub_field('text');
		$background = get_sub_field('background');
	?>
	<section class="hero-sec-v2 team-hero">
		<div class="section-a1">
			<div class="background" style="background-image:url(<?php echo $background['url']; ?>);">
				<div class="opacity"></div>
				<div class="text m-auto text-center">
					<?php if($heading) : ?>
						<h1 class="text-white"><?php echo $heading; ?></h1>
					<?php endif; ?>
					<?php echo $text; ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>
<?php endif; ?>


	
<?php if( have_rows('team_members_group') ): ?>
    <?php while( have_rows('team_members_group') ): the_row(); 
	?>
	
<section class="team-members">
	<div class="container">
		<ul>
		<?php $a = 0; ?>
	<?php if( have_rows('team_members') ): ?>
		<?php while( have_rows('team_members') ): the_row(); 
			$name = get_sub_field('name');
			$position = get_sub_field('position');
			$photo = get_sub_field('photo');
			$details = get_sub_field('details');
			$a++;
		?>
		
			<li>
				<a data-fancybox data-src="#team-<?php echo $a; ?>" href="javascript:;">
					<?php if($photo) : ?>
						<img src="<?php echo $photo['url'] ?>" alt="" />
					<?php endif; ?>
					<?php if($name) : ?>
						<h5><?php echo $name; ?></h5>
					<?php endif; ?>
					<?php if($position) : ?>
						<p><?php echo $position; ?></p>
					<?php endif; ?>
				</a>
				
				<div class="team-popup" style="display: none;" id="team-<?php echo $a; ?>">
					<?php if($photo) : ?>
						<img src="<?php echo $photo['url'] ?>" alt="" />
					<?php endif; ?>
					<?php if($name) : ?>
						<h5><?php echo $name; ?></h5>
					<?php endif; ?>
					<?php if($position) : ?>
						<span><?php echo $position; ?></span>
					<?php endif; ?>
					<?php if($details) : ?>
						<p><?php echo $details; ?></p>
					<?php endif; ?>
				</div>	
				
				
			</li>

			<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
<?php endwhile; ?>
<?php endif; ?>
	
	
</section>





<?php if( have_rows('main_section') ): ?>
    <?php while( have_rows('main_section') ): the_row(); 

        // Get sub field values.
        $heading = get_sub_field('heading');
        $pre_heading = get_sub_field('pre_heading');
        $content = get_sub_field('content');
        $button = get_sub_field('button');
		
?>		
		
		
		
<section class="main-section">
	<div class="container">
		<?php if($heading): ?><h2><?php if($pre_heading): ?><span><?php echo $pre_heading; ?></span><?php endif; ?><?php echo $heading; ?></h2><?php endif; ?>
		<?php if($content): ?><p><?php echo $content; ?></p><?php endif; ?>		
		<ul>
		
		<?php if( have_rows('list_item') ): ?>
			<?php while( have_rows('list_item') ): the_row(); 
			$title = get_sub_field('title');
			$text = get_sub_field('text');
			$icon = get_sub_field('icon');
		?>
			<li>
				<?php if($icon) : ?>
					<span>
						<img src="<?php echo $icon['url'] ?>" alt="" />
					</span>
				<?php endif; ?>
				<?php if($title) : ?>
					<h5><?php echo $title; ?></h5>
				<?php endif; ?>
				<?php if($text) : ?>
					<p><?php echo $text; ?></p>
				<?php endif; ?>
			</li>
			<?php endwhile; ?>
		<?php endif; ?>
		</ul>
		
		<?php if($button['url']): ?>
			<a class="btn btn-primary" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
		<?php endif; ?>
		
	</div>
</section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>