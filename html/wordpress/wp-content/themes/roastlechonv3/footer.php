</div>
		<div id="footer">
		<div id="footercontent">
			<div class="footercolumn">
				<h3>POPULAR POSTS</h3>
					<ul>
				   <?php akpc_most_popular(); ?>
				   </ul>
			</div>
			<div class="footercolumn">
				<h3>RECENT COMMENTS</h3>
					<ul class='recent_comments'>
					<?php echo rr_recent_comments($num_recent_posts = 10); ?>
					</ul>
			</div>
			<div class="footercolumn">
				<h3>POPULAR TAGS</h3>
					<?php wp_tag_cloud('smallest=8&largest=30&number=30&orderby=name'); ?>
			</div>
			<div class="footercolumn">
				<h3>ARCHIVES</h3>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
					
			</div>
		</div>
		</div>
		<div id="bottom">
			<div id="bottomcontent">
Design is Copyright 2008 by <a href="http://roastlechon.com/portfolio/" rel="Portfolio">Noel Madali</a><br />
		Roastlechon and all other content is Copyright 2008 by <a href="http://roastlechon.com/about/" rel="About">Roastlechon</a><br />
		Powered by <a href="http://www.wordpress.org/">Wordpress 2.3</a><br />
		All files validate <a href="http://jigsaw.w3.org/css-validator/check/referer/" rel="Validate">CSS</a> and <a href="http://validator.w3.org/check?uri=referer" rel="Validate">XHTML</a><br />
		All images, designs, ideas, and anything else that might not be mine belong to their owners.<br />
		<p align="right"><a href="#container" rel="Return to Top">Return to Top</a></p>
			</div>
		</div>
</div>
</body>
</html>