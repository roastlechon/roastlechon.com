<?php get_header(); ?>

<div id="maincontent">
	<div class="content">
	<div class="post">
	<h1>Search Results</h1>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></h2>
		<?php the_excerpt(); ?>
		<?php endwhile; ?>
	<div class="navigation">
		<?php posts_nav_link(' ', 'previous', 'next'); ?>
	</div>
	<?php else : ?>
	<p>Nothing found searching for your search.</p>
	<div id="emptyspace">
	&nbsp;
	</div>
	<?php endif; ?>
	</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>