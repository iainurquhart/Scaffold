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
 File: theme_legends.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_legends {

//-------------------------------------
//  Forum Legend
//-------------------------------------

function forum_legend()
{
return <<< EOF
<div class="fm-forum-legend fm-legend">
	<h4>{lang:legend}:</h4>
	<ul>
		<li class="fm-legend-new-posts">
			<img src="{path:image_url}marker_new_topic.gif" width="24" height="18" alt="{lang:legend_new_topic}" border="0" />
			{lang:legend_new_posts}</li>
		<li class="fm-legend-no-new-posts">
		<img src="{path:image_url}marker_old_topic.gif" width="24" height="18" alt="{lang:legend_old_topic}" border="0" />
		{lang:legend_no_new_posts}</li>
	</ul>
</div>
EOF;
}
/* END */




//-------------------------------------
//  Topic Legend
//-------------------------------------

function topic_legend()
{
return <<< EOF
<div class="fm-topic-legend fm-legend">
	<h4>{lang:legend}</h4>
	<ul>
		<li class="fm-legend-new-posts">
			<img src="{path:image_url}marker_new_topic.gif" width="24" height="18" alt="{lang:legend_new_topic}" border="0" />
			{lang:legend_new_posts}</li>
		<li class="fm-legend-hot-topic">
			<img src="{path:image_url}marker_hot_topic.gif" width="24" height="18" alt="{lang:legend_hot_topic}" border="0" />
			{lang:legend_hot_topic}</li>
		<li class="fm-legend-hot-topic">
			<img src="{path:image_url}marker_new_poll.gif" width="24" height="18" alt="{lang:legend_new_poll}" border="0" />
			{lang:legend_new_poll}</li>
		<li class="fm-legend-moved-topic">
			<img src="{path:image_url}marker_moved_topic.gif" width="24" height="18" alt="{lang:legend_moved_topic}" border="0" />
			{lang:legend_moved_topic}</li>
		<li class="fm-legend-sticky-topic">
			<img src="{path:image_url}marker_sticky_topic.gif" width="24" height="18" alt="Sticky Topic" border="0" />
			{lang:legend_sticky_topic}</li>
		<li class="fm-legend-no-new-posts">
			<img src="{path:image_url}marker_old_topic.gif" width="24" height="18" alt="{lang:legend_old_topic}" border="0" />
			{lang:legend_no_new_posts}</li>
		<li class="fm-legend-hot-old-topic">
			<img src="{path:image_url}marker_hot_old_topic.gif" width="24" height="18" alt="{lang:legend_hot_old_topic}" border="0" />
			{lang:legend_hot_old_topic}</li>
		<li class="fm-legend-old-poll">
			<img src="{path:image_url}marker_old_poll.gif" width="24" height="18" alt="{lang:legend_old_poll}" border="0" />
			{lang:legend_old_poll}</li>
		<li class="fm-legend-closed-topic">
			<img src="{path:image_url}marker_closed_topic.gif" width="24" height="18" alt="{lang:legend_closed_topic}" border="0" />
			{lang:legend_closed_topic}</li>
		<li class="fm-legend-announcements">
			<img src="{path:image_url}marker_announcements.gif" width="22" height="22" alt="{lang:announcement}" border="0" />
			{lang:legend_announcements}</li>
	</ul>
</div>
EOF;
}
/* END */




}
// END CLASS
?>