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
 File: theme_breadcrumb.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_breadcrumb {

//-------------------------------------
//  Breadcrumb
//-------------------------------------

function breadcrumb()
{
return <<< EOF
{breadcrumb_links}
EOF;
}
/* END */




//-------------------------------------
//  Breadcrumb Trail
//-------------------------------------

function breadcrumb_trail()
{
return <<< EOF
<a href="{crumb_link}">{crumb_title}</a> ::&nbsp;
EOF;
}
/* END */




//-------------------------------------
//  Breadcrumb Current Page
//-------------------------------------

function breadcrumb_current_page()
{
return <<< EOF
{crumb_title}
EOF;
}
/* END */




}
// END CLASS
?>