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
		<article class="static-page">
			TEST
			<?php

			cfct_loop();

			?>
		</article>
		<h3 class="title-also">You might also like:</h3>
		<ul id="list-also">
			<li>
				<img src="<?php bloginfo('template_url') ?>/images/img-6.jpg" alt="" />
				<h4><a href="#">Title</a></h4>
				<p>Phasellus sed venenatis mi, quis suscipit libero. Mauris purus elit,feugiat convallis consectetur ut, pulvinar a leo. Nunc a bibendum augue. Mauris congue consect sollicitudin. </p>
				<h5>Author</h5>
			</li>
			<li class="last">
				<img src="<?php bloginfo('template_url') ?>/images/img-6.jpg" alt="" />
				<h4><a href="#">Title</a></h4>
				<p>Phasellus sed venenatis mi, quis suscipit libero. Mauris purus elit,feugiat convallis consectetur ut, pulvinar a leo. Nunc a bibendum augue. Mauris congue consect sollicitudin. </p>
				<h5>Author</h5>
			</li>
		</ul>
		<div class="clear"></div>
		<?php

		comments_template();

		?>
	</div>

	</div>
	<div class="clear"></div>



	<div class="pagination pagination-single">
		<span class="next"><?php next_post_link() ?></span>
		<span class="previous"><?php previous_post_link() ?></span>
	</div>

</div>

<?php 

get_footer();

?>