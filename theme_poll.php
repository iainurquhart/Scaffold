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
 File: theme_poll.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_poll {



//-------------------------------------
//  Poll Questions
//-------------------------------------

function poll_questions()
{
return <<< EOF
<div class="fm-poll-wrapper fm-poll-ask">
<div class="fm-inset">
{form_declaration}	
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<th colspan="2"><strong>{lang:poll}:</strong> {poll_question}</th>
	</tr>
	{include:poll_question_rows}
	<tr>
		<td></td>
		<td class="fm-content-wrapper"><input type="submit" class="submit" value="{lang:cast_vote}" name="cast_vote" /></td>
	</tr>
	</table>
	
	
	<!-- {lang:voter_message} -->
</form>
</div>
</div>

EOF;
}
/* END */


//-------------------------------------
//  Poll Questions Rows
//-------------------------------------

function poll_question_rows()
{
return <<< EOF
<tr>
	<td class="fm-content-wrapper fm-poll-choice"><input type='radio' name='vote' value='{value}' {checked} /></td>
	<td class="fm-content-wrapper">{poll_choice}</td>
</tr>
EOF;
}
/* END */



//-------------------------------------
//  Poll Answers
//-------------------------------------

function poll_answers()
{
return <<< EOF
<div class="fm-poll-wrapper">
<div class="fm-inset">
	
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<th colspan="2"><strong>{lang:poll}:</strong> {poll_question}<br />
		<span>{lang:total_votes} {total_votes}</span></th>
	</tr>
	{include:poll_answer_rows}
	</table>
	<!-- {lang:voter_message} -->
	
</div>

</div>
EOF;
}
/* END */


//-------------------------------------
//  Poll Answer Rows
//-------------------------------------

function poll_answer_rows()
{
return <<< EOF
<tr>
	<td class="fm-content-wrapper fm-poll-choice">{poll_choice}</td>
	<td class="fm-content-wrapper fm-poll-graph-wrapper"><div class="fm-poll-graph"><span>{votes}</span>{vote_graph}</div></td>
</tr>
EOF;
}

//-------------------------------------
//  Poll Graph Left
//-------------------------------------

function poll_graph_left()
{
return <<< EOF
<img src="{path:image_url}fm_1997_style_transparent_farking_gif.gif" width="3" height="10" border="0" alt="" />
EOF;
}

//-------------------------------------
//  Poll Graph Left
//-------------------------------------

function poll_graph_middle()
{
return <<< EOF
<img src="{path:image_url}fm_1997_style_transparent_farking_gif.gif" width="18" height="10" border="0" alt="" />
EOF;
}

//-------------------------------------
//  Poll Graph Right
//-------------------------------------

function poll_graph_right()
{
return <<< EOF
<img src="{path:image_url}fm_1997_style_transparent_farking_gif.gif" width="3" height="10" border="0" alt="" />
EOF;
}



}
// END CLASS
?>