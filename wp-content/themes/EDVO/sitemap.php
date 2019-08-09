<?php
	/*
		Template Name: Modèle: Plan du Site
	*/
?>

<?php get_header(); ?>


<div class="container row sitemap">
	<section class="half column">
		<h1><?php _e('Pages', 'EDVO'); ?></h1>
		<ul><?php wp_list_pages("title_li=" ); ?></ul>
	</section>
	<section class="half column">
		<h1><?php _e('RSS Feeds', 'EDVO'); ?></h1>
		<ul>
			<li>
				<a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>"><?php _e('Main RSS' , 'EDVO'); ?></a>
			</li>
			<li>
				<a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comment Feed', 'EDVO'); ?></a>
			</li>
		</ul>
		<h1><?php _e('Categories', 'EDVO'); ?></h1>
		<ul class="category"><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
		<h1><?php _e('All Blog Posts', 'EDVO'); ?></h1>
		<ul>
			<?php $archive_query = new WP_Query('showposts=1000'); while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				(<?php comments_number('0', '1', '%'); ?>)
			</li>
			<?php endwhile; ?>
		</ul>
	</section>
</div>


<?php get_footer(); ?>
