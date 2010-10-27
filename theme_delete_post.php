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
 File: theme_delete_post.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_delete_post {

//-------------------------------------
//  Delete Post Page
//-------------------------------------

function delete_post_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:delete_post_warning}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Delete Post Warning
//-------------------------------------

function delete_post_warning()
{
return <<< EOF
{form_declaration:forum:delete_post}

	<div class="fm-header-wrapper">
		<h3>{lang:delete_confirm}</h3>
	</div>

<table class="fm-data-grid fm-delete-warning" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td class="fm-post-wrapper">
			<strong>{if is_topic}{lang:thread_delete_warning}{/if}
			{if is_reply}{lang:post_delete_warning}{/if}</strong>
			
			<br />
			{if is_topic}{lang:thread_delete_info} {/if}
			{lang:action_can_not_be_undone}
		</td>
	</tr>
</table>

	<p class="fm-submit">
		<input type="submit" name="submit" class="submit" value="{lang:delete}" />
	</p>
	
<div class="fm-message">
	{if is_topic}<h3>{title}</h3>{/if}
	{body}
</div>

</form>
EOF;
}
/* END */




}
// END CLASS
?>