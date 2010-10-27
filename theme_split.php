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
 File: theme_split.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_split {

//-------------------------------------
//  Move Topic Page
//-------------------------------------

function split_page()
{
return <<< EOF
{include:html_header}
{include:top_bar}
{include:page_header}
{include:page_subheader}
<div id="content">
{include:split_data}
</div>
{include:html_footer}
EOF;
}
/* END */




//-------------------------------------
//  Split
//-------------------------------------

function split_data()
{
return <<< EOF


{form_declaration:forum:do_split}

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:100%;" align="center">
<tr>
<td class="tableHeadingBG"><div class="tableHeading">{lang:split_thread}</div></td>

</tr><tr>

<td class="tableRowHeadingBold">{lang:split_info}</td>

</tr><tr>

<td class="tableCellOne"><div class="itempad">{lang:title}</div>
<div class="itempadbig"><input type="text" class="input" name="title" value="{title}" style="width:500px" size="50" maxlength="120" /></div>
</td>
</tr>

{if forums_exist}
	<tr>
	<td class="tableCellOne"><div class="itempadbig">{lang:forum} 
	<select name="forum_id" class="select">
	{split_select_options}
	</select>
	</div></td>
	</tr>
{/if}

<tr>

<td class="tableCellOne">
<div class="itempad"><input type="checkbox" class="checkbox" name="notify" value="1" checked="checked" /> {lang:notify_thread_owner}</div>
</td>

</tr><tr>

<td class="tableCellOne"><div class="itempadbig">
{if previous_page}
<input type="submit" name="previous_page" class="submit" value="&lsaquo;&lsaquo; {lang:previous}" />
{/if}
&nbsp;
<input type="submit" name="submit" class="submit" value="{lang:split_thread}" />
&nbsp;
{if next_page}
<input type="submit" name="next_page" class="submit" value="{lang:next} &rsaquo;&rsaquo;" />
{/if}
</div>
</td>

</tr>


</table>

<table cellpadding="0" cellspacing="0" border="0" style="width:100%;" >
<tr>
<td class="tableHeadingBG" colspan="2"><div class="tableHeading">{topic_title}</div></td>
</tr>

{include:split_thread_rows}

</table>

</form>


EOF;
}
/* END */



//-------------------------------------
//  Thread Rows
//-------------------------------------

function split_thread_rows()
{
return <<< EOF


<tr>
 <td>

 <table class="threadBorder" cellpadding="0" cellspacing="0" border="0" style="width:100%;">
  <tr>
   <td class="tableRowHeadingBold" style="width:130px;">
   
   {if is_topic}
   &nbsp;
   {/if}
   
   {if is_post}
   <input type="checkbox" name="post_id[]" value="{post_id}" {checked} /> {lang:split}
   {/if}
   
   </td>
   <td class="tableRowHeading" colspan="2">{lang:posted_on} {post_date format="%d %F %Y %h:%i %A"}</td>
  </tr>
<tr>
 <td class="tableCellOne" style="width:130px;" valign="top"><div class="largeLinks"><a href="{path:member_profile}">{author}</a></div></td>
<td class="tableCellOne" valign="top" colspan="2">{body}</td>
</tr>
</table>
	

</td>
</tr>
EOF;
}
/* END */

}
// END CLASS
?>