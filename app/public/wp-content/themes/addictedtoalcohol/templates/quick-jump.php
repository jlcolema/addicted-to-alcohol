<?php if(have_rows('quick_jump')) : ?>
	<ul class="page-anchors">
		<?php while(have_rows('quick_jump')) : the_row(); ?>
			<li><a href="#<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('anchor_text'); ?></a></li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>