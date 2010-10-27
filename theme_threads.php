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
 File: theme_threads.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_threads {

//-------------------------------------
//  Thread Page
//-------------------------------------

function thread_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:threads}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Threads
//-------------------------------------

function threads()
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

<div class="fm-header-wrapper{if logged_in} fm-extra-info{/if}">
	<span>
	{if can_post}
		<a href="{path:post_reply}" class="fm-button fm-post-reply">{lang:post_reply}</a>
	{/if}
	{if can_post_topics}
		<a href="{path:new_topic}" class="fm-button fm-new-topic">{lang:post_new_topic}</a>
	{/if}
	</span>
	<h3 class="fm-topic-title">{topic_title} </h3>
	{if logged_in}<p class="fm-thread-unsubscribe"><a href="{path:subscribe}">{lang:subscribe}</a></p>{/if}
	
</div>

{if poll}{include:poll}{/if}

{include:thread_rows}

<div id="fastreply">
	{include:fast_reply_form}
</div>


<div class="fm-thread-footer-wrapper">
	<span>
	{if can_post}
		<a href="{path:post_reply}" class="fm-button fm-post-reply">{lang:post_reply}</a>
	{/if}
	{if can_post_topics}
		<a href="{path:new_topic}" class="fm-button fm-new-topic">{lang:post_new_topic}</a>
	{/if}
	{if can_post}
		<a href="#fm-fast-reply" class="fm-button fm-fast-reply">{lang:fast_reply}</a>
	{/if}
	</span>
	<p>{current_page} {lang:of} {total_pages} {lang:Pages} </p>
	{if paginate}
	<table class="fm-stoopid-pagination" cellspacing="0" cellpadding="0" border="0"><tr>{pagination_links}</tr></table>
	{/if}
</div>



<div class="fm-topic-pagination-wrapper">
	<ul class="fm-topic-pagination">
		{if next_topic}
			<li class="fm-next-topic"><a href="{path:next_topic_url}">{next_topic_title}</a></li>
		{/if}
		{if previous_topic}
			<li class="fm-previous-topic"><a href="{path:previous_topic_url}">{previous_topic_title}</a></li>
		{/if}
	</ul>
</div>

EOF;
}
/* END */





//-------------------------------------
//  Thread Rows
//-------------------------------------

function thread_rows()
{
return <<< EOF

<div class="forum-topic-content fm-thread-row">
	<div class="fm-post-meta">
		<p>Posted {post_date format="%d %F %Y %h:%i %A"}
			{if is_post}
				<em class="fm-thread-permalink">
					<a name="{post_id}" href="{path:post_link}" title="{lang:post_permalink}">#{post_number}</a>
				</em>
			{/if}
			{if can_view_ip}
				<em class="fm-poster-ip">{lang:ip_address} {ip_address}</em>
			{/if}	
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
			
			{if can_ban}
			<p class="fm-author-ban">
				<a href="{path:ban_member}">{lang:ban_member}</a>
			</p>
			{/if}

			{if can_report}
			<p class="fm-author-report">
				<a href="{path:report}" title="{lang:report}">{lang:report}</a>
			</p>
			{/if}
			
		</div>
	</div>

	<div class="fm-post">
		<div class="inset">

			<div class="fm-post-utilities">
			
				{if can_delete}
					<a href="{path:delete_post}" class="fm-button fm-delete-post  delete">{lang:delete}</a>
				{/if}
				
				{if is_topic}
					{if can_change_status}
						<a href="{path:change_status}" class="fm-button fm-change-status">{lang:change_status}</a>
					{/if}
					{if can_move}
						<a href="{path:move_topic}" class="fm-button fm-move-topic">{lang:move}</a>
					{/if}
					{if can_merge}
						<a href="{path:merge_topic}" class="fm-button fm-merge-topic">{lang:merge}</a>
					{/if}
					{if can_split}
						<a href="{path:split_topic}" class="fm-button fm-split-topic">{lang:split}</a>
					{/if}	
				{/if}
				
				{if is_post}
					{if can_move}
						<a href="{path:move_reply}" class="fm-button fm-move-post">{lang:move}</a>
					{/if}
				{/if}
				
				{if can_edit}
					<a href="{path:edit_post}" class="fm-button fm-edit-post">{lang:edit}</a>
				{/if}
				{if can_post}
					<a href="{path:quote_reply}" class="fm-button quote-post">{lang:quote}</a>
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

</div>
EOF;
}
/* END */




//-------------------------------------
//  Thread Review
//-------------------------------------

