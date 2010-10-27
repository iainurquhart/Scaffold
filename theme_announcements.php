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
 File: theme_announcements.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_announcements {

//-------------------------------------
//  Announcement Page
//-------------------------------------

function announcement_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:announcements}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Announcement - Topic List
//-------------------------------------

function announcement_topics()
{
return <<< EOF
<div class="fm-header-wrapper">
	<h3 class="fm-topic-title fm-announcements">{lang:announcements}</h3>
</div>

<table class="fm-forum-topic fm-announcements-wrapper">
	<tr>
		<th colspan="2" class="fm-heading">{lang:announcement}</th>
		<th class="fm-views">{lang:total_views_heading}</th>
		<th class="fm-info">{lang:date}</th>
	</tr>
	{include:announcement_rows}
</table>
EOF;
}
/* END */




//-------------------------------------
//  Announcement - Topics Rows
//-------------------------------------

function announcement_topic_rows()
{
return <<< EOF
<tr class="fm-announcement-row">
	<td class="fm-topic-icon">
		<a href="{path:view_thread}">
			<img src="{topic_marker}" width="22" height="22" border="0" alt="{topic_title}" title="{topic_title}" />
		</a>
	</td>
	<td class="fm-heading">
		<h4><strong><a href="{path:view_thread}" title="{forum_name}">
			{topic_title}
		</a></strong></h4>
	</td>
	<td class="fm-views">
		{total_views}
	</td>
	<td class="fm-info">
		{lang:posted_on} {post_date format="%m-%d-%Y %h:%i %A"}
	</td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Announcement - View Post
//-------------------------------------

function announcement()
{
return <<< EOF

<script type="text/javascript">
<!--

function showimage(loc, width, height)
{
	window.open(loc,'Image','width='+width+',height='+height+',screenX=0,screenY=0,top=0,left=0,toolbar=0,status=0,scrollbars=0,location=0,menubar=1,resizable=1');
	return false;
}

//-->
</script>

<div class="fm-header-wrapper">
	<h3 class="fm-topic-title">{topic_title}</h3>
</div>

<div class="forum-topic-content fm-thread-row">
	<div class="fm-post-meta">
		<p>Posted {post_date format="%d %F %Y %h:%i %A"} 
		{if can_view_ip}<em class="fm-poster-ip">{lang:ip_address} {ip_address}</em>{/if}
		</p>
	</div>
	<div class="fm-author-info-wrapper">
		<div class="inset">
		
			<div class="{rank_class}">
				<a href="{path:member_profile}" class="fm-post-author-link">{author}</a>
				<span class="fm-post-author-rank">{rank_title}</span>
			</div>
			{if avatar}
			<div class="fm-avatar-wrapper">
				<img src="{path:avatars}" width="{avatar_width}" height="{avatar_height}" border="0" alt="{lang:avatar}" />
			</div>
			{/if}
			
			{if rank_stars}<div class="fm-rank-wrapper"><img src="{path:image_url}rank.gif" width="9" height="10" border="0" alt="{lang:rank}" class="rankImage" /></div>{/if}
			
			<p class="fm-author-posts-stats">
				<strong>{lang:total_posts}</strong> {total_posts}
			</p>
			<p class="fm-author-join-stats">
				<strong>{lang:joined}</strong> {join_date format="%Y-%m-%d"}
			</p>
			<p class="fm-author-send-private-message">
				<a href="{path:send_private_message}">{lang:pm_short}</a>
			</p>
			
		</div>
	</div>

	<div class="fm-post">
		<div class="inset">

			<div class="fm-post-utilities">
				{if can_edit}
					<a href="{path:edit_post}" class="fm-button fm-edit-post">{lang:edit}</a>
				{/if}
				{if can_delete}
					<a href="{path:delete_post}" class="fm-button fm-delete-post">{lang:delete}</a>
				{/if}
				{if is_topic}
					{if can_move}
						<a href="{path:move_topic}" class="fm-button fm-move-post">{lang:move}</a>
					{/if}
				{/if}
			</div>
		
			{body}
			
			{if edited}<em>[ {lang:edited}: {edit_date format="%d %F %Y %h:%i %A"} {lang:by} <a href="{path:edit_author_profile}">{edit_author}</a> ]</em>{/if}

			{if attachments}
			<div class="fm-post-attachments">
				{include:post_attachments}
			</div>
			{/if}
			
			{if signature}
			<div class="fm-post-signature">
				{include:signature}
			</div>
			{/if}

		</div>
	</div>

</div> <!-- /.fm-thread-row -->
EOF;
}
/* END */




}
// END CLASS
?>