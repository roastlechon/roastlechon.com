<?php get_header(); ?>
			<div id="leftcontent">
				<div id="mainpost">
						<div class="post">
					<?php /* If this is a category archive */ if (is_category()) { ?>				
					<h1>Posts for '<?php echo single_cat_title(); ?>'</h1>
					<?php /* If this is a category archive */ } elseif (is_tag()) { ?>				
					<h1>Tags for '<?php single_tag_title(); ?>'</h1>
					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1>Posts during <?php the_time('F jS, Y'); ?></h1>
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1>Posts during <?php the_time('F, Y'); ?></h1>
					<?php } ?>
					<?php while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></h2>
					<?php the_excerpt(); ?>
					<?php endwhile; ?>
						</div>
				</div>
			</div>
<?php get_sidebar(); ?>
<?php wp_footer(); ?>
<?php get_footer(); ?>