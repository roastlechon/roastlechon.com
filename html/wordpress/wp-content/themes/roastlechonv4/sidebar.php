        <div id="sidebar">
        	<div class="sidebarwrapper">
        		<h1 class="sidebar-title">Most recent weblog entries</h1>
                    <ul id="recentposts">
                        <?php
                        global $post;
                        $myposts = get_posts('numberposts=8&offset=3');
                        foreach($myposts as $post):
                        ?>
                        <li>
                        <a class="recentnav" href="<?php the_permalink(); ?>"><?php the_title(); ?>
                        <br/><span><?php the_time('F j, Y'); ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                 	<ul>
						<li>
						<?php echo statuspress('http://www.facebook.com/feeds/status.php?id=1122600108&viewer=1122600108&key=d92348f3db&format=rss20', 'Facebook Status', 5); ?>
                        </li>
                    </ul>
				<h2 class="sidebar-title">Categories</h2>
                    <ul class="category-list">
					<?php wp_list_categories('exclude=&title_li='); ?>
                    </ul>
                 
                <br class="clear" />

				<h2 class="sidebar-title">Archives</h2>
                	<ul class="archive-list">
					<?php wp_get_archives('type=monthly&limit=12'); ?> 
                    </ul>
			</div>

        </div>