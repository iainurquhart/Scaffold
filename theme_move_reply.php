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
 File: theme_move_reply.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_move_reply {

//-------------------------------------
//  Move Topic Page
//-------------------------------------

function move_reply_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:move_reply_confirmation}
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Move Topic Confirmation
//-------------------------------------

function move_reply_confirmation()
{
return <<< EOF


{form_declaration:forum:move_reply}

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:700px;" align="center">
<tr>
<td class="tableHeadingBG"><div class="tableHeading">{lang:move_reply}</div></td>

</tr><tr>

<td class="tableCellTwo">
<div class="itempad"><div class="defaultBold">{lang:move_reply_url}</div></div>
<div class="itempad">{lang:move_reply_url_info}</div>
<div class="itempadbig"><input type="text" class="input" name="url" value="" style="width:550px" size="50" maxlength="120" /></div>
</td>

</tr><tr>

<td class="tableCellTwo">
<div class="itempad"><input type="checkbox" class="checkbox" name="notify" value="1" checked="checked" /> {lang:notify_reply_owner}</div>
</td>

</tr><tr>

<td class="tableCellOne"><div class="itempadbig"><input type="submit" name="submit" class="submit" value="{lang:move}" /></div></td>

</tr>
</table>

</form>

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:700px;" align="center">
<tr>
<td class="tableRowHeadingBold">{lang:reply_made_by} {author} {lang:posted_on} {post_date format="%d %F %Y %h:%i %A"}</td>

</tr><tr>

<td class="tableCellOne">
<div class="itempad">{body}</div>
</td>

</tr>

</table>

EOF;
}
/* END */




}
// END CLASS
?>