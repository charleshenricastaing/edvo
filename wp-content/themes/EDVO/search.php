<?php get_header(); ?>

		<div class="searchForContainer">

			<?php if (have_posts()) : ?>
			<h1 class="container row"><?php _e('Resultat de la recherche pour', 'h5'); ?> <?php the_search_query(); ?></h1>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<ul class="searchContainer container">
					<?php while (have_posts()) : the_post(); ?>
						<li>
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
										<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"><i class="edvo-facebook"></i></a>
										<a href="mailto:?subject=<?php echo get_the_title(); ?>&body=Salut, j'ai trouvé cet article sur le site: <?php echo get_site_url(); ?>, je me suis dis que cela pouvait t'interesser, voici le lien: <?php the_permalink();?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><i class="edvo-mail"></i></a>
									</div>							
									<a class="goTo" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><i class="edvo-in-alt"></i></a>
								</div>
							</footer>
						</li>
					<?php endwhile; ?>
				</ul>

				<div class="column container">
					<nav class="navLink">
						<p class="prev"><?php previous_posts_link(); ?></p>
						<p class="next"><?php next_posts_link(); ?></p>
					</nav>
				</div>
				
				<div class="column container">
					<div class="otherSearch">
						<h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
						<div class="formContainer"><?php get_search_form(); ?></div>
					</div>
				</div>
			</article>


			<?php else : ?>

			<article class="container column">
				<div class="notFound">
					<h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
					<div class="searchForm"><?php get_search_form(); ?></div>
				</div>
			</article>

			<?php endif; ?>

		</div>

<?php get_footer(); ?>
