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
 File: theme_stats.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_stats {

//-------------------------------------
//  Visitor Stats
//-------------------------------------

function visitor_stats()
{
return <<< EOF

<div class="fm-forum-home-sub-foot">
	{include:forum_legend}
	<div class="fm-whos-online">
	<h4>{lang:active_members}</h4>

	{if member_names}
	<p>{member_names backspace='8'}<a href="{path:member_profile}">{name}</a>,&nbsp; {/member_names}</p>
	{/if}
	</div>
</div>

<div class="fm-visitor-stats-wrapper">

	<div class="fm-header-wrapper">
		<h4>{lang:visitor_stats}</h4>
	</div>

	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<td colspan="4" class="fm-most-ever fm-content-wrapper">
				{lang:most_users_ever} {most_visitors}, {lang:visited_on} {most_visitor_date format="%F %d, %Y %h:%i %A"}
			</td>
		</tr>
		<tr>
			<th scope="row">{lang:total_registered_members} <strong>{total_members}</strong></td>
			<th scope="row">{lang:total_topics} <strong>{total_forum_topics}</strong></td>
			<th scope="row">{lang:total_replies} <strong>{total_forum_replies}</strong></td>
			<th scope="row">{lang:total_posts} <strong>{total_forum_posts}</strong></td>
		</tr>
		<tr>
			<th scope="row">{lang:total_logged_in} <strong>{total_logged_in}</strong></td>
			<th scope="row">{lang:total_anonymous} <strong>{total_anon}</strong></td>
			<th scope="row">{lang:total_guests} <strong>{total_guests}</strong></td>
			<th scope="row">{lang:newest_members}
			{recent_member_names limit='10' backspace='8'}
				<a href="{path:member_profile}">{name}</a>,&nbsp; {/recent_member_names}
			</td>
		</tr>
	</table>
	
</div>
EOF;
}
/* END */




}
// END CLASS
?>