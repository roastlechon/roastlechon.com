<?php get_header(); ?>
	<div id="maincontent">
		<div class="wrapper">
			<div id="content">
				<div class="post">
			<?php /* If this is a category archive */ if (is_category()) { ?>				
			<h1>Past stuff for'<?php echo single_cat_title(); ?>'</h1>
			<?php /* If this is a category archive */ } elseif (is_tag()) { ?>				
			<h1>Tags for '<?php single_tag_title(); ?>'</h1>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1>Substance during <?php the_time('F jS, Y'); ?></h1>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>Substance during <?php the_time('F, Y'); ?></h1>
			<?php } ?>
			<?php while (have_posts()) : the_post(); ?>
			<h4><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></h4>
			<?php the_excerpt(); ?>
			<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="middle">
		<div class="wrapper">
			<div id="middlecontent">
				<div class="columns">
					<h4>Recent Posts</h4>
							<ul>
							<?php
							global $post;
							$myposts = get_posts('numberposts=5&offset=1');
							foreach($myposts as $post) :
							setup_postdata($post);
							?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endforeach; ?>
							</ul>
				</div>
				<div class="columns">
					<h4>Categories</h4>
						<ul>
						<?php wp_list_categories('orderby=name&show_count=0&title_li='); ?>
						</ul>
				</div>
				<div class="columns">
					<h4>Archives</h4>
						<ul>
						<?php wp_get_archives('type=monthly'); ?>
						</ul>
				</div>
				<div class="columns">
					<h4>Popular Tags</h4>
						<?php wp_tag_cloud(''); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
