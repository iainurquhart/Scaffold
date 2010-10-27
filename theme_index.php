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
 File: theme_index.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_index {

//-------------------------------------
//  Forum Main Index Page
//-------------------------------------

function forum_homepage()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{if logged_in}
<div class="fm-home-tools-wrapper">
	<ul id="fm-home-tools">
		<li><a href="{path:view_new_topics}">{lang:view_new_topics}</a></li>
		<li><a href="{path:view_active_topics}">{lang:view_active_topics}</a></li>
		<li><a href="{path:view_pending_topics}">{lang:view_pending_topics}</a></li>
		<li><a href="{path:mark_all_read}">{lang:mark_all_read}</a></li>
	</ul>
</div>
{/if}
{include:main_forum_list}
{if is_admin}
	{include:visitor_stats}
{/if}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Forum Main Wrapper
//-------------------------------------

function main_forum_list()
{
return <<< EOF
{include:table_heading}
{include:table_rows}
{include:table_footer}
EOF;
}
/* END */




//-------------------------------------
//  Forum Table Heading
//-------------------------------------

function forum_table_heading()
{

return <<< EOF
<div class="fm-header-wrapper">
	<h3 class="fm-topic-title fm-category-name">{category_name}</h3>
	{if category_description}<p class="fm-category-name">{category_description}</p>{/if}
</div>

<table class="fm-forum-topic" cellpadding="0" cellspacing="0" border="0" >
<tr>
	<th class="fm-heading" colspan="2">{lang:forum_name_heading}</th>
	<th class="fm-total-topics">{lang:total_topics_heading}</th>
	<th class="fm-replies">{lang:total_replies_heading}</th>
	<th class="fm-info">{lang:post_info_heading}</th>
</tr>

EOF;
}
/* END */




//-------------------------------------
//  Forum Table Rows
//-------------------------------------

function forum_table_rows()
{
return <<< EOF
<tr class="fm-topic-row">
	<td class="fm-topic-icon">
		<a href="{path:viewforum}">
			<img src="{topic_marker}" width="24" height="18" border="0" alt="{forum_name}" title="{forum_name}" />
		</a>
	</td>
	<td class="fm-heading">
		<h4><strong><a href="{path:viewforum}" title="{forum_name}">
			{forum_name}
		</a></strong></h4>
		{if forum_description}
		<p class="fm-description">
			{forum_description}
		</p> 
		{/if}
		{if forum_moderators}
			<div class="forumLightLinks">{lang:moderated_by}
				{moderators backspace='1'}<a href="{path:member_profile}">{name}</a>,{/moderators}
			</div>
		{/if}
	</td>
	<td class="fm-total-topics">{total_topics}</td>
	<td class="fm-replies">{total_replies}</td>
	<td class="fm-info">
		{if recent_post}
			<a href="{path:recent_thread}">{title}</a><br />
			{lang:posted_by} <a href="{path:member_profile}">{author}</a>, {last_post format="%m-%d-%Y %h:%i %A"}
		{/if}
	</td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Forum Table Footer
//-------------------------------------

function forum_table_footer()
{
return <<< EOF
</table>
EOF;
}
/* END */




}
// END CLASS
?>