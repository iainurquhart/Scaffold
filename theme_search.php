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
 File: theme_search.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_search {

//-------------------------------------
//  Quick Search Form
//-------------------------------------

function quick_search_form()
{
return <<< EOF

<div class="fm-quick-search">
	{form_declaration}
	<input type="text" class="input" name="keywords" size="20" value="" maxlength="80" />
	<input type="submit" class="submit" value="{lang:search}" />
	<a href="{path:advanced_search}">{lang:advanced_search}</a>
	</form>
</div>

EOF;
}
/* END */


//-------------------------------------
//  Forum Search Form
//-------------------------------------

function forum_quick_search_form()
{
return <<< EOF
<div class="fm-quick-search-form">
{form_declaration}
<input type="hidden" name="forum_id" value="{forum_id}" />
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th scope="row">{lang:search_this_forum}</th>
		<td class="fm-content-wrapper" colspan="5">
		<input type="text" class="input" name="keywords" size="20" value="" maxlength="80" />
		<input type="submit" class="submit" value="{lang:search}" />
			<a class="fm-advanced-search" href="{path:advanced_search}">{lang:advanced_search}</a>
		</td>
	</tr>
</table>
</form>
</div>
EOF;
}
/* END */



//-------------------------------------
//  Advanced Search Page
//-------------------------------------

function advanced_search_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:advanced_search_form}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Advanced Search Form
//-------------------------------------

function advanced_search_form()
{
return <<< EOF


{form_declaration}
<div class="fm-header-wrapper">
	<h3>{lang:advanced_search}</h3>
</div>
<div class="fm-advanced-search-wrapper">

	<div class="fm-advanced-search-alpha">
		<p>{lang:search_by_keyword}<br />
		<input type="text" class="input" maxlength="100" size="40" name="keywords" /></p>
		
		<p><select name="search_in">
			<option value="titles">{lang:search_in_titles}</option>
			<option value="posts">{lang:search_in_posts}</option>
			<option value="all" selected="selected">{lang:search_in_title_and_posts}</option>
		</select>
		<select name="search_criteria">
			<option value="any">{lang:search_any_words}</option>
			<option value="all" selected="selected">{lang:search_all_words}</option>
			<option value="exact">{lang:exact_match}</option>
		</select></p>
		
		<p>
		{lang:search_in_forums}<br />
		<select name='forum_id[]' class='multiselect' size='12' multiple='multiple'>
			{forum_select_options}
		</select></p>
	</div>
	
	<div class="fm-advanced-search-omega">

		<p id="byMemberName">
			{lang:search_by_member_name}<br />
			<input type="text" class="input" maxlength="100" size="40" name="member_name" /><br />
			<input type="checkbox" class="checkbox" name="exact_match" value="y"  /> {lang:exact_name_match}
		</p>
		<p id="byMemberGroup">
			{lang:search_by_member_group}<br />
			<select name='member_group[]' class='multiselect' size='5' style="width:100%;" multiple='multiple'>
			{member_group_select_options}
			</select>
		</p>
		<p>{lang:search_posts_from}
			<br />
			<select name="date">
				<option value="0" selected="selected">{lang:any_date}</option>
				<option value="1" >{lang:today_and}</option>
				<option value="7" >{lang:this_week_and}</option>
				<option value="30" >{lang:one_month_ago_and}</option>
				<option value="90" >{lang:three_months_ago_and}</option>
				<option value="180" >{lang:six_months_ago_and}</option>
				<option value="365" >{lang:one_year_ago_and}</option>
			</select>
			<input type='radio' name='date_order' value='newer' class='radio' checked="checked" /> {lang:newer} <input type='radio' name='date_order' value='older' class='radio' /> {lang:older}
		</p>
		<p>{lang:sort_results_by}<br />
			<select name="order_by">
				<option value="date" >{lang:date}</option>
				<option value="title" >{lang:title}</option>
				<option value="most_posts" >{lang:most_posts}</option>
				<option value="recent_post" >{lang:recent_post}</option>
			</select>
			<input type='radio' name='sort_order' class="radio" value='desc' checked="checked" /> {lang:descending}
<input type='radio' name='sort_order' class="radio" value='asc' /> {lang:ascending}
		</p>
		
		
	</div>
</div>

	<p class="fm-submit">
		<input type='submit' value='{lang:search}' class='submit' />
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Search Results Page
//-------------------------------------

function search_results_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:search_results}
{include:html_footer}
EOF;
}
/* END */


//-------------------------------------
//  Search Thread Page
//-------------------------------------

function search_thread_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:thread_search_results}
{include:html_footer}
EOF;
}
/* END */



//-------------------------------------
//  Search Results
//-------------------------------------

