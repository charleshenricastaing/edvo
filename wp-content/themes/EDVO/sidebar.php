<div class="sidebar">

	<?php if (is_active_sidebar('widgets_sidebar')) : 
			dynamic_sidebar('widgets_sidebar'); 
		else : ?>
			
			<div class="widget">
				<h3><?php _e('H5 Starter Theme', 'h4'); ?></h3>
				<p>
					<?php _e('H5 is a theme template designed with HTML 5 that you can use for your site <em>right now</em>. 
					It contains all the template files required to customize your own theme quickly and easily. 
					H5 looks and works great in all modern browsers and is completely valid HTML 5 and CSS.', 'h4'); ?>
				</p>
			</div>
			
			<div class="widget">
				<h3><?php _e('Subscribe', 'h4'); ?></h3>
				<ul class="rss">
					<li><a rel="external" href="<?php bloginfo('rss2_url'); ?>"><?php _e('RSS Feed: Posts', 'h4'); ?></a></li>
					<li><a rel="external" href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('RSS Feed: Comments', 'h4'); ?></a></li>
				</ul>
			</div>
			
			<div class="widget">
				<h3><?php _e('Cateogries', 'h4'); ?></h3>
				<ul><?php wp_list_categories('show_count=1&title_li='); ?></ul>
			</div>
			
			<div class="widget">
				<h3><?php _e('Tags', 'h4'); ?></h3>
				<?php wp_tag_cloud('format=list&number=10&smallest=14&largest=14&unit=px'); ?>
			</div>
			
			<div class="widget">
				<h3><?php _e('Authors', 'h4'); ?></h3>
				<ul><?php wp_list_authors('optioncount=1&show_fullname=1&exclude_admin=0&hide_empty=1'); ?></ul>
			</div>
			
			<div class="widget">
				<h3><?php _e('Pages', 'h4'); ?></h3>
				<ul><?php wp_list_pages(array('title_li' => '')); ?></ul>
			</div>
			
			<div class="widget">
				<h3><?php _e('Search', 'h4'); ?></h3>
				<?php get_search_form(); ?>
			</div>
			
	<?php endif; ?>

</div>