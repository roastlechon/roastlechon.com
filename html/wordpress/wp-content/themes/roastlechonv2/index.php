<?php get_header(); ?>

	<div id="maincontent">

		<div class="wrapper">

				<?php

					$lastposts = get_posts('numberposts=3');

					foreach($lastposts as $post) :

					setup_postdata($post);

				?>

			<div id="content">

				<div class="post" id="post-<?php the_ID(); ?>">

				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<?php the_content('...Read more substance!'); ?>

				</div>

			</div>

			<div id="infobar">

				<b>Category:</b> <?php the_category(', ') ?><br />

				<b>Author:</b> <?php the_author() ?><br />

				<b>Date Posted:</b> <?php the_date(); ?><br />

				<b>Comments:</b> <?php comments_popup_link('None', '1', '%'); ?><br />

				

				<?php edit_post_link('Edit', '', ''); ?>

			</div>

				<?php endforeach; ?>

		</div>

	</div>

	<div id="middle">

		<div class="wrapper">

			<div id="middlecontent">

				<div class="columns">

					<h4>Recent Posts</h4>

							<ul>

							<?php

							global $post;

							$myposts = get_posts('numberposts=8&offset=3');

							foreach($myposts as $post) :

							setup_postdata($post);

							?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

							<?php endforeach; ?>

							</ul>

				</div>

				<div class="columns">

					<h4>Categories</h4>

						<ul>

						<?php wp_list_categories('orderby=name&show_count=0&title_li='); ?>

						</ul>

				</div>

				<div class="columns">

					<h4>Archives</h4>

						<ul>

						<?php wp_get_archives('type=monthly'); ?>

						</ul>

				</div>

				<div class="columns">

					<h4>Popular Tags</h4>

						<?php wp_tag_cloud(''); ?>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>

