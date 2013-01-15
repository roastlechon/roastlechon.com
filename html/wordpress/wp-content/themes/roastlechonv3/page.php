<?php get_header(); ?>
			<div id="leftcontent">
				<div id="mainpost">
						<?php if (have_posts()): while(have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
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