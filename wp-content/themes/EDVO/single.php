<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
	<article class="postContainer" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="parallaxImg">
			<div class="parallaxOverlay">
				<div class="infoContainer">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<?php img_parallax() ?>
		</header>
		<section class="container column">
			<div class="postInfoContainer">
				<div class="date">
					<span>Actualités | </span>
					<span><i class="edvo-android-time"></i> <?php the_time('j, F, Y'); ?></span>
				</div>
				<div class="social btnContainer">
					<span><i class="edvo-share-alt"></i>Partager via: </span>
					<a class="shareOn btn fb" title="<?php the_title_attribute(); ?>" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"><i class="edvo-facebook"></i></a>
					<a class="shareOn btn whatsapp" title="<?php the_title_attribute(); ?>" target="_blank" href="whatsapp://send?text=<?php the_permalink();?>" target="_blank"><i class="edvo-social-whatsapp"></i></a>
					<a class="shareOn btn messenger" title="<?php the_title_attribute(); ?>" target="_blank" href="fb-messenger://share/?link=<?php the_permalink();?>"><i class="edvo-messenger"></i></a>
					<a class="shareOn btn mail" title="<?php the_title_attribute(); ?>" href="mailto:?subject=Association Nationale EDVO&body=Cet article devrait vous interesser:<?php the_permalink();?>"><i class="edvo-mail"></i></a>
				</div>
			</div>
			<div class="insidePost column">
				<?php the_content(); ?>
			</div>
		</section>
		<div class="container column">
			<div class="tagContainer">
				<h1>Mots Clés:</h1>
				<div>
					<p><?php the_tags( '', ',', '' ); ?><p>
				</div>
			</div>
			<div class="shareContainer">
				<h1>Partagez nous!</h1>
				<div class="social btnContainer">
					<a class="shareOn btn fb" title="<?php the_title_attribute(); ?>" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"><i class="edvo-facebook"></i>Partager</a>
					<a class="shareOn btn whatsapp" title="<?php the_title_attribute(); ?>" target="_blank" href="whatsapp://send?text=<?php the_permalink();?>"><i class="edvo-social-whatsapp"></i>Partager</a>
					<a class="shareOn btn messenger" title="<?php the_title_attribute(); ?>" target="_blank" href="fb-messenger://share/?link=<?php the_permalink();?>"><i class="edvo-messenger"></i>Partager</a>
					<a class="shareOn btn mail" title="<?php the_title_attribute(); ?>" href="mailto:?subject=Association Nationale EDVO&body=Cet article devrait vous interesser:<?php the_permalink();?>"><i class="edvo-mail"></i>Partager</a>
				</div>
			</div>
		</div>
		
		<footer class="container column">
			<div class="commentContainer">
				<?php comments_template(); ?>
			</div>	
		</footer>
	</article>
	
	<?php endwhile; else: ?>

	<article class="container column">
		<div class="notFound">
			<h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
			<div class="searchForm"><?php get_search_form(); ?></div>
		</div>
	</article>

	<?php endif; ?>

	<!--Start Related Posts-->

	<?php

	// Get the tags for the current post

	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);

	// If the post has tags, run the related post tag query

	if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

		// Build our tag related custom query arguments

		$custom_query_args=array(
			'tag__in' => $tag_ids, // Select posts with related tags
			'posts_per_page' => 4, // Number of related posts to display
			'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
			'orderby' => 'rand', // Randomize the results
		);
	} else {
		
	// If the post does not have tags, run the standard related posts query

		$custom_query_args = array( 
			'posts_per_page' => 4, // Number of related posts to display
			'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
			'orderby' => 'rand', // Randomize the results
		);
	}

	// Initiate the custom query

	$custom_query = new WP_Query( $custom_query_args );

	// Run the loop and output data for the results

	if ( $custom_query->have_posts() ) : ?>

		<div class="containerRelatedPost container">

			<h1>Articles Similaires:</h1>

			<div class="relatedPost">

				<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

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
					<div class="notRelatedPost">
						<p>Désolée, il n'y a aucun article similaire à afficher...</p>
					</div>
				</article>

				<?php endif;

				// Reset postdata
				wp_reset_postdata();

				?>

			<!--End Related Posts-->

			</div>
		</div>

<?php get_footer(); ?>