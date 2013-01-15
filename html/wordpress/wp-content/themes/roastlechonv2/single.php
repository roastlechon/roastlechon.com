<?php get_header(); ?>
	<div id="maincontent">
		<div class="wrapper">
				<?php if (have_posts()): while(have_posts()) : the_post(); ?>
				
			<div id="content">
				<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content('Read more substance!'); ?>
				</div>
			</div>
			<div id="infobar">
				<b>Category: </b><?php the_category(', ') ?><br />
				<b>Author: </b><?php the_author() ?><br />
				<b>Date Posted: </b><?php the_date(); ?><br />
				<a class="trackback" href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a><br />			
				<?php the_tags('<b>Tags: </b>',', '); ?><br />
				<b>Similar Posts:</b> <?php similar_posts(); ?><br />
				<?php comments_rss_link(__('RSS')); ?><?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
				<?php if(comments_open()) : ?><?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
				<?php else : ?>Comments off
				<?php endif; ?><br />
				<?php edit_post_link('Edit', '', ''); ?><br />
				
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


