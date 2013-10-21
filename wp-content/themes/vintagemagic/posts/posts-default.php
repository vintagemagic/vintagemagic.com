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
	<div id="main-content">
			<h1 id="main-title">Latest Articles</h1>
			<?php

			cfct_loop();
			cfct_misc('nav-posts');

			?>
			
			<div class="category-row">
				<h2>Category 1</h2>
				<ul class="list-category">
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
				</ul>
			</div>
			<div class="category-row">
				<h2>Category 2</h2>
				<ul class="list-category">
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
				</ul>
			</div>
			<div class="category-row">
				<h2>Category 3</h2>
				<ul class="list-category">
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
				</ul>
			</div>
			<div class="category-row">
				<h2>Category 4</h2>
				<ul class="list-category">
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
					<li><h3><a href="#">Pasellus sed, quis suscipit libero</a></h3>
						<h4>Author</h4>
						<a href="#" class="more-category">Read more &gt;&gt;</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div id="sidebar">
			<ul id="list-ads-sidebar">
				<li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-4.jpg" alt="" /></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-4.jpg" alt="" /></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-4.jpg" alt="" /></a></li>
			</ul>
		</div>
		<div class="clear"></div>


</div>

<?php

// get_sidebar();

get_footer();

?>