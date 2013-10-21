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

?>
	<div id="footer">
		<div id="list-ads">
			<div class="ads-footer">
				<img src="<?php bloginfo('template_url') ?>/images/img-2.jpg" alt="" />
			</div>
			<div class="ads-footer">
				<img src="<?php bloginfo('template_url') ?>/images/img-2.jpg" alt="" />
			</div>
			<div class="ads-footer last">
				<img src="<?php bloginfo('template_url') ?>/images/img-2.jpg" alt="" />
			</div>
			<div class="clear"></div>
		</div>
		<h5>&copy; 2013 VintageMagic.com, All Rights Reserved.</h5> 
		<ul id="nav-footer">
			<li><a href="#">Legal</a></li>
			<li><a href="#">Contact Us</a></li>
			<li class="last"><a href="#">Site Map</a></li>
		</ul>
	</div>
</div>
<?php wp_footer() ?>
</body>
</html>