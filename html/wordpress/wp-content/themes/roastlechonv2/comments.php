<div class="wrapper">
<div class="comments">
				<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
				<p>Enter your password to view comments.</p>
				<?php return; endif; ?>
				<?php if ( $comments ) : ?>
			
				<h1>Comments</h1>
					<ol>
					<?php foreach ($comments as $comment) : ?>
						<li>
						<?php comment_author_link() ?> <?php edit_comment_link(__("Edit This")); ?>
						<?php comment_text() ?>
						</li>
					<?php endforeach; ?>
					</ol>
					<?php else : // If there are no comments yet ?>
					<?php endif; ?>
					<?php if ( pings_open() ) : ?>
					
					<?php endif; ?>
	
					<?php if ( comments_open() ) : ?>
					<h1 id="postcomment"><?php _e('Leave a response'); ?></h1>
	
					<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
					<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a response.</p>
					<?php else : ?>
	
					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
						<?php if ( $user_ID ) : ?>
						<p>You are <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout</a></p>
						<?php else : ?>
						<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
						<label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label></p>
						<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
						<label for="email"><small>Mail (will not be published) <?php if ($req) _e('(required)'); ?></small></label></p>
						<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
						<label for="url"><small>Website</small></label></p>
						<?php endif; ?>
						<p><textarea name="comment" id="comment" cols="84%" rows="10" tabindex="4"></textarea></p>
						<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
						<?php do_action('comment_form', $post->ID); ?>
					</form>
	
					<?php endif; // If registration required and not logged in ?>
	
					<?php else : // Comments are closed ?>
					<p><?php _e('Comments are closed now.'); ?></p>
			<?php endif; ?>
</div>
</div>