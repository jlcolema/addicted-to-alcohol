<?php if(get_field('sources')) : ?>
	<div class="article-source-btn"><a href="#" onclick="toggle('article-sources')"><i class="fa fa-link" aria-hidden="true"></i> View this article's sources</a></div>
	<div id="article-sources" class="additional-info article_sources" style="display:none;">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="article-source">Sources</div>
				<ul>					
					<li><?php the_field('sources'); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
<?php endif; ?>