<form method="get" action="<?php echo home_url('/'); ?>">
	<div class="searchForm">
		<input class="field" type="text" id="s" placeholder="Rechercher un article" name="s" value="<?php the_search_query(); ?>">
		<input class="btn" type="submit" value="Rechercher">
	</div>
</form>
