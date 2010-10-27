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
 File: theme_submission.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_submission {

//-------------------------------------
//  Post Submission Page
//-------------------------------------

function submission_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:submission_errors}
{include:preview_post}
{include:submission_form}
{include:thread_review}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Post Preview
//-------------------------------------

function preview_post()
{
return <<< EOF
<div class="fm-preview-wrapper">

	<div class="fm-header-wrapper">
		<h3>Preview</h3>
	</div>
	
	<div class="fm-message">
		<h3>{post_title}</h3>
		{post_body}
	</div>
	
</div>
EOF;
}
/* END */




//-------------------------------------
//  Submission Error Message
//-------------------------------------

function submission_errors()
{
return <<< EOF
<div class="fm-header-wrapper fm-error-message">
	<h3>{lang:error_message}</h3>
</div>

<div class="fm-error-message fm-message">
	<p>{message}</p>
</div>

EOF;
}
/* END */




//-------------------------------------
//  Post Submission Form
//-------------------------------------

function submission_form()
{
return <<< EOF


<script type="text/javascript">
<!--

function textcounter()
{
	var max		= {maxchars};
	var base	= document.forms.submit_post;
	var cur		= base.body.value.length;

	if (cur > max)
	{
		base.body.value = base.body.value.substring(0, max);
	} 
	else
	{
		base.charsleft.value = max - cur
	}
}


function setannouncement()
{
	if (document.submit_post.announcement.checked == false)
		return false;
	
	document.submit_post.announcement.checked = true;
	document.submit_post.status.checked = false;
	document.submit_post.sticky.checked = false;
	document.submit_post.ann_type[0].disabled = false;	
	document.submit_post.ann_type[1].disabled = false;	
}
function clearannouncement()
{
	document.submit_post.announcement.checked = false;
	document.submit_post.ann_type[0].disabled = true;	
	document.submit_post.ann_type[1].disabled = true;	
}

var rownum = {poll_rownum};
function addPollField()
{
	if (rownum == 12)
	{
		return false;
	}
	rownum++
	var marker = document.getElementById("rowpos");
	var newrow = {poll_answer_field};
	
	newrow =  newrow + '<span id="rowpos"></span>';

	if (typeof(marker.outerHTML) == 'undefined')
	{
		var range = document.createRange();
		range.setStartBefore(marker);
		marker.parentNode.replaceChild(range.createContextualFragment(newrow), marker);
	}
	else
	{
		marker.outerHTML = newrow;
	}
}

//-->
</script>





{form_declaration:forum:submit_post}

<div class="fm-header-wrapper">
	<h3>{lang:submission_heading}: {if is_topic}{forum_name}{/if} {if is_post}{topic_title}{/if}</h3>
</div>
<div class="fm-new-topic-wrapper">
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		{if is_topic}
		<tr>
			<th scope="row">{lang:title}</th>
			<td class="fm-content-wrapper">
				<input type="text" class="input" name="title" size="90" value="{title}" onkeydown="var evt = arguments[0] || window.event; return (evt.keyCode != 13);" />
			</td>
		</tr>
		{/if}
		<tr>
			<th scope="row">{lang:font_formatting}</th>
			<td class="fm-content-wrapper fm-formatting-buttons">
			
				<select name="size" class="select" onchange="selectinsert(this, 'size')" >
					<option value="0">{lang:size}</option>
					<option value="1">{lang:small}</option>
					<option value="3">{lang:medium}</option>
					<option value="4">{lang:large}</option>
					<option value="5">{lang:very_large}</option>
					<option value="6">{lang:largest}</option>
				</select>
				
				<select name="color" class="select" onchange="selectinsert(this, 'color')">
					<option value="0">{lang:color}</option>
					<option value="blue">{lang:blue}</option>
					<option value="green">{lang:green}</option>
					<option value="red">{lang:red}</option>
					<option value="purple">{lang:purple}</option>
					<option value="orange">{lang:orange}</option>
					<option value="yellow">{lang:yellow}</option>
					<option value="brown">{lang:brown}</option>
					<option value="pink">{lang:pink}</option>
					<option value="gray">{lang:grey}</option>
				</select>
				
				{include:html_formatting_buttons}
				
			</td>
		</tr>
		<tr>
			<th scope="row">{lang:body}</th>
			<td class="fm-content-wrapper">
				<textarea name='body' id="body" class='textarea' rows='18' cols='90' onkeydown="textcounter();" onkeyup="textcounter();" >{body}</textarea>
			</td>
		</tr>
		<tr>
			<th scope="row">{lang:max_characters}</th>
			<td class="fm-content-wrapper">
				<input type="text" class="input" name="charsleft" size="5" maxlength="5" value="{total_characters}" readonly="readonly"/>
			</td>
		</tr>
		{if can_post_poll}
		<tr>
			<th scope="row">{lang:poll}</th>
			<td class="fm-content-wrapper">
			
				<a href="javascript:void(0);" id="fm-toggle-poll">{lang:post_poll}</a>
				<div id="fm-poll-questions">
				<b>{lang:poll_question}</b>
				<input type="text" class="input" name="poll_question" size="90" value="{poll_question}" onkeydown="var evt = arguments[0] || window.event; return (evt.keyCode != 13);" />
				
				{lang:poll_answers}
				
				{lang:poll_answer_instructions}
				{include:poll_answers}
				<span id="rowpos"></span>
				<a href="javascript:addPollField(); void(0);">{lang:add_another_row}</a>
				{lang:poll_delete_instructions}
				</div>
			
			</td>
		</tr>
		{/if}
		<tr>
			<th scope="row">
				{lang:options}
			</th>
			<td class="fm-content-wrapper">
				<input type="checkbox" class="checkbox" name="notify" value="y" {notify_checked} /> {lang:notify_of_repsonses}<br />
				
			</td>
		</tr>
		{if can_announce}
		<tr>
			<th scope="row">
				
			</th>
			<td class="fm-content-wrapper">
				
				<input type="checkbox" class="checkbox" name="announcement" value="y" {announce_checked} onclick="setannouncement();" /> {lang:make_post_announcement}<br />
				
				
				&nbsp; &nbsp; &nbsp; <input type="radio" name="ann_type" value="t" {type_one_checked} /> {lang:in_this_forum}<br />
				&nbsp; &nbsp; &nbsp; <input type="radio" name="ann_type" value="a" {type_all_checked} /> {lang:in_all_forums}
				
				
			</td>
		</tr>
		{/if}
		{if is_moderator}
		<tr>
			<th scope="row">
				
			</th>
			<td class="fm-content-wrapper">
				<input type="checkbox" class="checkbox" name="sticky" value="y" {sticky_checked} onclick="clearannouncement();" /> {lang:make_post_sticky}
			</td>
		</tr>
		{/if}
		{if can_change_status}
		<tr>
			<th scope="row">	
			</th>
			<td class="fm-content-wrapper">
				<input type="checkbox" class="checkbox" name="status" value="c" {status_checked} onclick="clearannouncement();" /> {lang:close_post}
			</td>
		</tr>
		{/if}
		{if can_upload}
		<tr>
			<th scope="row">
				{lang:attachments}<br />
				{lang:max_attach_size}
			</th>
			<td class="fm-content-wrapper">
				<input type="file" name="userfile" size="20" class="input" />
				<span class="fm-field-notes">
					{lang:click_preview_to_attach}
				</span>
			</td>
		</tr>
		{/if}
		{if attachments_exist}
		<tr>
			<th scope="row">
				{lang:current_attachments}
			</th>
			<td class="fm-content-wrapper">
				{include:form_attachments}
			</td>
		</tr>
		{/if}
	</table>
</div>
	<p class="fm-submit">
		<input type="submit" name="preview" class="submit" value="{lang:preview_post}" /> 
		<input type="submit" name="submit" class="submit" value="{lang:submit_post}" />
	</p>

</form>

EOF;
}
/* END */




