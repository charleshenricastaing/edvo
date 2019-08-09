<?php
	/*
		Template Name: Modèle: Image (Sans Boutons)
	*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<header class="parallaxImg">
			<div class="parallaxOverlay">
				<div class="infoContainer">
					<h1>Vous avez un problème de drogue?</h1>
					<span class="btnContainer">
						<a class="btn whiteOutlineBtn" href="./parcours-de-soins">Parcours de soins</a>
					</span>
				</div>
			</div>

			<?php img_parallax() ?>

		</header>
		<section class="container column">

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
