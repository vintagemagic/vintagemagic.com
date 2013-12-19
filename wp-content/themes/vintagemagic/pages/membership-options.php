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
	<div id="page-content">
		<article class="static-page">

<?php if (S2MEMBER_CURRENT_USER_ACCESS_LEVEL === 4){ ?>
    You are currently a <?php echo S2MEMBER_CURRENT_USER_ACCESS_LABEL; ?>.
<?php } else if (S2MEMBER_CURRENT_USER_ACCESS_LEVEL === 3){ ?>
    You are currently a <?php echo S2MEMBER_CURRENT_USER_ACCESS_LABEL; ?>.
<?php } else if (S2MEMBER_CURRENT_USER_ACCESS_LEVEL === 2){ ?>
    You are currently a <?php echo S2MEMBER_CURRENT_USER_ACCESS_LABEL; ?>.
<?php } else if (S2MEMBER_CURRENT_USER_ACCESS_LEVEL === 1){ ?>
    You are currently a <?php echo S2MEMBER_CURRENT_USER_ACCESS_LABEL; ?>.
<?php } else if(S2MEMBER_CURRENT_USER_ACCESS_LEVEL === 0){ ?>
    You are currently registered with limited access.
<?php } else if(S2MEMBER_CURRENT_USER_ACCESS_LEVEL === -1){ ?>
    You are not logged in at all.
<?php } ?>

<?php
// ---------------------------------------------------------------

$_g = stripslashes_deep ($_GET);

// ------------------------------------------------------------------------------------

if (isset ($_g["_s2member_seeking"]["type"]) /* One of: page|post|catg|ptag|file|ruri */ )
    echo 'You were trying to access a protected: ' . esc_html ($_g["_s2member_seeking"]["type"]) . '.';

// ---------------------------------------------------------------

if (isset ($_g["_s2member_seeking"]["page"]))
    echo 'You were trying to access Page ID #' . esc_html ($_g["_s2member_seeking"]["page"]) . '.';

else if (isset ($_g["_s2member_seeking"]["post"]))
    echo 'You were trying to access Post ID #' . esc_html ($_g["_s2member_seeking"]["post"]) . '.';

else if (isset ($_g["_s2member_seeking"]["catg"]))
    echo 'You were trying to access Category ID #' . esc_html ($_g["_s2member_seeking"]["catg"]) . '.';

else if (isset ($_g["_s2member_seeking"]["ptag"]))
    echo 'You were trying to access the Tag ID #' . esc_html ($_g["_s2member_seeking"]["ptag"]) . '.';

else if (isset ($_g["_s2member_seeking"]["file"]))
    echo 'You were trying to access the File: ' . esc_html ($_g["_s2member_seeking"]["file"]) . '.';

else if (isset ($_g["_s2member_seeking"]["ruri"]) /* Full URI they were trying to access. */)
    echo 'You were trying to access URI: ' . esc_html (base64_decode ($_g["_s2member_seeking"]["ruri"])) . '.';
// See also: <http://codex.wordpress.org/Function_Reference/site_url>.
// See also: <http://php.net/manual/en/function.base64-decode.php>.

// ---------------------------------------------------------------

if (isset ($_g["_s2member_seeking"]["_uri"]) /* Full URI they were trying to access. */ )
    echo 'You were trying to access URL: ' . esc_html (site_url(base64_decode($_g["_s2member_seeking"]["_uri"]))) . '.';
// See also: <http://codex.wordpress.org/Function_Reference/site_url>.
// See also: <http://php.net/manual/en/function.base64-decode.php>.

// ------------------------------------------------------------------------------------

if (isset ($_g["_s2member_req"]["type"]) /* One of: level|ccap|sp */)
    echo 'You were trying to access content that requires: ' . esc_html ($_g["_s2member_req"]["type"]) . '.';

// ---------------------------------------------------------------

if (isset ($_g["_s2member_req"]["level"]))
    echo 'You must be a Member at Level #' . esc_html ($_g["_s2member_req"]["level"]) . ' or higher.';

else if (isset ($_g["_s2member_req"]["ccap"]))
    echo 'You must be a Member with Custom Capability: ' . esc_html ($_g["_s2member_req"]["ccap"]) . '.';

else if (isset ($_g["_s2member_req"]["sp"]))
    echo 'You must purchase Specific Post/Page ID #' . esc_html ($_g["_s2member_req"]["sp"]) . '.';

// ------------------------------------------------------------------------------------

if (isset ($_g["_s2member_res"]["type"]) /* One of: post|page|catg|ptag|file|ruri|ccap|sp|sys */)
    echo 'You were trying to access content protected via s2Member: ' . esc_html ($_g["_s2member_res"]["type"]) . ' restrictions.';
?>
<?php

cfct_loop();

?>
		</article>
	</div>
	<div class="clear"></div>
</div>

<?php 

get_footer();

?>