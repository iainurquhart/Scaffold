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
 File: theme_css.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_css {

/* -------------------------------------
/*  CSS Stylesheet
/* -------------------------------------*/

function forum_css()
{
return <<< EOF
/*
    Default Body
------------------------------------------------------ */ 
body {
	margin:				0;
	padding:			0;
	font-family:		Verdana, Geneva, Tahoma, Trebuchet MS, Arial, Sans-serif;
	font-size:			11px;
	background:			#999;
}
/*
    Default Links
------------------------------------------------------ */ 
a {
	color:				#00f;
	text-decoration:	none;
	background:			transparent;
}
  
a:visited {
	color:				#00f;
	text-decoration:	none;
	background:			transparent;
}

a:hover {
	text-decoration:	underline;
	background:			transparent;
}

/*
    Larger Links 
------------------------------------------------------ */ 

.largeLinks {
	font-size:			12px;
	background:			transparent;
}
.largeLinks a:link {
	text-decoration:	none;
	background:			transparent;
} 
.largeLinks a:visited {
	text-decoration:	none;
	background:			transparent;
}
.largeLinks a:hover {
	text-decoration:	underline;
	background:			transparent;
}



/*
    Alternate links
------------------------------------------------------ */ 

.altLinks {
	color:				#fff;
}
.altLinks a:link {
	color:				#fff;
} 
.altLinks a:visited {
	color:				#fff;
}
.altLinks a:hover {
}

/*
    Small links
------------------------------------------------------ */ 
.smallLinks {
	font-size:			10px;
}

.smallLinks a:link {
} 
.smallLinks a:visited {
}
.smallLinks a:hover {
}

/*
  Links in forum posts
------------------------------------------------------ */ 
.post a {
}
  
.post a:visited {
}

.post a:hover {
}
/*
    Basic stuff
------------------------------------------------------ */ 

p {
	font-size:			12px;
}

.default, .defaultBold, .defaultRight, .defaultCenter {
	font-size:			11px;
}

.defaultBold {
	font-weight:		bold;
}

.defaultRight {
	text-align:			right;
}

.defaultCenter {
	text-align:			center;
}


h2 {
	font-size:			13px;
}

h3 {
	font-size:			12px;
}

.lighttext {
	font-size:			10px;
	color:				#333;
}

/*
    Special formatting for quotes, <code>, <pre> etc..
------------------------------------------------------ */ 

code {
	white-space:		normal;
}

pre {
	background:			#eee;
	border:				1px solid #333;
	font-size:			11px;
	padding:			10px 10px 10px 6px;
	margin:				8px 4px 10px 3px;
	white-space:		normal;
}

.codeblock {
	background:			#eee;
	border:				1px solid #333;
	font-size:			11px;
	padding:			10px 10px 10px 6px;
	margin:				8px 4px 10px 3px;
}

blockquote {
	background:			#eee;
	border:				1px solid #333;
	border-left:		4px solid #333;
	font-size:			11px;
	padding:			5px 10px 10px 6px;
	margin:				8px 2px 10px 6px;
}

.quote_author {
	font-size:			10px;
	font-weight:		bold;
	margin:				0 0 4px 0;
}

/*
    Top Bar 
------------------------------------------------------ */ 

#topBar {
	background:			#ccc;
	text-align:			center;
	padding:			2px 0;
}

.topBarLinks {
	font-size:			11px;
}
.topBarLinks a:link {
	background:			transparent;
	text-decoration:	underline;
} 
.topBarLinks a:visited {
	background:			transparent;
	text-decoration:	underline;
}
.topBarLinks a:hover {
	background:			transparent;
	text-decoration:	none;
}

/*
    Page Header 
------------------------------------------------------ */ 

#pageheader {
	background:			#aaa;
	border-bottom:		1px solid #000;
	padding:			0 0 0 15px;
}

/*
    Right side of page banner
------------------------------------------------------ */ 
.rightheader {
	font-size:			11px;
	text-align:			left;
	padding:			0 22px 0 22px;
}
.rightheader a:link {
	background:			transparent;
	text-decoration:	underline;
} 
.rightheader a:visited {
	background:			transparent;
	text-decoration:	underline;
}
.rightheader a:hover {
	background:			transparent;
	text-decoration:	none;
}
/*
    Private message box
------------------------------------------------------ */ 

.privatemessagebox{
	background:			#ccc;
	padding:			3px;
	border:				1px solid #333;
}

