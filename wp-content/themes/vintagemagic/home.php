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
		<?php echo do_shortcode("[metaslider id=22]"); ?>
		<div class="box-homepage">
			<h2 class="title-homepage">Player Articles</h2>
			<ul class="list-article">

				<?php query_posts('category_name=player&showposts=3');

				while (have_posts()) {
					the_post();
					cfct_template_file('content', 'home-img-teaser');
				}

				wp_reset_query(); ?>
			</ul>
		</div>
		<div class="box-homepage">
			<h2 class="title-homepage">The Collector</h2>
			<ul class="list-article">
				<?php query_posts('category_name=collector&showposts=3');

				while (have_posts()) {
					the_post();
					cfct_template_file('content', 'home-img-teaser');
				}

				wp_reset_query(); ?>
			</ul>
		</div>
		<div class="box-homepage last">
			<h2 class="title-homepage">Artist and Artwork</h2>
			<ul class="list-artwork">
				<?php query_posts('category_name=art&showposts=3');

				while (have_posts()) {
					the_post();
					cfct_template_file('content', 'home-art-teaser');
				}

				wp_reset_query(); ?>
			</ul>
			<ul class="list-tournament">
				<?php query_posts('post_type=event&showposts=3');

				while (have_posts()) {
					the_post();		
					echo '<li><a href="#">';
					the_title();
					echo '</li>';
				}
				
				wp_reset_query(); ?>
				<!-- <li><a href="#">June 21: Vintage 5k Washington, D.C.</a></li>
				<li><a href="#">August 15-18: Gencon, Indianapolis, IN</a></li>
				<li><a href="#">September 6: Vintage 5k, Baltimore, MD</a></li> -->
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


