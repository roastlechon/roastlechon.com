<?php get_header(); ?>
	<div id="content">
<?php get_sidebar(); ?>
	    <div id="maincontent"><div>
        		<h1 class="page-title">Weblog</h1>
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<h3>Published on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> <?php edit_post_link('Edit'); ?></h3>
					<?php the_content('Read more &raquo;'); ?>
					<?php comments_template(); ?>
				</div>
				<?php endwhile; else: ?>
				<?php endif; ?>		
		</div></div>
<?php get_footer(); ?>