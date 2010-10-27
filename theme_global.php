<?php

/*
=====================================================
 ExpressionEngine - by EllisLab
-----------------------------------------------------
 http://expressionengine.com/
-----------------------------------------------------
 Copyright (c) 2003 - 2009 EllisLab, Inc.
=====================================================
 THIS IS COPYRIGHTED SOFTWARE
 PLEASE READ THE LICENSE AGREEMENT
 http://expressionengine.com/docs/license.html
=====================================================
 File: theme_global.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_global {

/* -------------------------------------
/*  HTML Header
/* -------------------------------------*/

function html_header()
{
return <<< EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{lang}" lang="{lang}">
<head>
	<title>{forum_name} | {page_title}</title>

	<meta http-equiv="content-type" content="text/html; charset={charset}" />
	
	{if feeds_enabled}
	<link rel="alternate" type="application/atom+xml" title="{lang:atom_feed}" href="{path:atom}" />
	<link rel="alternate" type="application/rss+xml" title="{lang:rss_feed}" href="{path:rss}" />
	{/if}
	
	{include:javascript}
	{include:head_extra}

	<link rel="stylesheet" href="/themes/forum_themes/scaffold/forum_assets/css/screen.css" type="text/css" media="screen, projection" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="/themes/forum_themes/scaffold/forum_assets/js/forum.js" type="text/javascript"></script> 

</head>

<body {include:body_extra}>
	<div id="body-faux">
	<div id="forum-wrapper">

EOF;
}
/* END */


//-------------------------------------
//  Meta Tags
//-------------------------------------

function meta_tags()
{
return <<< EOF

EOF;
}
/* END */


//-------------------------------------
//  HTML Footer
//-------------------------------------

function html_footer()
{
return <<< EOF

	<div id="fm-footer">
		
		<p id="fm-powered-by">
			<a href="http://expressionengine.com/" class="fm-credit-link">{lang:powered_by_ee}</a>
			<span class="fm-load-stats">
				{lang:ee_discussion_forum} - {lang:version} {module_version} ({forum_build})
			<!-- {lang:elapsed_time} -->
			</span>
		</p>
		{if feeds_enabled}
		<p class="fm-feeds">
			<a href="{path:rss}" class="fm-rss-link">{lang:rss_feed}</a>
			<a href="{path:atom}" class="fm-atom-link">{lang:atom_feed}</a>
		</p>
		{/if}
	</div>
	

</div> <!-- /#body-faux -->
</div> <!-- /#forum-wrapper -->

</body>
</html>
EOF;
}
/* END */



//-------------------------------------
//  Top Bar
//-------------------------------------

function top_bar()
{
return <<< EOF
{if logged_out}
	{include:login_form_mini}
{/if}

{if logged_in}
	{include:private_message_box}
{/if}

<div id="fm-header" class="logged{if logged_out}-out{/if}{if logged_in}-in{/if}">
	<h1><strong>{forum_name}</strong></h1>

	<div id="fm-main-navigation">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Nav Item</a></li>
			<li><a href="#">Another Item</a></li>
			<li><a href="/index.php/forums/" class="active">Forums</a></li>
			<li><a href="#">Item Here</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">And One More</a></li>
		</ul>
	</div>
	<div id="fm-crumbs">
		{include:quick_search_form}
		<p>You are here: <a href="/">Home</a> :: {include:breadcrumb}</p>
	</div>
</div> <!-- "fm-header -->
EOF;
}
/* END */




//-------------------------------------
//  Top Bar Spacer
//-------------------------------------

function top_bar_spacer()
{
return <<< EOF

EOF;
}
/* END */




//-------------------------------------
//  Page Header
//-------------------------------------

function page_header()
{
return <<< EOF

EOF;
}
/* END */




//-------------------------------------
//  Page Header - Simple
//-------------------------------------

function page_header_simple()
{
return <<< EOF

EOF;
}
/* END */




//-------------------------------------
//  Page Sub-header
//-------------------------------------

function page_subheader()
{
return <<< EOF

EOF;
}
/* END */




//-------------------------------------
//  Page Sub-header - Simple
//-------------------------------------

function page_subheader_simple()
{
return <<< EOF

EOF;
}
/* END */




//-------------------------------------
//  Private Message Box
//-------------------------------------

function private_message_box()
{
return <<< EOF
<div class="fm-header-wrapper fm-welcome-msg-logged-in">
	{lang:logged_in_as} 
	<a href="{path:your_control_panel}" class="fm-name-link">{screen_name}</a>
	
	<span class="fm-pm-indicator{if private_messages} fm-has-mail{/if}">
		<a href="{path:private_messages}">{total_unread_private_messages} {lang:private_message}</a>
		&nbsp; &nbsp;
		<a href="{path:logout}" class="fm-logout-link">{lang:logout}</a>
	</span>
</div>
EOF;
}
/* END */




}
// END CLASS
?>