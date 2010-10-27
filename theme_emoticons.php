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
 File: theme_emoticons.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_emoticons {

//-------------------------------------
//  Emoticon Page
//-------------------------------------

function emoticon_page()
{
return <<< EOF
{include:html_header}
<div id="content">
<div  class="tableBorderTopLeft">
<table cellpadding="3" cellspacing="0" border="0" style="width:100%;" class="tableBG">
{include:smileys}
</table>
</div>
</div>
</body>
</html>
EOF;
}
/* END */




}
// END CLASS
?>