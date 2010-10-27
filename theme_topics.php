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
 File: theme_topics.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_topics {

//-------------------------------------
//  Topic Page
//-------------------------------------

function topic_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:topics}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Topics
//-------------------------------------

function topics()
{
return <<< EOF

{include:announcement_topics}

<div class="fm-header-wrapper">
	<span>
	{if can_post}
		<a href="{path:new_topic}" class="fm-button fm-new-topic">{lang:post_new_topic}</a>
	{/if}
	</span>
	<h3 class="fm-topic-title">{forum_name}</h3>
</div>

<table class="fm-forum-topic">
	<tr>
		<th colspan="2" class="fm-heading">{lang:topic_heading}</th>
		<th class="fm-views">{lang:total_views_heading}</th>
		<th class="fm-replies">{lang:total_replies_heading}</th>
		<th class="fm-info">{lang:post_info_heading}</th>
	</tr>
	{include:topic_rows}
</table>



<div class="fm-thread-footer-wrapper">
	{if can_post}
		<a href="{path:new_topic}" class="fm-button fm-new-topic">{lang:post_new_topic}</a>
	{/if}
	{if paginate}
	<p>{current_page} {lang:of} {total_pages} {lang:Pages}</p>
	<table class="fm-stoopid-pagination" cellspacing="0" cellpadding="0" border="0"><tr>{pagination_links}</tr></table>
	{/if}
</div>

{include:forum_quick_search_form}
EOF;
}
/* END */




//-------------------------------------
//  Topic Rows
//-------------------------------------

function topic_rows()
{
return <<< EOF
{if is_ignored}
<tr>
 <td colspan="5">
 	{lang:topic_hidden} <strong>{author}</strong> {lang:is_ignored}.
 	<a href="#" onclick="showHideRow('{id1}');return false;">{lang:view_hide}</a>
 	<a href="{path:ignore}">{lang:stop_ignoring} {author}</a>
 </td>
</tr>
{/if}


<tr class="fm-topic-row">
	<td class="fm-topic-icon">
		<a href="{path:view_thread}">
			<img src="{topic_marker}" width="24" height="18" border="0" alt="{forum_name}" title="{forum_name}" />
		</a>
	</td>
	<td class="fm-heading">
		<h4{if is_new} class="fm-new-topic"{/if}><strong><a href="{path:view_thread}" title="{forum_name}">
			{topic_title}
		</a></strong></h4>
		<p>{lang:posted_by} <a href="{path:member_profile}">{author}</a> {if pagelinks}( {pagelinks} ){/if}</p>
		
	</td>
	<td class="fm-total-topics">{total_views}</td>
	<td class="fm-replies">{total_replies}</td>
	<td class="fm-info">
		{if is_topic}{lang:posted_on} {last_reply format="%m-%d-%Y %h:%i %A"}<br />{/if}
		{if is_post}<a href="{path:post_link}">{lang:posted_on} {last_reply format="%m-%d-%Y %h:%i %A"}</a><br />{/if}
		{lang:posted_by} <a href="{path:reply_member_profile}">{reply_author}</a>
	</td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Topic No Results Message
//-------------------------------------

function topic_no_results()
{
return <<< EOF
<tr>
<td class="tableCellOne" colspan="5"><div class="itempadbig"><b>{lang:no_topics}</b></div></td>
</tr>
EOF;
}
/* END */




}
// END CLASS
?>