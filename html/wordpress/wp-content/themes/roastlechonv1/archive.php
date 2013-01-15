<?php get_header(); ?>
<div id="maincontent">
	<div class="content">
		<div class="post">
		<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h1>Archive about '<?php echo single_cat_title(); ?>'</h1>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1>Archive for <?php the_time('F, Y'); ?></h1>
		<?php } ?>
		<?php while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></h2>
		<?php the_excerpt(); ?>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="left"><?php next_posts_link('Previous') ?></div>
			<div class="right"><?php previous_posts_link('Next') ?></div>
		</div>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>