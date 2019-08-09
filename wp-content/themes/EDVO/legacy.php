<?php
	/*
		Template Name: Modèle: Mentions Légales
	*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="container column legacy">

		<?php the_content(); ?>

	</section>

<?php endwhile; else: ?>

	<article class="container column">
		<div class="notFound">
			<h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
			<div class="searchForm"><?php get_search_form(); ?></div>
		</div>
	</article>

<?php endif; ?>

<?php get_footer(); ?>
