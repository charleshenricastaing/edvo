<?php
	/*
		Template Name: Modèle: En Bref
	*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<section>

			<?php the_content(); ?>
			
		</section>
	</article>

	<?php endwhile; ?>

	<?php else : ?>

	<article class="container column">
		<div class="notFound">
			<h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
			<div class="searchForm"><?php get_search_form(); ?></div>
		</div>
	</article>

	<?php endif; ?>

<?php get_footer(); ?>
