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
 File: theme_login.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_login {

//-------------------------------------
//  Login Required Page
//-------------------------------------

function login_required_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:login_form}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Login Form
//-------------------------------------

function login_form()
{
return <<< EOF
{form_declaration}
<div class="fm-login-wrapper">
	<div class="fm-header-wrapper">
		<h3>{lang:login_required}</h3>
		<p>{lang:must_be_logged_in}</p>
	</div>
	<!-- @lang -->
	<div class="fm-header-wrapper fm-register-prompt">
		<p>Don't have an account? <a href="{path:register}" class="fm-register">Register</a></p>
	</div>
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<th><label for="fm-username">{lang:username}</label></th>
			<td class="fm-content-wrapper">
				<input type="text" class="input" id="fm-username" name="username" size="20" value="" maxlength="50" />
			</td>
		</tr>
		<tr>
			<th><label for="fm-password">{lang:password}</label></th>
			<td class="fm-content-wrapper">
				<input type="password" id="fm-password" class="input" name="password" size="20" value="" maxlength="32" />
			</td>
		</tr>
		<tr>
			<th>{lang:options}</th>
			<td class="fm-content-wrapper">
				<input type="checkbox" class="checkbox" id="fm-auto-login" name="auto_login" value="1" checked="checked" />
				<label for="fm-auto-login">{lang:auto_login}</label>
				<br />
				<input type="checkbox"  id="fm-show-name" class="checkbox" name="anon" value="1" checked="checked" />
				<label for="fm-auto-login">{lang:show_name}</label>
			</td>
		</tr>
	</table>
	<p class="fm-submit">
		<input type="submit" class="submit" value="{lang:submit}" /> <a href="{path:forgot}" class="fm-pwd-forgot">{lang:forgot_password}</a>
	</p>
</div>
</form>
EOF;
}
/* END */


//-------------------------------------
//  Login Form - Mini Version
//-------------------------------------

function login_form_mini()
{
return <<< EOF
<div class="fm-header-wrapper fm-welcome-msg">
	<p>Welcome guest, please <a href="{path:login}" id="fm-toggle-login">{lang:login}</a> or <a href="{path:register}">{lang:register}</a></p>


<div id="fm-toggle-login-wrapper">
{form_declaration:member:member_login}
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row fm-quick-login">
	<tr>
		<th scope="row">
			<label for="fm-quick-username">{lang:username}</label>
		</th>
		<td class="fm-content-wrapper">
			<input type="text" id="fm-quick-username" class="input" name="username" size="15" value="" />
		</td>
		<th scope="row">
			<label for="fm-quick-pwd">{lang:password}</label>
		</th>
		<td class="fm-content-wrapper">
			<input type="password" id="fm-quick-pwd" class="input" name="password" size="15" />
		</td>
		<td class="fm-content-wrapper">
			<input type="checkbox" id="fm-quick-remember" class="checkbox" name="auto_login" value="1" checked="checked" />
			<label for="fm-quick-remember">{lang:remember_me}</label>
		</td>
		<td class="fm-content-wrapper">
			<input type="submit" class="submit" value="{lang:login}" /> &nbsp; &nbsp; <a href="{path:forgot}">{lang:forgot_your_password}</a>	
		</td>
		
	</tr>
</table>
</form>
</div>
</div>

EOF;
}
/* END */




}
// END CLASS
?>