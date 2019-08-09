<?php get_header(); ?>

		<div class="section page404">
			<div class="parallaxContainer">
				<div class="parallaxImg" style="
					background: url('<?php echo get_template_directory_uri(); ?>/lib/img/error404.jpg') fixed; 
					height:80vh; 
					background-repeat: no-repeat; 
					background-origin: content-box; 
					-webkit-background-origin: content-box; 
					-moz-background-origin: content-box; 
					-o-background-origin: content-box; 
					background-position-x: 50%; 
					-webkit-background-position-x: 50%; 
					-moz-background-position-x: 50%; 
					-o-background-position-x: 50%; 
					background-position-y: 50%; 
					-webkit-background-position-y: 50%; 
					-moz-background-position-y: 50%; 
					-o-background-position-y: 50%; 
					background-size:cover; 
					-webkit-background-size: cover; 
					-moz-background-size: cover; 
					-o-background-size: cover; 
					background-color: #fff;">
					<div class="parallaxOverlay">
						<div class="infoContainer">
							<h1><?php _e("PUG LIFE !!! Cette page n'existe pas..."); ?></h1>
							<h3><?php _e("Faites une autre recherche..."); ?></h3>
							<div class="searchForm"><?php get_search_form(); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
