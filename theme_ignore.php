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
 File: theme_ignore.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_ignore {

/* -------------------------------------
/*  Ignore Member Page
/* -------------------------------------*/

function ignore_member_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:member_ignore_element}
{include:html_footer}
EOF;
}
/* END */



/* -------------------------------------
/*  Ignore Member Confirmation
/* -------------------------------------*/

function ignore_member_confirmation()
{
return <<< EOF
{form_declaration}
<div class="fm-header-wrapper">
	<h3>{lang:ignore_member_confirmation}</h3>
</div>

<div class="fm-message">
	{if member_is_ignored}
		<p class="fm-notice">{lang:already_ignored}</p>
	{/if}

	{if member_not_ignored}
		<p>
			<label for="fm-ignore-member">
				{lang:ignore_member}: <strong>{name}</strong>
			</label>
			<input type='radio' name='action' value='ignore' checked="checked" id="fm-ignore-member" />
		</p>
	{/if}
	{if member_is_ignored}
		<p>
			<label for="fm-unignore-member">
				{lang:unignore_member}: <strong>{name}</strong>
			</label>
			<input type='radio' name='action' value='unignore' checked="checked" id="fm-unignore-member" />
		</p>
	{/if}
	<p class="fm-submit">
		<input type="submit" name="submit" class="submit" value="{lang:submit}" />
	</p>
</div>
</form>
EOF;
}
/* END */


}
// END CLASS
?>