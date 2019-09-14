	<!-- <div class="modal">
		<div class="modalClose">
			<span>FERMER</span>
			<button type="button" class="toggle-icon">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</button>
		</div>
		<form method="get" action="<?php echo home_url('/'); ?>">
			<div class="searchForm">
				<input class="field" type="text" id="s" placeholder="Rechercher..." name="s" value="<?php the_search_query(); ?>">
				<input class="submit" type="submit" value="OK">
			</div>
		</form>
	</div> -->
	
	<div class="footer">
		<div class="container-footer">
			<div class="legal">
				<div class="logo">
					<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?>
						<img src="<?php echo( get_bloginfo('template_directory').'/lib/img/logo-edvo-w.svg' ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
					</a>
				</div>
				<div class="contact">
					<p><a href="https://www.google.fr/maps/place/Association+Nationale+EDVO/@48.9734902,2.3467222,17z/data=!3m1!4b1!4m5!3m4!1s0x47e6690bdc2b02b1:0xaec06c19d2dd7f2d!8m2!3d48.9734902!4d2.3489109" target="_blank">4 Rue Gallieni, 95360 Montmagny</a></p>
					<p><a href="tel:0134286450">01 34 28 64 50</a></p>
					<p><a href="./plan-du-site">Plan du site</a></p>
					<p><a href="./mentions-legales">Mentions légales</a></p>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/edvo.addictions" target="_blank"><i class="edvo-facebook"></i></a>
					<!-- <a href="https://www.instagram.com/edvo.addictions" target="_blank"><i class="edvo-instagram"></i></a> Waiting for Account Creation -->
					<a href="https://www.youtube.com/channel/UCe8JqRJqnPpKXzt881B52ZQ/videos?view_as=subscriber" target="_blank"><i class="edvo-youtube"></i></a>
					<a href="mailto:secretariat@edvo.com?subject=Demande d'informations"><i class="edvo-mail"></i></a>
				</div>
			</div>
			<nav class="menu">
				<?php
					wp_nav_menu( array(
					'theme_location' => 'footerNav',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'nav-footer navbar-nav-footer',
					'fallback_cb' => 'wp_page_menu',
					//Process nav menu using our custom nav walker
					'walker' => new wp_bootstrap_navwalker())
					);
				?>
			</nav>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous">
	
		/* Call jQuery Library */

	</script>

	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/animation.js">
	 
		/* Call JavaScript animation.js */
	 
	</script>

	<script>(function(d, s, id) {

		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

	</script>


<?php wp_footer(); ?>
</body>
</html>
