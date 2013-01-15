<?php get_header(); ?>
			<div id="leftcontent">

				<div id="mainpost">
						<?php if (have_posts()): while(have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h6>
						<?php the_content('...Read more!'); ?>
						<h5>Written on <?php the_date(); ?> in <?php the_category(', ') ?> by <?php the_author() ?>. <a class="trackback" href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>. <?php edit_post_link('Edit.', '', ''); ?></h5>
		
					</div>
						<?php endwhile; ?>
						<?php endif; ?>
						
					<div class="recentposts">
					<h1>Related Posts</h1>
					<?php similar_posts(); ?>
					</div>
					<div class="comments">
						<?php comments_template(); // Get wp-comments.php template ?>
					</div>

				</div>
			</div>

<?php get_sidebar(); ?>
<?php wp_footer(); ?>
<?php get_footer(); ?>