/*
    Member Signature
------------------------------------------------------ */ 

.signature {
	border-top:			1px solid #000;
	border-left:		1px solid transparent;
	border-right:		1px solid transparent;
	border-bottom:		1px solid transparent;
	margin:				15px 0 0 0;
	padding:			3px 10px 4px 6px;
}

.signatureTitle {
	font-size:			10px;
	color:				#333;
}

/*
    Sub-header Bar
    Contains the breadcrumb links
------------------------------------------------------ */ 
#subheader {
	background:			#bbb;
	padding:			4px 25px 3px 27px;
	border-bottom:		1px solid #888;
}
/*
    Breadcrumb Links
------------------------------------------------------ */ 
.breadcrumb {
	font-size:			10px;
}
.breadcrumb a:link {
	background:			transparent;
	text-decoration:	none;
} 
.breadcrumb a:visited {
	background:			transparent;
	text-decoration:	none;
}
.breadcrumb a:hover {
	background:			transparent;
	text-decoration:	underline;
}

.currentcrumb {
	font-weight:		bold;
}
.breadcrumbspacer {
}
/*
    Misc. Formatting Items
------------------------------------------------------ */ 
.spacer {
	margin-bottom:			5px;
}

.itempad {
	padding:				2px 0;
}

.itempadbig {
	padding:				5px 0;
}

.bottompad {
	padding:				0 0 2px 0;
}

.marginpad {
	padding:				12px 0 10px 3px;
}

.leftpad {
	padding:				0 0 0 4px;
}

/*
    Main Content Wrapper
------------------------------------------------------ */ 
#content {
	left:					0;
	right:					10px;
	margin:					10px 20px 0 20px;
	padding:				0;
	width:					auto;
}
* html #content {
	width:					100%;
	width:					auto;
}

/*
   Forum related text formatting
------------------------------------------------------ */ 

.forumName {
	font-size:				12px;
}

.forumDescription {
	font-size:				11px;
}

.forumLightLinks {
	font-size:				10px;
}

.forumLightLinks a:link {
	background:				transparent;
	text-decoration:		none;
} 
.forumLightLinks a:visited {
	background:				transparent;
	text-decoration:		none;
}
.forumLightLinks a:hover {
	background:				transparent;
	text-decoration:		underline;
}
.topicTitle {
	font-size:				12px;
}

.userBlock {
	padding:				2px 0 2px 0;
}

.edited {
	font-size:		9px;
	color:			#888;
}

/*
    File Attachments
------------------------------------------------------ */ 

.attachTitle {
	font-size:				10px;
	font-weight:			bold;
	margin:					10px 0 1px 0;
	background:				#ccc;
}
.attachBody {
	font-size:				11px;
	margin-bottom:			10px;
	background:				#eee;
}

.attachThumb {
	margin:					3px 6px 3px 3px;
}

/*
    User Rank Text in Post
------------------------------------------------------ */ 
.rankAdmin {
	font-size:				10px;
	font-weight:			bold;
}

.rankModerator {
	font-size:				10px;
	font-weight:			bold;
}

.rankMember{
	font-size:				10px;
	font-weight:			bold;
}

.rankImage {
	margin:					0;
	padding:				0;
	border:					0;
}

/*
    Button Formatting
	This controls the look of the various buttons, like
	the "NEW TOPIC" and "POST REPLY" buttons
------------------------------------------------------ */ 

.button {
	width:					80px;
}
.button40 {
	width:					40px;
}
.button80 {
	width:					80px;
}
.button100 {
	width:					100px;
}
.button150 {
	width:					150px;
}
.button210 {
	width:					210px;
}
.buttonSpacer{
	margin:					0 0 0 6px;
}
.buttonLarge {
	background:				#555;
	color:					#fff;
	font-weight:			bold;
	padding:				4px 6px;
	margin:					2px 0 4px 0;
	white-space:			nowrap;
	cursor:					pointer;
	border:					1px solid #333;
	text-align:				center;
	font-size:				10px;
	text-transform:			uppercase;
}
.buttonLargeHover {
	background:				#777;
	color:					#fff;
	font-weight:			bold;
	padding:				4px 6px;
	margin:					2px 0 4px 0;
	white-space:			nowrap;
	cursor:					pointer;
	border:					1px solid #333;
	text-align:				center;
	font-size:				10px;
	text-transform:			uppercase;
}


