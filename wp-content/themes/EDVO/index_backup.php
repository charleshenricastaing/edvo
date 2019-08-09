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
					<h1>Vous avez un problème de drogue?</h1>
					<span class="btnContainer">
						<a class="btn whiteOutlineBtn" href="./parcours-de-soins">Parcours de soins</a>
					</span>
					<div class="isShownDrugNumber">
						<h3>Depuis que vous êtes connecté, il y a <span class="valeur connection counter" id="Connecte1974"></span> personnes qui prennent de la drogue dans le monde</h3>
					</div>
					<div class="isHiddenDrugNumber">
						<script type="text/javascript" src="https://www.planetoscope.com/widget.php?id=1974&f=3"></script>
					</div>
				</div>
				<div class="contributionContainer">
					<ul>
						<li>
							<a class="btn blueFlatBtn" href="./faire-un-don">Faire <span>un don</span></a>
						</li>
						<li>
							<a class="btn blueFlatBtn" href="./faire-un-leg">Faire <span>un leg</span></a>
						</li>
						<li>
							<a class="btn greenFlatBtn" href="./devenir-adherent">Devenir <span>adhérent</span></a>
						</li>
						<li>
							<a class="btn greenFlatBtn" href="./devenir-benevole">Devenir <span>bénévole</span></a>
						</li>
					</ul>
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