function search_results()
{
return <<< EOF

<div class="fm-header-wrapper">
	<h3>{lang:search_results}: {keywords}</h3>
	<p>{lang:total_results} {total_results}</p>
</div>

<table class="fm-forum-topic">
	<tr>
		<th colspan="2" class="fm-heading">{lang:topic_heading}</th>
		<th class="fm-views">{lang:total_views_heading}</th>
		<th class="fm-replies">{lang:total_posts_heading}</th>
		<th class="fm-info">{lang:post_info_heading}</th>
	</tr>
	{include:result_rows}
</table>

<div class="fm-thread-footer-wrapper">
	<p>{current_page} {lang:of} {total_pages} {lang:Pages} <br />
	{pagination_links}</p>
</div>

EOF;
}
/* END */




//-------------------------------------
//  Search Result Rows
//-------------------------------------

function result_rows()
{
return <<< EOF
<tr class="fm-topic-row">
	<td class="fm-topic-icon">
		<a href="{path:view_thread}">
			<img src="{topic_marker}" width="24" height="18" border="0" alt="{forum_name}" title="{forum_name}" />
		</a>
	</td>
	<td class="fm-heading">
		{if reply_results == 0}
			<h4><strong>{topic_type}
			<a href="{path:view_thread}" title="{topic_title}" >{topic_title}</a>
			</strong></h4>
		{if:elseif reply_results < 6}
			<h4><strong>{topic_type} 
				<a href="{path:view_thread}" title="{topic_title}" >{topic_title}</a>
			</strong></h4>
			<p>{lang:found_in} {include:reply_results}</p>
		{if:else}
			<h4><strong>{topic_type} 
				<a href="{path:view_thread}" title="{topic_title}" >{topic_title}
			</strong></h4>
			<p>{lang:found_in_many} - <a href="{path:search_thread}">{lang:search_thread}</a></p>
		{/if}
		{if pagelinks}( {pagelinks} ){/if}
	</td>
	<td class="fm-total-topics">{total_views}</td>
	<td class="fm-replies">{total_posts}</td>
	<td class="fm-info">
		{lang:posted_on} {last_reply format="%m-%d-%Y %h:%i %A"}<br />
		{lang:posted_by} <a href="{path:reply_member_profile}">{reply_author}</a><br />
		{lang:forum} <a href="{path:viewforum}" title="{forum_name}">{forum_name}</a>
	</td>
</tr>

EOF;
}
/* END */


//-------------------------------------
//  Reply Results
//-------------------------------------

function reply_results()
{
return <<< EOF
<li>
	<a href="{path:viewreply}" class="fm-reply-snippet">{snippet}</a> 
	{lang:by} <a href="{path:member_profile}" class="fm-reply-author">{author}</a>
</li>
EOF;
}
/* END */



//-------------------------------------
//  Search Results
//-------------------------------------

function thread_search_results()
{
return <<< EOF


<table cellpadding="3" cellspacing="0" border="0" style="width:98%;" >
<tr>
<td valign="middle"><div class="itempadbig"><div class="defaultBold">{lang:keywords} {keywords}</div></div>
</td>
<td align="right"><div class="defaultBold">{lang:total_results} {total_results}</div>
</td>
</tr>
</table>


<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:100%;" >
<tr>
<td class="tableHeadingBG" colspan="5"><div class="tableHeading">{lang:search_results}</div></td>
</tr><tr>
<td class="tableRowHeadingBold" colspan="2" style="width:62%;">{lang:replies_in_topic} <em>{topic_title}</em></td>
<td class="tableRowHeadingBold" style="width:38%;">{lang:reply_info_heading}</td>
</tr>
{include:thread_result_rows}
</table>


<table cellpadding="0" cellspacing="0" border="0" >
<tr>
<td class="itempadbig" valign="bottom">
{if paginate}
	<table cellpadding="0" cellspacing="0" border="0" class="paginateBorder">
	<tr>
	<td><div class="paginateStat">{current_page} {lang:of} {total_pages}</div></td>
	{pagination_links}
	</tr>
	</table>
{/if}
</td>
</tr>
</table>

EOF;
}
/* END */



//-------------------------------------
//  Thread Result Rows
//-------------------------------------

function thread_result_rows()
{
	return <<< EOF
<tr>
<td class="tableCellTwo" style="width:4%;" align="center"><a href="{path:view_thread}"><img src="{topic_marker}" width="24" height="18" border="0" alt="{topic_title}" title="{topic_title}" /></a></td>
<td class="tableCellOne" style="width:62%;">
<div class="topicTitle">
	<a href="{path:viewreply}" title="{lang:view_reply}" >{snippet}&hellip;</a>
	<div class="forumLightLinks">{lang:posted_by} <a href="{path:member_profile}">{author}</a></div>
</div>
</td>
<td class="tableCellOne" style="width:38%;">
<div class="tablePostInfo">
	{lang:posted_on} {post_date format="%m-%d-%Y %h:%i %A"}
</div>
</td>
</tr>
EOF;
}
/* END */



//-------------------------------------
//  No Search Result Message
//-------------------------------------

function no_search_result()
{
return <<< EOF
<tr>
	<td colspan="5" class="fm-no-search-results">{lang:no_topics}</td>
</tr>
EOF;
}
/* END */




}
// END CLASS
?>