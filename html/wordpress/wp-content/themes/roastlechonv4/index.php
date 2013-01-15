<?php get_header(); ?>
	<div id="content">
<?php get_sidebar(); ?>
	    <div id="maincontent"><div>
        	<h1 class="page-title">Blog entries</h1>
			<?php
			$lastposts = get_posts('numberposts=3');
			foreach($lastposts as $post) :
			setup_postdata($post);
			?>
            <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="post" id="post-<?php the_ID(); ?>">
                	Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?><br />
					<?php the_content('Read more &raquo;'); ?>
				</div>
				<div>
					<div class="alignleft"><?php the_category(', '); ?></div>
					<div class="alignright"><?php comments_popup_link('Comments (0)','Comments (1)','Comments (%)'); ?></div>
				</div>
                <br />

			<?php endforeach; ?>
		</div></div>
<?php get_footer(); ?>