function thread_review()
{
return <<< EOF

<!-- @todo -->

<script type="text/javascript">
<!--
function showimage(loc, width, height)
{
	window.open(loc,'Image','width='+width+',height='+height+',screenX=0,screenY=0,top=0,left=0,toolbar=0,status=0,scrollbars=0,location=0,menubar=1,resizable=1');
	return false;
}

function showhide_topic_review()
{
	if (document.getElementById('review_on').style.display == "block")
	{
		document.getElementById('review_on').style.display = "none";
		document.getElementById('review_off').style.display = "block";				
	}
	else
	{
		document.getElementById('review_on').style.display = "block";
		document.getElementById('review_off').style.display = "none";
	}
}

function showHideRow(el)
{
	if (document.getElementById(el).style.display == "")
	{
		document.getElementById(el).style.display = "none";
	}
	else
	{
		document.getElementById(el).style.display = "";
	}	
}
//-->
</script>


<div id="review_on" style="display: block;">

	<div class="fm-message" id="reviewon" onclick="showhide_topic_review();return false;" onmouseover="navHover(this);" onmouseout="navReset(this);">
		<img src="{path:image_url}expand.gif" width="10" height="10" border="0" alt="{lang:expand}" /> 
		{lang:thread_review}
	</div>
</div>

<div id="review_off" style="display: none;">
	<div class="fm-message" id="reviewoff" onclick="showhide_topic_review();return false;" onmouseover="navHover(this);" onmouseout="navReset(this);">
		<img src="{path:image_url}collapse.gif" width="10" height="10" border="0" alt="{lang:collapse}" /> 
		{lang:thread_review}
	</div>

	<p>{lang:last_ten_posts} <a href="{path:thread_review}" target="_blank">{lang:thread_review_link}</a></p>


	{include:thread_review_rows}

</div>
EOF;
}
/* END */




//-------------------------------------
//  Thread Review Rows
//-------------------------------------

function thread_review_rows()
{
return <<< EOF

<div class="forum-topic-content fm-thread-row">
	<div class="fm-post-meta">
		<p>Posted {post_date format="%d %F %Y %h:%i %A"} 
		{if can_view_ip}<em class="fm-poster-ip">{lang:ip_address} {ip_address}</em>{/if}</p>
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
			
			{if can_ban}
			<p class="fm-author-ban">
				<a href="{path:ban_member}">{lang:ban_member}</a>
			</p>
			{/if}

			{if can_report}
			<p class="fm-author-report">
				<a href="{path:report}" title="{lang:report}">{lang:report}</a>
			</p>
			{/if}
			
		</div>
	</div>

	<div class="fm-post">
		<div class="inset">
		
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

</div>

EOF;
}
/* END */



//-------------------------------------
//  Post Attachments
//-------------------------------------

function post_attachments()
{
return <<< EOF
{if thumb_attach}
	<div class="fm-image-attachments fm-attachments fm-thumbs">
	<h4>{lang:image_attachments}</h4>
		{include:thumb_attachments}
		<p>{lang:click_for_fullsize}</p>
	</div>
{/if}
{if image_attach}
	<div class="fm-image-attachments fm-attachments">
	<h4>{lang:image_attachments}</h4>
		{include:image_attachments}
	</div>
{/if}
{if file_attach}
	<div class="fm-file-attachments fm-attachments">
	<h4>{lang:file_attachments}</h4>
	
	<ul>
		{include:file_attachments}
	</ul>
	</div>
{/if}
EOF;
}
/* END */



//-------------------------------------
//  Quoted Author
//-------------------------------------

function quoted_author()
{
return <<< EOF
<div class="quote_author">{quote_author} - {quote_date format="%d %F %Y %h:%i %A"}</div>
EOF;
}
/* END */

//-------------------------------------
//  Thumbnail Attachments
//-------------------------------------

function thumb_attachments()
{
return <<< EOF

<a href="javascript:showimage('{attach_image_url}', '{width}', '{height}');void(0);"><img src="{attach_thumb_url}" class="attachThumb" width="{thumb_width}"  height="{thumb_height}" border="0" title="{filename}" alt="{filename}" /></a>
EOF;
}
/* END */




//-------------------------------------
//  Image Attachments
//-------------------------------------

function image_attachments()
{
return <<< EOF
<div class="fm-image-attachment"><img src="{attach_image_url}" width="{width}"  height="{height}" border="0" title="{filename}" alt="{filename}" /></div>
EOF;
}
/* END */




//-------------------------------------
//  File Attachments
//-------------------------------------

function file_attachments()
{
return <<< EOF
<li>
	<a href="{attach_file_url}">{filename}</a>
	<span class="fm-file-meta">({lang:file_size} {file_size} - {lang:downloads} {hits})</span>
</li>
EOF;
}
/* END */




//-------------------------------------
//  Signature
//-------------------------------------

function signature()
{
return <<< EOF
<div class="fm-signature-wrapper">
<h4>{lang:signature}</h4>
{if signature_image}
	<img src="{path:signature_image}" class="fm-signature-image" border="0" width="{signature_image_width}" height="{signature_image_height}" alt="{lang:signature_image}" />
{/if}
<div class="fm-signature">
	{signature}
</div>

</div>
EOF;
}
/* END */




}
// END CLASS
?>