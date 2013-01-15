<div id="footer">
  <div class="content">
		<div id="search">
		<h2>Search</h2>
		<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
			<fieldset>
			<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" alt="search" />
			<input type="submit" value="Go" id="submitbutton" />
			</fieldset>
		</form>
		<br/>
		Can't find what you are looking for? Use the search tool!
		</div>
		<div id="menu">
		<h2>Menu</h2>
		<ul>
			<li><a href="javascript:window.external.AddFavorite('http://roastlechon.com','Roastlechon');">Bookmark Roastlechon!</a></li>
			<li><a href="http://del.icio.us/post" onclick="window.open('http://del.icio.us/post?v=4&amp;noui&amp;jump=close&amp;url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=700,height=400'); return false;">Add to Del.icio.us</a></li>
			<li><a href="<?php bloginfo_rss('rss2_url') ?>">Subscribe with Feedburner</a></li>
			<li><a href="http://roastlechon.com/wp-admin">Login</a></li>
		</ul>
		</div>
		<div id="copy">
		<h2>Watermark</h2>
			Powered by: <a href="http://www.wordpress.org/">Wordpress 2.03</a>, Flickr, food, and Starbucks Frappucinos.<br/>
			All files validate <a href="http://jigsaw.w3.org/css-validator/check/referer/">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML</a>
			All images, designs, ideas, and anything else that might not be mine belong to others and their stuff is copyright. Any other material that is mine is... <br />
			Copyright &copy;2006 Noel Madali. All Rights Reserved.
		</div>
	</div>
</div>
</div>
</body>
</html>