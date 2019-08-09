<?php
    /*
        Template Name: Modèle: Newsletter
    */
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<article class="pageContainer" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="column container">

		<!-- Begin MailChimp Signup Form -->

		<div id="mc_embed_signup">
			<form action="https://edvo.us19.list-manage.com/subscribe/post?u=dfec9f312fd0ebaeeefc43775&amp;id=2c181e3364" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form signUpForm" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<label for="mce-EMAIL"><h1>Inscrivez-vous à notre newsletter</h1></label>
					<p>Tenez vous informer pour connaitre nos prochains événements ! (Brocantes aux épiceries sociales, collectes alimentaires...)</p>
					<label><h4>Entre votre adresse email (obligatoire)</h4></label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Entrez votre adresse email" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dfec9f312fd0ebaeeefc43775_2c181e3364" tabindex="-1" value=""></div>
					<div class="clear btnContainer"><input type="submit" value="S'inscrire!" name="subscribe" id="mc-embedded-subscribe" class="button btn blueFlatBtn"></div>
				</div>
			</form>
		</div>

		<!--End mc_embed_signup-->
		
		</header>

		<section class="column">

				<?php the_content(); ?>
				
		</section>

		<footer>
				
			<div id="overlay" style="max-height: 450px">

       			<iframe src="https://www.google.com/maps/d/embed?mid=1lxekJ671YIJ0XbzMux_TFc2iOc6jWI1P&z=18" width="100%" style="scrollwheel: false" height="450" zoom="4" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

		</footer>

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
