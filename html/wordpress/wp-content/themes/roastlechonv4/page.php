<?php get_header(); ?>
	<div id="content">
<?php get_sidebar(); ?>
	    <div id="maincontent"><div>
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('Read more &raquo;'); ?>
				</div>
				<?php endwhile; else: ?>
				<?php endif; ?>		
		</div></div>
<?php get_footer(); ?>