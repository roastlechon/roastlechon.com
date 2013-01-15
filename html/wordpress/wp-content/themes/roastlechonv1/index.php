<?php get_header(); ?>
<div id="maincontent">
	<div class="content">
	<?php if(is_home()): ?>
	<?php query_posts('posts_per_page=1&order=DSC'); ?>
	<?php endif; ?>
	<?php if (have_posts()): while(have_posts()) : the_post(); ?>
		<div class="post" id="post<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<h3>Posted by: <?php the_author() ?> on <?php the_date(); ?> 
				<?php if(comments_open()) : ?>
				<?php comments_popup_link('No comments yet',' 1 comment','% comments', '', 'Comments off'); ?>
				<?php else : ?>Comments off
				<?php endif; ?>
				<?php edit_post_link('Edit', '/ ', ''); ?>
				</h3>
			<?php the_content('Read more...'); ?>		
			<?php comments_template(); // Get wp-comments.php template ?>
			<?php wp_link_pages(); ?>
		</div>
	</div>
	
	<div id="pastcontent">
		<div class="contentpast">
			<h1>Recent Posts</h1>
			<?php
			$posts = get_posts('numberposts=2&offset=1&order=DESC&orderby=post_date');
			foreach ($posts as $post) : start_wp; ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h3>Posted by: <?php the_author() ?> on <?php the_time('F j, Y'); ?></h3>
			<?php the_excerpt(); ?>
			<?php endforeach; ?>
		</div>
	</div>
<br />
<br />
	<? endwhile; ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