.buttonSmall {
	background:				#555;
	color:					#fff;
	font-weight:			bold;
	padding:				2px 3px;
	margin:					0 2px 0 3px;
	white-space:			nowrap;
	cursor:					pointer;
	border:					1px solid #333;
	text-align:				center;
	font-size:				10px;
	text-transform:			uppercase;
}

.buttonSmallHover {
	background:				#777;
	color:					#fff;
	font-weight:			bold;
	padding:				2px 3px;
	margin:					0 2px 0 3px;
	white-space:			nowrap;
	cursor:					pointer;
	border:					1px solid #333;
	text-align:				center;
	font-size:				10px;
	text-transform:			uppercase;
}


/*
    Post Preview
------------------------------------------------------ */ 

.preview {
	background:				#eee;
	font-size:				11px;
	padding:				10px;
	margin:					0 0 12px 0;
	border:					1px solid #333;
}
.previewheading {
	background:				#ccc;
	font-weight:			bold;
	font-size:				11px;
	padding:				5px 0 5px 10px;
	border:					1px solid #333;
	border-bottom:			0;
}

/*
    Moderator Highlight
    This controls the look of the name of moderators
    that appear in the stats area.  The idea is that
    moderators appear in the list differently than
    regular members
------------------------------------------------------ */ 
.activeModerator {
	font-weight:			bold;
}

/*
    Table Formatting
------------------------------------------------------ */ 
.border {
	border:					1px solid #333;
}
.tableBorder {
	border:					1px solid #333;
}
.tableBorderLeft {
	border-left:			1px solid #333;
}
.tableBorderTopLeft {
	border-top:				1px solid #333;
	border-left:			1px solid #333;
}
.tableBorderPad {
	border:					1px solid #333;
	padding:				1px;
}
.threadBorder {
	border-bottom:			1px solid #333;
}
.tableBG {
	background:				#eee;
}

.tablePad {
	padding:				0 2px 4px 2px;
}

.tableHeadingBG {
	background:				#666;
	color:					#fff;
	padding:				7px 6px;
}
.tableHeading {
	font-size:				12px;
	font-weight:			bold;
	color:					#fff;
	padding:				0;
	margin:					0;
	white-space:			nowrap;
}
.tableHeadingSmall {
	font-size:				11px;
	font-weight:			normal;
	color:					#fff;
	padding:				0;
	margin:					0;
}
.tableRowHeading, .tableRowHeadingBold {
	background:				#bbb;
	font-size:				11px;
	color:					#444;
	padding:				8px 10px 8px 6px;
	border-top:				1px solid #333;
}
.tableRowHeadingBold {
	font-weight:			bold;
}
.tableRowSpacer {
	background:				#aaa;
	padding:				0;
}

.tableCellOne {
	background:				#ddd;
	padding:				3px 6px;
	border:					1px solid #ccc;
}
.tableCellTwo {
	background:				#eee;
	padding:				3px 6px;
	border:					1px solid #ccc;
}

.tablePostInfo {
	font-size:				10px;
}

.ignored {
}

/*
    Member Profile Page
------------------------------------------------------ */ 

.profileHeadingBG {
	background:				#666;
	color:					#fff;
	padding:				5px;
}

.profileAlertHeadingBG {
	background:				#900;
	color:					#fff;
	padding:				5px;
}

.profileTopBox {
	background:				#eee;
	padding:				6px;
}

.profileTitle {
	font-size:				14px;
	font-weight:			bold;
}

.profileItem {
}

.profilePhoto {
	background:				#eee;
	border-left:			1px solid #333;
}

.avatar {
	margin:					2px 15px 0 2px;
}

.photo {
	margin:					2px 15px 0 2px;
}

.profileHead {
	font-weight:			bold;
	text-transform:			uppercase;
	background:				#666;
	color:					#fff;
	border-top:				1px solid #333;
	border-bottom:			1px solid #333;
	padding:				3px 5px;
}

.menuHeadingBG {
	background:				#777;
	color:					#fff;
	padding:				6px;
}

.profileMenu {
	background:				#eee;
	border:					1px solid #333;	
}

.profileMenuInner {
	padding:				0 10px;
	margin:					4px 0;
}

.menuItem {
	padding:				3px 0;
}

.borderTopBot {
	border-top:				1px solid #333;
	border-bottom:			1px solid #333;
}

.borderBot {
	border-bottom:			1px solid #333;
}

.success {
	color:					#093;
	font-weight:			bold;
}