//-------------------------------------
//  Submission Form Attachments
//-------------------------------------

function form_attachments()
{
return <<< EOF
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<th>{lang:file_name}</th>
		<th>{lang:file_size}</th>
		<th>{lang:remove}</th>
	</tr>
	{include:form_attachment_rows}
	<tr>
		<td class="fm-content-wrapper" colspan="1">{lang:total_attach_allowed}</td>
		<td class="fm-content-wrapper" colspan="2">{lang:remaining_space}</td>
	</tr>
</table>

EOF;
}
/* END */




//-------------------------------------
//  Attachment Rows
//-------------------------------------

function form_attachment_rows()
{
return <<< EOF
<tr>
	<td>{attachment_name}</td>
	<td>{attachment_size}</td>
	<td><input type="submit" name="remove[{attachment_id}]" class="submit" value="{lang:remove}" /></td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Poll Answers
//-------------------------------------

function poll_answer_field()
{
return <<< EOF
<div class="itempad">{answer_number}. <input type="text" class="input" name="option[{n}]" style="width:50%" size="60" value="{poll_answer}" maxlength="120" onkeydown="var evt = arguments[0] || window.event; return (evt.keyCode != 13);" /> {include:poll_vote_count_field}</div>
EOF;
}
/* END */

//-------------------------------------
//  Poll Vote count field
//-------------------------------------

function poll_vote_count_field()
{
return <<< EOF
<input type="text" class="input" name="votes[{n}]" style="width:40px" size="5" value="{vote_total}" maxlength="6" /> {lang:votes}
EOF;
}
/* END */



//-------------------------------------
//  Fast Reply Form
//-------------------------------------

function fast_reply_form()
{
return <<< EOF


{form_declaration:forum:submit_post}

	<div class="fm-header-wrapper" id="fm-fast-reply">
		<h3>{lang:fast_reply}</h3>
	</div>

	<div class="fm-message">
		<p><textarea name='body' class='textarea' rows='12' cols='90'></textarea></p>
	

	<p class="fm-submit">
		<input type="submit" name="submit" class="submit" value="{lang:submit_post}" />
		
		<input type="checkbox" class="checkbox" name="notify" value="y" {notify_checked} />
		{lang:notify_of_repsonses}
	</p>
	</div>
</form>


EOF;
}
/* END */



}
// END CLASS
?>