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
 File: theme_category.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_category {

//-------------------------------------
//  Category Page
//-------------------------------------

function category_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:main_forum_list}
{include:html_footer}
EOF;
}
/* END */




}
// END CLASS
?>