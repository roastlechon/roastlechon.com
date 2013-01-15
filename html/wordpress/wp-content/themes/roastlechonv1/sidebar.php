<div id="sub">
	<div class="content">
		<div id="top">
			<div id="flickr_badge_uber_wrapper">
				<h2>Flickr</h2>
				<div id="flickr_badge_wrapper">
					<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=5&amp;display=random&amp;size=s&amp;layout=h&amp;source=user&amp;user=44188338%40N00"></script>
				</div>
			</div>
			<div id="winamphits">
				<h2>Current Albums</h2>
				<a href="http://www.amazon.com/gp/product/B000FC2G8W/sr=8-1/qid=1154591473/ref=pd_bbs_1/104-1606677-0645554?ie=UTF8"><img alt="Zero 7" width="75" height="75" src="http://ec1.images-amazon.com/images/P/B000FC2G8W.01._AA240_SCLZZZZZZZ_V52493504_.jpg" /></a><a href="http://www.amazon.com/gp/product/B0000E6XJQ/sr=1-3/qid=1154591516/ref=pd_bbs_3/104-1606677-0645554?ie=UTF8"><img alt="Underworld" width="75" height="75" src="http://images.amazon.com/images/P/B0000E6XJQ.01._AA240_SCLZZZZZZZ_.jpg" /></a><a href="http://www.amazon.com/gp/product/B000FUH3KK/sr=1-1/qid=1154591544/ref=pd_bbs_1/104-1606677-0645554?ie=UTF8"><img alt="Tokyo Drift" width="75" height="75" src="http://ec3.images-amazon.com/images/P/B000FUH3KK.01._AA240_SCLZZZZZZZ_V51150659_.jpg" /></a><a href="http://www.amazon.com/gp/product/B000FVQYYK/sr=1-1/qid=1154591599/ref=pd_bbs_1/104-1606677-0645554?ie=UTF8"><img alt="Muse" width="75" height="75" src="http://ec1.images-amazon.com/images/P/B000FVQYYK.01._AA240_SCLZZZZZZZ_V64952669_.jpg" /></a><a href="http://www.amazon.com/gp/product/B000G1QX4A/sr=1-1/qid=1154591689/ref=pd_bbs_1/104-1606677-0645554?ie=UTF8"><img alt="DMX" width="75" height="75" src="http://ec3.images-amazon.com/images/P/B000G1QX4A.01._AA240_SCLZZZZZZZ_V65109575_.jpg" /></a>
			</div>
			<div id="other">
				<h2>Other</h2>
				<p>Random gibberish stuff that I dont know what to put here yet.. So hang tite peoples...</p>
			</div>
			<div id="aboutme">
				<h2>About Me</h2>
				<p>My name is Noel Madali, and I am 16 years old.  I am a web designer, graphic artist, photographer, and enjoy many different hobbies.  My ethnicity is "Pacific Islander" and my parents are from the Philippines.  To know more about me, vist my biography page <a href="http://roastlechon.com/about/">here</a>.</p>

			</div>
		</div>
		<div id="bottom">
			<div id="categories">
				<h2>Categories</h2>
				<ul>
				<?php wp_list_cats(); ?>
				</ul>
			</div>
			<div id="archives">
				<h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
			<div id="delicious">
				<h2>Del.icio.us</h2>
				<script type="text/javascript" src="http://del.icio.us/feeds/js/roastlechon?count=10"></script>
			</div>
			<div id="links">
				<h2>Links</h2>
				<ul>
				<?php get_links('-1', '<li>', '</li>', '<br/>', false, 'id', false, false, -1, true); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
