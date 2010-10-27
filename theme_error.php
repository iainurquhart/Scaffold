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

class theme_error {

//-------------------------------------
//  Error Page
//-------------------------------------

function error_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{if logged_in}{include:error_message}{/if}
{if logged_out}{include:login_form}{/if}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Error Message
//-------------------------------------

function error_message()
{
return <<< EOF

<div class="fm-error-message fm-message">
	<h3>{lang:error}</h3>
	{lang:general_error}
	{error_message}
</div>

EOF;
}
/* END */




}
// END CLASS
?>