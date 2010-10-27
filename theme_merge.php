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

class theme_merge {

//-------------------------------------
//  Merge Page
//-------------------------------------

function merge_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:merge_interface}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Merge Interface
//-------------------------------------

function merge_interface()
{
return <<< EOF
{form_declaration:forum:do_merge}

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:100%;" align="center">
<tr>
<td class="tableHeadingBG"><div class="tableHeading">{lang:merge_threads}</div></td>

</tr><tr>

<td class="tableRowHeadingBold">{lang:thread_title} &nbsp;{title}</td>

</tr><tr>


<td class="tableCellTwo">
<div class="itempadbig">
<div class="defaultBold">{lang:merge_info}</div>
</div>
</td>

</tr><tr>

<td class="tableCellTwo">
<div class="itempad"><div class="defaultBold">{lang:merge_url}</div></div>
<div class="itempad">{lang:merge_url_info}</div>
<div class="itempadbig"><input type="text" class="input" name="url" value="" style="width:550px" size="50" maxlength="120" /></div>
</td>

</tr><tr>

<td class="tableCellOne">
<div class="itempad"><div class="defaultBold">{lang:new_title}</div></div>
<div class="itempad">{lang:you_may_rename}</div>
<div class="itempadbig"><input type="text" class="input" name="title" value="{title}" style="width:550px" size="50" maxlength="120" /></div>
</td>

</tr><tr>

<td class="tableCellTwo">
<div class="itempad"><input type="checkbox" class="checkbox" name="notify" value="1" checked="checked" /> {lang:notify_thread_owner}</div>
</td>

</tr><tr>

<td class="tableCellTwo">
<div class="itempadbig"><input type="submit" name="submit" class="submit" value="{lang:merge_threads}" /></div>
</td>

</tr>
</table>

</form>
EOF;
}
/* END */




}
// END CLASS
?>