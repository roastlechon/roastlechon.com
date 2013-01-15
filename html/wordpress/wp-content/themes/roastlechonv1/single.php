<?php get_header(); ?>
<div id="maincontent">
	<div class="content">
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
	<? endwhile; ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
