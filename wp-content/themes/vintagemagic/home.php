<?php

// This file is part of the Carrington Text Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>

<div id="content">
		<div id="slideshow" class="flexslider">
			<ul class="slides">
				<li><img src="<?php bloginfo('template_url') ?>/images/slide-1.jpg" alt="" />
					<div class="panel-slideshow">
						<h3>"Ayeshka Tanaka" by Bryon Wackitz</h3>
						<p>Original Artwork for the 1994 MTG Magic: The Gathering Legends Expansion Sets</p>
					</div>
				</li>
				<li><img src="<?php bloginfo('template_url') ?>/images/slide-1.jpg" alt="" />
					<div class="panel-slideshow">
						<h3>"Ayeshka Tanaka" by Bryon Wackitz</h3>
						<p>Original Artwork for the 1994 MTG Magic: The Gathering Legends Expansion Sets</p>
					</div>
				</li>
				<li><img src="<?php bloginfo('template_url') ?>/images/slide-1.jpg" alt="" />
					<div class="panel-slideshow">
						<h3>"Ayeshka Tanaka" by Bryon Wackitz</h3>
						<p>Original Artwork for the 1994 MTG Magic: The Gathering Legends Expansion Sets</p>
					</div>
				</li>
				<li><img src="<?php bloginfo('template_url') ?>/images/slide-1.jpg" alt="" />
					<div class="panel-slideshow">
						<h3>"Ayeshka Tanaka" by Bryon Wackitz</h3>
						<p>Original Artwork for the 1994 MTG Magic: The Gathering Legends Expansion Sets</p>
					</div>
				</li>
				<li><img src="<?php bloginfo('template_url') ?>/images/slide-1.jpg" alt="" />
					<div class="panel-slideshow">
						<h3>"Ayeshka Tanaka" by Bryon Wackitz</h3>
						<p>Original Artwork for the 1994 MTG Magic: The Gathering Legends Expansion Sets</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="box-homepage">
			<h2 class="title-homepage">Player Articles</h2>
			<ul class="list-article">
				<li>
					<img src="<?php bloginfo('template_url') ?>/images/img-1.jpg" alt="" />
					<h3><a href="#">Hurkyll's Recall: Original Art</a></h3>
					<p>Global art by Nene Thomas for the Magic: the Gathering Amntiques expansion set. <a href="#">See more &gt;&gt;</a>
				</li>
				<li>
					<img src="<?php bloginfo('template_url') ?>/images/img-1.jpg" alt="" />
					<h3><a href="#">Vestibulum Luctus Nulla Nec</a></h3>
					<p>Donec risus metus, sodales vitae tellus quis, egestas hendrerit nibh. Vivamus nisi dui, vestibulum a ultricies in, elementum nec purus. Donec risus metus, sodales vitae tellus quis, egestas hendrerit nibh. <a href="#">See more &gt;&gt;</a>
				</li>
			</ul>
		</div>
		<div class="box-homepage">
			<h2 class="title-homepage">The Collector</h2>
			<ul class="list-article">
				<li>
					<img src="<?php bloginfo('template_url') ?>/images/img-1.jpg" alt="" />
					<h3><a href="#">Vestibulum Luctus Nulla Nec</a></h3>
					<p>Donec risus metus, sodales vitae tellus quis, egestas hendrerit nibh. Vivamus nisi dui, vestibulum a ultricies in, elementum nec purus. Donec risus metus, sodales vitae tellus quis, egestas hendrerit nibh. <a href="#">See more &gt;&gt;</a>
				</li>
				<li>
					<img src="<?php bloginfo('template_url') ?>/images/img-1.jpg" alt="" />
					<h3><a href="#">Vestibulum Luctus Nulla Nec</a></h3>
					<p>Donec risus metus, sodales vitae tellus quis, egestas hendrerit nibh. Vivamus nisi dui, vestibulum a ultricies in, elementum nec purus. Donec risus metus, sodales vitae tellus quis, egestas hendrerit nibh. <a href="#">See more &gt;&gt;</a>
				</li>
			</ul>
		</div>
		<div class="box-homepage last">
			<h2 class="title-homepage">Artist and Artwork</h2>
			<ul class="list-artwork">
				<li>
					<h3><a href="#">Gencon 2013: Sed id lectus sed</a></h3>
					<p>Sed pharetra ultrices magna nec posuere. Aliquam ultricies ornare pulvinar. Sed nec dignissim mi, a rutrum tortor.</p>
				</li>
				<li>
					<h3><a href="#">Gencon 2013: Sed id lectus sed</a></h3>
					<p>Sed pharetra ultrices magna nec posuere. Aliquam ultricies ornare pulvinar. Sed nec dignissim mi, a rutrum tortor.</p>
				</li>
				<li>
					<h3><a href="#">Gencon 2013: Sed id lectus sed</a></h3>
					<p>Sed pharetra ultrices magna nec posuere. Aliquam ultricies ornare pulvinar. Sed nec dignissim mi, a rutrum tortor.</p>
				</li>
			</ul>
			<ul class="list-tournament">
				<li><a href="#">June 21: Vintage 5k Washington, D.C.</a></li>
				<li><a href="#">August 15-18: Gencon, Indianapolis, IN</a></li>
				<li><a href="#">September 6: Vintage 5k, Baltimore, MD</a></li>
			</ul>
			<a href="#" class="link-tournament">Find tournaments near you &gt;&gt;</a>
		</div>
		<div class="clear"></div>
	</div>

<?php

// cfct_loop();

// comments_template();

?>


<?php 

// get_sidebar();

get_footer();

?>


