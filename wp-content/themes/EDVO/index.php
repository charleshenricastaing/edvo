<?php
	/*
		Template Name: Modèle: Accueil
	*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<header class="parallaxImg">
			<div class="parallaxOverlay">
				<div class="infoContainer">
					<h1>EDVO accompagne des personnes souffrant d'addictions pour les aider à reconstruire leur vie</h1>
				</div>
			</div>

			<?php img_parallax() ?>

		</header>
		<section class="container row">

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