.memberlistRowOne {
	background:				#ddd;
	padding:				4px 8px;
	border:					1px solid #ccc;
}
.memberlistRowTwo {
	background:				#eee;
	padding:				4px 8px;
	border:					1px solid #ccc;
}

.memberlistHead {
	font-weight:			bold;
	background:				#777;
	color:					#fff;
	border-bottom:			1px solid #333;
}

.memberlistFooter {
	border:					1px solid #333;
	border-left:			0;
}

.innerShade {
	background:				#eee;
	border:					1px solid #ccc;
	padding:				10px;
}

/*
    Search Formatting
------------------------------------------------------ */ 

.searchBox {
	border:					1px solid #333;
	margin:					15px 0 0 0;
	padding:				6px;
}

.searchBoxTitle {
	font-size:				10px;
}

.searchpad {
	padding:				7px 0;
}

.searchspacer {
	margin-bottom:			8px;
}



/*
    Pagination Links
------------------------------------------------------ */ 
.paginateBorder {
}
.paginate {
	background:				#eee;
	padding:				2px 4px;
}
.paginateStat {
	background:				#444;
	color:					#fff;
	white-space:			nowrap;
	padding:				2px 10px;
}
.paginateCur {
	background:				#eee;
	color:					#999;
	padding:				2px 6px;
}
 
.paginate a:link {
}
  
.paginatea:visited {
}

.paginate a:hover {
}

/*

    Form Field Formatting
------------------------------------------------------ */ 

form {
	margin:					0;
	padding:				0;
	border:					0;
}
.hidden {
	margin:					0;
	padding:				0;
	border:					0;
}
.input {
} 
.textarea {
}
.select {
} 
.multiselect {
} 
.radio {
}
.checkbox {
}
.buttons {
	font-weight:			bold;
	cursor:					pointer;
	padding:				2px 5px;
}

.submit {
	cursor:					pointer;
	padding:				2px 5px;
}  
/*
    Error messages
------------------------------------------------------ */ 

.errorHeading {
	background:				#600;
	color:					#fff;
	padding:				6px;
}

.errorMessage {
	color:					#900;
	padding:				10px;
}

.errorBox {
	color:					#900;
	background:				#eee;
	border:					1px solid #900;
	padding:				10px;
}

.alert {
	font-weight:			bold;
	color:					#900;
}

.highlight {
	color:					#900;
}

/*
    Page Footer
------------------------------------------------------ */ 
#footer {
	clear:					both;
	text-align:				center;
	font-size:				9px;
}

/*
    Formatting Buttons
------------------------------------------------------ */ 

.buttonMode {
	font-size:				10px;
	white-space:			nowrap;
}

.htmlButtonOuter, .htmlButtonOuterL {
	background:				#eee;
	border:					1px solid #333;
	border-left:			0;
	padding:				0;
}
.htmlButtonOuterL  {
	border-left:			1px solid #333;
}
.htmlButtonInner {
	text-align:				center;
	padding:				0 5px;
	border-left:			1px solid #fff;
	border-top:				1px solid #fff;
	border-right:			1px solid #ccc;
	border-bottom:			1px solid #ccc;
}
.htmlButtonOff {
	font-weight:			bold;
	white-space:			nowrap;
	padding:				2px;
}
.htmlButtonOff a:link {
	color:					#000;
	text-decoration:		none;
	white-space:			nowrap;
}
.htmlButtonOff  a:visited {
	text-decoration:		none;
}
.htmlButtonOff a:active {
}
.htmlButtonOff a:hover {
	text-decoration:		none;
	color:					#999;
}
.htmlButtonOn {
	font-weight:			bold;
	white-space:			nowrap;
	padding:				2px;
}
.htmlButtonOn a:link {
	color:					#900;
	text-decoration:		none;
}  
.htmlButtonOn  a:visited {
	text-decoration:		none;
} 
.htmlButtonOn a:active {
	text-decoration:		none;
	color:					#999;
}
.htmlButtonOn a:hover {
	text-decoration:		none;
	color:					#999;
}

/*
    SPELL CHECK CSS
--------------------------------------------------------------- */

.iframe {
	border:					1px solid #ccc;
}

.wordSuggestion
{
	border:					1px solid #ccc;
	padding:				4px;
}

.wordSuggestion a, .wordSuggestion a:active
{
	cursor:					pointer;
}

.spellchecked_word
{
	cursor:					pointer;
	border-bottom:			1px dashed #f00;
}

.spellchecked_word_selected
{
}

EOF;
}
/* END */




}
// END CLASS
?>