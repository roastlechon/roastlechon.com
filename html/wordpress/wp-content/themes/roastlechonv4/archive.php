<?php get_header(); ?>
	<div id="content">
<?php get_sidebar(); ?>
	    <div id="maincontent"><div>
				<?php if (have_posts()) : ?>
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2 class="page-title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
                <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2 class="page-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2 class="page-title">Archive for <?php the_time('F jS, Y'); ?></h2>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2 class="page-title">Archive for <?php the_time('F, Y'); ?></h2>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2 class="page-title">Archive for <?php the_time('Y'); ?></h2>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2 class="page-title">Author Archive</h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2 class="page-title">Blog Archives</h2>
                <?php } ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<h3>Published on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> <?php edit_post_link('Edit'); ?></h3>
					<?php the_content('Read more &raquo;'); ?>
					<?php comments_template(); ?>
				</div>
				<?php endwhile; ?>
                <h3>
                <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</h3>
				<?php else: ?>
				<?php endif; ?>		
		</div></div>
<?php get_footer(); ?>
