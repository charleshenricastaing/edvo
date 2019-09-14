<?php get_header(); ?>

	<div class="section archiveTemplate">

		<div class="parallaxContainer">
			<div class="parallaxImg" style="
				background: url('/edvo/wp-content/uploads/2019/09/EDVO-actualites.jpg') fixed; 
				height:75vh; 
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
						<h1>Nos dernières actualités!</h1>
					</div>
				</div>
			</div>
		</div>

		<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>

		<div class="archiveHeader">
			<?php if (is_category()) : ?>
			<h1 class="postCategory container row"><?php _e('Resultat des archives pour la catégorie', 'h5'); ?> <?php single_cat_title(); ?></h1>
		</div>

		<div class="archiveHeader">
			<?php elseif(is_tag()) : ?>
			<h1 class="postTag container row"><?php _e("Resultat des archives pour l'étiquette", 'h5'); ?> <?php single_tag_title(); ?></h1>
		</div>

		<div class="archiveHeader">
			<?php elseif (is_day()) : ?>
			<h1 class="postDay container row"><?php _e('Resultat des archives pour le', 'h5'); ?> <?php the_time('F jS, Y'); ?></h1>
		</div>

		<div class="archiveHeader">
			<?php elseif (is_month()) : ?>
			<h1 class="postMonth container row"><?php _e('Resultat des archives pour le mois de', 'h5'); ?> <?php the_time('F, Y'); ?></h1>
		</div>


		<div class="archiveHeader">
			<?php elseif (is_year()) : ?>
			<h1 class="postYear container row"><?php _e("Resultat des archives pour l'année", 'h5'); ?> <?php the_time('Y'); ?></h1>
		</div>


		<div class="archiveHeader">
			<?php elseif (is_author()) : ?>
			<h1 class="postAuthor container row"><?php _e("Resultat des archives pour l'auteur", 'h5'); ?></h1>
		</div>


		<div class="archiveHeader">
			<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
			<h1 class="postTag container"><?php _e('Blog Archives', 'h5'); ?></h1>
		</div>

		<?php endif; ?>

		<div class="container archiveContainer">
		
			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<div class="postImg">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if (has_post_thumbnail()) the_post_thumbnail(); ?></a>
						</div>
					</header>
					<section>
						<h1>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h1>
						<span><?php the_excerpt(); ?></span>
					</section>
					<footer>
						<div class="share">
							<div class="social">
								<a class="tooltip" data-tooltip="Partager sur Facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="<?php the_title_attribute(); ?>"><i class="edvo-facebook"></i></a>
								<a class="tooltip" data-tooltip="Partager par email" href="mailto:?subject=Association Nationale EDVO&body=Cet article devrait vous interesser:<?php the_permalink();?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><i class="edvo-mail"></i></a>
							</div>
							<a class="goTo tooltip" data-tooltip="Lire l'article" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><i class="edvo-in-alt"></i></a>
						</div>
					</footer>
				</article>
		
			<?php endwhile; ?>

			<?php else : ?>

				<article class="container column">
					<div class="notFound">
						<h1><?php _e('Vous ne trouvez pas ce que vous voulez? Faites une recherche:', 'h1'); ?></h1>
						<div class="searchForm"><?php get_search_form(); ?></div>
					</div>
				</article>

			<?php endif; ?>

		</div>

		<div class="column container">
			<nav class="navLink">
				<p class="prev"><?php previous_posts_link(); ?></p>
				<p class="next"><?php next_posts_link(); ?></p>
			</nav>
		</div>

		<div class="column container">
			<div class="otherSearch">
				<h1><?php _e('Vous ne trouvez pas ce que vous voulez? Faites une recherche:', 'h1'); ?></h1>
				<div class="formContainer"><?php get_search_form(); ?></div>
			</div>
		</div>
			
	</div>


<?php get_footer(); ?>
