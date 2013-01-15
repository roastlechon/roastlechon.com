<?php get_header(); ?>
			<div id="leftcontent">
		<div id="googlead">
		<div id="placer">
			<script type="text/javascript"><!--
			google_ad_client = "pub-7953608797526137";
			/* googleadtoptop */
			google_ad_slot = "3115853841";
			google_ad_width = 728;
			google_ad_height = 90;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
		</div>
				<div id="mainpost">
						<?php if(is_home()): ?>
						<?php query_posts('posts_per_page=5&order=DSC'); ?>
						<?php endif; ?>
						<?php if (have_posts()): while(have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content('...Read more!'); ?>
						<h4>Written on <?php the_date(); ?> in <?php the_category(', ') ?> by <?php the_author() ?>. <?php comments_popup_link('Zero comments.', 'One comment.', '% comments.'); ?></h4>
					</div>
						<? endwhile; ?>
						<?php endif; ?>
				</div>
			</div>
			<div id="sidebar">
				<h3>NAVIGATION</h3>
				<?php include("topnavigation.php"); ?>
				<h3>RECENT POSTS</h3>
				<ul>
				<?php
				global $post;
				$myposts = get_posts('numberposts=5&offset=5');
				foreach($myposts as $post) :
				setup_postdata($post);
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
				</ul>
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
<?php wp_footer(); ?>
<?php get_footer(); ?>