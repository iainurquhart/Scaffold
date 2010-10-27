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
 File: theme_error.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_user_banning {

//-------------------------------------
//  User Banning Page
//-------------------------------------

function user_banning_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:user_banning_element}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  User Banning Warning
//-------------------------------------

function user_banning_warning()
{
return <<< EOF
{form_declaration}

	<div class="fm-header-wrapper">
		<h3>{lang:member_banning_form}</h3>
	</div>
	
	
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th scope="row">{lang:member_name}</th>
		<td class="fm-content-wrapper">{name} {if user_is_banned}- {lang:member_is_banned}{/if}</td>
	</tr>
	{if user_not_banned}
	<tr>
		<th scope="row">{lang:suspend_account}</th>
		<td class="fm-content-wrapper"><input type='radio' name='action' value='suspend' checked="checked" /></td>
	</tr>
	{/if}
	{if user_is_banned}
	<tr>
		<th scope="row">{lang:reinstate_account}</th>
		<td class="fm-content-wrapper"><input type='radio' name='action' value='reinstate' checked="checked" /></td>
	</tr>
	{/if}
	<tr>
		<th scope="row">{lang:delete_account}</th>
		<td class="fm-content-wrapper">
			<input type='radio' name='action' value='delete' /><br />
			{lang:ban_warning}
		</td>
	</tr>
	<tr>
		<th scope="row">{lang:ban_ip_addresses}</th>
		<td class="fm-content-wrapper"><input type='checkbox' name='ban_ip' value='y' /></td>
	</tr>
</table>

	<p class="fm-submit">
		<input type="submit" name="submit" class="submit" value="{lang:submit}" />
	</p>

</form>
EOF;
}
/* END */


//-------------------------------------
//  User Banning Report
//-------------------------------------

function user_banning_report()
{
return <<< EOF
<div class="fm-header-wrapper">
	<h3>{lang:member_banning}</h3>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<th scope="row">{lang:member_banned}</th>
		<td class="fm-content-wrapper">{name}</td>
	</tr>
	{if banned_ips}
	<tr>
		<th scope="row">{lang:ip_addresses_banned}</th>
		<td class="fm-content-wrapper">{banned_ips}</td>
	</tr>
	{/if}
</table>
<p class="fm-submit">
	<a href="{path:forum_home}">{forum_name}</a>
</p>
EOF;
}
/* END */



}
// END CLASS
?>