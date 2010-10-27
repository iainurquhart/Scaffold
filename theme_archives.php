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
 File: theme_archives.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_archives {

//-------------------------------------
//  Recent Post Table
//-------------------------------------

function recent_posts()
{
return <<< EOF
<div class="fm-header-wrapper">
	<h3 class="fm-topic-title fm-recent-topics">{lang:most_recent_topics}</h3>
</div>

<table class="fm-topic-table" cellpadding="0" cellspacing="0" border="0" >
	<tr>
		<th>
			{lang:title}
		</th>
		<th>
			{lang:total_replies_heading}
		</th>
		<th>
			{lang:total_views_heading}
		</th>
		<th>
			{lang:author}
		</th>
	</tr>
	{include:most_recent_topics}
</table>

<div class="fm-topic-header fm-subsequent">
	<h3 class="fm-topic-title popular-posts">{lang:most_popular_posts}</h3>
</div>

<table class="fm-topic-table" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<th>
			{lang:title}
		</th>
		<th>
			{lang:total_replies_heading}
		</th>
		<th>
			{lang:total_views_heading}
		</th>
		<th>
			{lang:author}
		</th>
	</tr>
	{include:most_popular_posts}
</table>
EOF;
}
/* END */




//-------------------------------------
//  Most Recent Topics Item
//-------------------------------------

function most_recent_topics()
{
return <<< EOF
<tr class="fm-recent-posts">
	<td class="fm-recent col-title">
		<a href="{path:view_thread}">{title}</a>
	</td>
	<td class="fm-recent col-replies">
		{replies}
	</td>
	<td class="fm-recent col-views">
		{views}
	</td>
	<td class="fm-recent col-author">
		<a href="{path:member_profile}">{author}</a>
	</td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Most Popular Post Item
//-------------------------------------

function most_popular_posts()
{
return <<< EOF
<tr class="fm-popular-posts">
	<td class="fm-popular col-title">
		<a href="{path:view_thread}">{title}</a>
	</td>
	<td class="fm-popular col-replies">
		{replies}
	</td>
	<td class="fm-popular col-views">
		{views}
	</td>
	<td class="fm-popular col-author">
		<a href="{path:member_profile}">{author}</a>
	</td>
</tr>
EOF;
}
/* END */




}
// END CLASS
?>