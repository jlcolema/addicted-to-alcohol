<?php if(get_field('sources')) : ?>

	<div class="article-source-btn sources__button">
		<a href="#" onclick="toggle('article-sources')" class="sources__label">Article Sources</a>
	</div>
	
	<div id="article-sources" class="article_sources sources__container" style="display:none;">
		<div class="row sources__row">
			<div class="col-12 col-md-12 sources__col">
				<ol class="sources__list">
					<?php the_field('sources'); ?>
				</ol>
			</div>
		</div>
	</div>
	
<?php endif; ?>
