<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118273044-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-118273044-1');
		</script>

		<!-- Website Info -->

		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="application-name" content="<?php bloginfo('name'); ?>">
		<meta name="theme-color" content="#00823B" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Stylesheet URL -->

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">

		<!-- Let's Cookies! -->

		<script src="<?php echo( get_bloginfo('template_directory').'/lib/js/cookieconsent.js' ); ?>"></script>
		<script>
			window.addEventListener("load", function(){
				window.cookieconsent.initialise({
				"palette": {
					"popup": {
					"background": "#009649",
					"text0": "#fff"
					},
					"button": {
					"background": "#324147",
					"text": "#fff"
					}
				},
				"position": "top",
				"static": true,
				"content": {
					"message": "Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.",
					"dismiss": "OK !",
					"link": "En savoir plus",
					"href": "https://edvo.fr/mentions-legales/"
				}
			})});
		</script>

		<?php wp_head(); ?>
		   
	</head>
	<body <?php body_class(); ?>>
		<nav class="subheader">
			<div class="container">
				<div><strong>Addiction - prévention</strong></div>
				<div class="logo">
					<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?>
						<img src="<?php echo( get_bloginfo('template_directory').'/lib/img/logo-edvo.svg' ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
					</a>
				</div>
				<div><strong>accompagnement - précarité</strong></div>
				<!-- <div class="menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'subheaderNav',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'subheader-nav',
							'fallback_cb' => 'wp_page_menu',
							//Process nav menu using our custom nav walker
							'walker' => new wp_bootstrap_navwalker())
						);
					?>
				</div> -->
			</div>
		</nav>
		<div class="header">
			<nav class="navbar" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="toggle">
					<span>MENU</span>
					<button type="button" class="toggle-icon">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</button>
				</div>
				<div class="mobileView">
					<button type="button"><i class="edvo-decrease-font"></i></button>
					<button type="button"><i class="edvo-increase-font"></i></button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbarCollapse">
					<!-- <div class="logo">
						<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?>
							<img src="<?php echo( get_bloginfo('template_directory').'/lib/img/logo-edvo.svg' ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
						</a>
					</div> -->
					<div class="menu-test">Menu
						<div class="menu" id="menuOnClick">
							<?php
								wp_nav_menu( array(
								'theme_location' => 'headerNav',
								'depth' => 2,
								'container' => false,

								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'wp_page_menu',
								//Process nav menu using our custom nav walker
								'walker' => new wp_bootstrap_navwalker())
								);
							?>
						</div>
					</div>
<!-- 					
					<div class="btnContainer">
						<a class="btn greenFlatBtn" href="./faire-un-don">Faire un don</a>
					</div> -->
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
