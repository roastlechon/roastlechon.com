			<div id="sidebar">
				<h3>NAVIGATION</h3>
				<?php include("topnavigation.php"); ?>
				<h3>POST TAGS</h3>
				<?php if (have_posts()) : ?>
    	        <?php while (have_posts()) : the_post(); ?>    
				<?php the_tags('<ul><li>','</li><li>','</li></ul>');?>
				<?php endwhile; ?>
				<?php endif; ?>
				<h3>RELATED POSTS</h3>
				<?php similar_posts(); ?>
				<h3>CATEGORIES</h3>
				<ul>
				<?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
				</ul>
				<h3>SUBSCRIBE</h3>
				<ul>
					<li><a href="javascript:window.external.AddFavorite('http://roastlechon.com','Roastlechon');">Bookmark Roastlechon!</a></li>
					<li><a href="http://del.icio.us/post" onclick="window.open('http://del.icio.us/post?v=4&amp;noui&amp;jump=close&amp;url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=700,height=400'); return false;">Add to Del.icio.us</a></li>
					<li><a href="<?php bloginfo_rss('rss2_url') ?>">Subscribe with Feedburner</a></li>
				</ul>
			</div>