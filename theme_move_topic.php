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
 File: theme_move_topic.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_move_topic {

//-------------------------------------
//  Move Topic Page
//-------------------------------------

function move_topic_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:move_topic_confirmation}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Move Topic Confirmation
//-------------------------------------

function move_topic_confirmation()
{
return <<< EOF

{form_declaration:forum:move_topic}

<div class="fm-header-wrapper">
	<h3>{lang:move_topic}</h3>
	<p>{lang:choose_destination_forum}</p>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<td class="fm-content-wrapper">
			<p>
			<span class="fm-field-notes">{lang:you_may_rename}</span>
			<input type="text" class="input" name="title" value="{title}" style="width:100%" size="50" maxlength="120" />
			<br /><br />
			<select name="forum_id" class="select">
				{move_select_options}
			</select>
			</p>
		</td>
	</tr>
	<tr>
		<td class="fm-content-wrapper">
		<input type="checkbox" class="checkbox" name="redirect" value="1" checked="checked" /> {lang:retain_move_link}<br />
		<input type="checkbox" class="checkbox" name="notify" value="1" checked="checked" /> {lang:notify_thread_owner}
		</td>
	</tr>
</table>

<p class="fm-submit">
	<input type="submit" name="submit" class="submit" value="{lang:move}" />
</p>

EOF;
}
/* END */




}
// END CLASS
?>