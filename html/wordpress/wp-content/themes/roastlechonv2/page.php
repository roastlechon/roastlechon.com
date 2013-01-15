<?php get_header(); ?>
	<div id="maincontent">
	<?php if (have_posts()): while(have_posts()) : the_post(); ?>
		<div class="post" id="post<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
	<? endwhile; ?>
	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
