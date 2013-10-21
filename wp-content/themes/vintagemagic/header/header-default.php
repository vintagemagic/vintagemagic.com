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

$blog_desc = get_bloginfo('description');
(is_home() && !empty($blog_desc)) ? $title_description = ' - '.$blog_desc : $title_description = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ).$title_description; ?></title>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington-text' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'carrington-text' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<style type="text/css" media="all">@import "<?php bloginfo('template_url') ?>/css/style.css";</style>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.flexslider.js" type="text/javascript"></script>
	<!--[if IE 7]>
		<style type="text/css">@import "style/ie7.css";</style>
	<![endif]-->
	<script type="text/javascript">
	$(document).ready(function (){
		$('#slideshow.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
	});
	</script>


	

<?php
	wp_head(); 
?>
</head>

<body class="home">
<div id="wrapper">
	<div id="header">
		<ul id="nav-promo">
			<li><a href="#">Inkmoth Nexus $4.2</a></li>
			<li class="red"><a href="#">Advent of the Wurm $2.2</a></li>
			<li><a href="#">Dark Confidant $51</a></li>
			<li><a href="#">Snapcaster Mage $15</a></li>
			<li><a href="#">Dark Confidant $47</a></li>
			<li class="last"><a href="#">Inkmoth Nexus $4.2</a></li>
		</ul>
		<a href="/" id="logo">Vintage Magic</a>
		<div id="header-content">
			<ul id="nav-member">
				<li><a href="#">Login</a></li>
				<li><a href="#">Become a Member</a></li>
			</ul>
			<ul id="nav-social">
				<li id="icon-cart"><a href="#">Shopping Cart</a></li>
				<li id="icon-facebook"><a href="#">Facebook</a></li>
				<li id="icon-instagram"><a href="#">Instagram</a></li>
				<li id="icon-twitter"><a href="#">Twitter</a></li>
				<li id="icon-youtube"><a href="#">Youtube</a></li>
			</ul>
			<form method="post" action="#" id="form-search">
				<div>
					<input type="text" name="search" class="input" /><input type="submit" name="submit-search" class="button" value="Search" />
				</div>
			</form>
		</div>
		<div class="clear"></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id'  => 'nav', 'menu_id' => 'nav-main', 'depth' => 1 ) ); ?>
				
	</div>