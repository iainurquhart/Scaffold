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
 File: theme_member.php
-----------------------------------------------------
 Purpose: Forum Template Theme
=====================================================
*/

if ( ! defined('EXT')){
	exit('Invalid file request');
}

class theme_member {

//-------------------------------------
//  Member Page
//-------------------------------------

function member_page()
{
return <<< EOF
{include:html_header}
{if show_headings}
	{include:top_bar}
{/if}
{include:member_manager}
{include:html_footer}
EOF;
}
/* END */



//-------------------------------------
//  Full Proile with menu
//-------------------------------------

function full_profile()
{
return <<< EOF

<div class="fm-profile-wrapper">
	<div class="fm-profile-menu">
		<div class="fm-inset">
			{include:menu}
		</div>
	</div>
	<div class="fm-profile-content">
		<div class="fm-inset">
			{include:content}
		</div>
	</div>
</div>
EOF;
}
/* END */


//-------------------------------------
//  Basic Proile - no menu
//-------------------------------------

function basic_profile()
{
return <<< EOF
{include:content}
EOF;
}
/* END */




//-------------------------------------
//  Profile Page Menu
//-------------------------------------

function menu()
{
return <<< EOF
<div class="fm-personal-settings">
	<h4>{lang:personal_settings}</h4>
	<ul>
		<li><a href='{path:profile}'>{lang:edit_profile}</a></li>
		<li><a href='{path:signature}'>{lang:edit_signature}</a></li>
		<li><a href='{path:avatar}'>{lang:edit_avatar}</a></li>
		<li><a href='{path:photo}'>{lang:edit_photo}</a></li>
		<li><a href='{path:email}'>{lang:email_settings}</a></li>
		<li><a href='{path:username}'>{lang:username_and_password}</a></li>
		<li><a href='{path:edit_preferences}'>{lang:edit_preferences}</a></li>
		{if allow_localization}
			<li><a href='{path:localization}'>{lang:localization}</a></li>
		{/if}
		{if can_delete}
			<li><a href="{path:delete}">{lang:mbr_delete}</a></li>
		{/if}
	</ul>
</div>

{include:messages_menu}

<div class="fm-utilities">
	<h4>{lang:utilities}</h4>
	<ul>
		<li><a href='{path:subscriptions}' >{lang:edit_subscriptions}</a></li>
		<li><a href='{path:ignore_list}' >{lang:ignore_list}</a></li>
	</ul>
</div>

<div class="fm-extras">
	<h4>{lang:extras}</h4>
	<ul>
		<li><a href='{path:notepad}' >{lang:notepad}</a></li>
		<li><a href="{path:your_profile}">{lang:your_profile}</a></li>
	</ul>
</div>
EOF;
}
/* END */



//-------------------------------------
//  success
//-------------------------------------

function success()
{
return <<< EOF
<div class="fm-header-wrapper">
	<h3>{lang:heading}</h3>
</div>

<div class="fm-success-message fm-message">
	<p>{lang:message}</p>
</div>
EOF;
}
/* END */



//-------------------------------------
//  Error
//-------------------------------------

function error()
{
return <<< EOF
<div class="fm-header-wrapper fm-error">
	<h3>{lang:heading}</h3>
	<p>{lang:message}</p>
</div>
EOF;
}
/* END */



//-------------------------------------
//  Profile Home page
//-------------------------------------

function home_page()
{
return <<< EOF
	<div class="fm-header-wrapper">
		<h3>{lang:your_stats}</h3>
	</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th>{lang:email}</th>
		<td class="fm-content-wrapper">{email}</td>
	</tr>
	<tr>
		<th>{lang:join_date}</th>
		<td class="fm-content-wrapper">{join_date}</td>
	</tr>
	<tr>
		<th>{lang:last_visit}</th>
		<td class="fm-content-wrapper">{last_visit_date}</td>
	</tr>
	{if forum_installed} <!-- wtf -->
	<tr>
		<th>{lang:most_recent_forum_post}</th>
		<td class="fm-content-wrapper">{recent_forum_post_date}</td>
	</tr>
	{/if}
	<tr>
		<th>{lang:most_recent_entry}</th>
		<td class="fm-content-wrapper">{recent_entry_date}</td>
	</tr>
	<tr>
		<th>{lang:most_recent_comment}</th>
		<td class="fm-content-wrapper">{recent_comment_date}</td>
	</tr>
	{if forum_installed}
	<tr>
		<th>{lang:total_forum_topics}</th>
		<td class="fm-content-wrapper">{total_topics}</td>
	</tr>
	<tr>
		<th>{lang:total_forum_replies}</th>
		<td class="fm-content-wrapper">{total_replies}</td>
	</tr>
	<tr>
		<th>{lang:total_forum_posts}</th>
		<td class="fm-content-wrapper">{total_posts}</td>
	</tr>
	{/if}
	<tr>
		<th>{lang:total_entries}</th>
		<td class="fm-content-wrapper">{total_entries}</td>
	</tr>
	<tr>
		<th>{lang:total_comments}</th>
		<td class="fm-content-wrapper">{total_comments}</td>
	</tr>
</table>
EOF;
}
/* END */




//-------------------------------------
//  Public Profile Page
//-------------------------------------

function public_profile()
{
return <<< EOF
<div class="fm-profile-detail-wrapper">
	<div class="fm-header-wrapper">
		<div class="fm-member-photo{if photo} fm-has-photo{/if}">
			{if photo}
				<img src="{path:photo_url}" class="photo" width="{photo_width}" height="{photo_height}" border="0" title="{name}" />
				<p>{lang:my_photo}</p>
			{/if}
			{if not_photo}
				<img src="{path:image_url}icon_profile.gif" width="50" height="50" border="0" title="{name}" alt="{lang:no_photo}" />
				<p>{lang:no_photo_exists}</p>
			{/if}
		</div>
		{if avatar}
			<img src="{path:avatar_url}" width="{avatar_width}" height="{avatar_height}" border="0" alt="{name}" title="{name}" class="fm-avatar" />
		{/if}
		<h3>{name}</h3>
		<p>{lang:member_group} <strong>{member_group}</strong><br />
		<a href="{search_path}" class="fm-view-posts-by-author">{lang:view_posts_by_member}</a>
		{if ignore}
		<br />{ignore_link}
		{/if}</p>
	</div>
</div>

<div class="fm-profile-stats-wrapper">

	<div class="fm-profile-communications">
		<div class="fm-header-wrapper">
			<h3>{lang:communications}</h3>
		</div>
		
		<ul>
			<li><strong>{lang:url}</strong> {if url}<a href="{url}" target="_blank"><img src="{path:image_url}icon_www.gif"  width="56" height="14" alt="{url}" title="{url}" border="0" /></a>{/if}</li>
			<li><strong>{lang:email}</strong> 
				{if accept_email}
				<a href="#" {email_console}><img src="{path:image_url}icon_email.gif" width="56" height="14" alt="{lang:email_console}" title="" border="0" /></a>
			{/if}</li>
			{if can_private_message}
			<li><strong>{lang:private_message}</strong> <a href="{send_private_message}"><img src="{path:image_url}icon_pm.gif" width="56" height="14" alt="{lang:send_pm}" title="{lang:send_pm}" border="0" /></a></li>
			{/if}
		</ul>
	</div>
	
	<div class="fm-profile-personal-info">
		<div class="fm-header-wrapper">
			<h3>{lang:personal_info}</h3>
		</div>
		<ul>
			<li><strong>{lang:location}</strong> {location}</li>
			<li><strong>{lang:occupation}</strong> {occupation}</li>
			<li><strong>{lang:interests}</strong> {interests}</li>
			{custom_profile_fields}
		</ul>
	</div>
	
	<div class="fm-profile-statistics">
		<div class="fm-header-wrapper">
			<h3>{lang:statistics}</h3>
		</div>
		<ul>
			<li><strong>{lang:member_group}</strong> {member_group}</li>
			<li><strong>{lang:total_entries}</strong> {total_entries}</li>
			<li><strong>{lang:total_comments}</strong> {total_comments}</li>
			{if forum_installed} <!-- wtf? -->
			<li><strong>{lang:total_forum_topics}</strong> {total_forum_topics}</li>
			<li><strong>{lang:total_forum_replies}</strong> {total_forum_replies}</li>
			<li><strong>{lang:total_forum_posts}</strong> {total_forum_posts}</li>
			{/if}
			<li><strong>{lang:member_local_time}</strong> {local_time format="%F %d, %Y &nbsp;%h:%i %A"}</li>
			<li><strong>{lang:last_visit}</strong> {last_visit format="%F %d, %Y &nbsp;%h:%i %A"}</li>
			<li><strong>{lang:join_date}</strong> {join_date format="%F %d, %Y &nbsp;%h:%i %A"}</li>
			<li><strong>{lang:most_recent_entry}</strong> {last_entry_date format="%F %d, %Y &nbsp;%h:%i %A"}</li>
			<li><strong>{lang:most_recent_comment}</strong> {last_comment_date format="%F %d, %Y &nbsp;%h:%i %A"}</li>
			{if forum_installed}
			<li><strong>{lang:most_recent_forum_post}</strong> {last_forum_post_date format="%F %d, %Y &nbsp;%h:%i %A"}</li>
			{/if}
			<li><strong>{lang:birthday}</strong> {birthday}</li>
		</ul>
	</div>
		
	<div class="fm-profile-bio">
		<div class="fm-header-wrapper">
			<h3>{lang:bio}</h3>
		</div>
		<div class="fm-message">
			{if bio != ''}{bio}{/if}
			{if bio == ''}{lang:no_info_available}{/if}
		</div>
	</div>
	
</div>


EOF;
}
/* END */




//-------------------------------------
//  Custom Profile Fields - Public Page
//-------------------------------------

function public_custom_profile_fields()
{
return <<< EOF

<li><strong>{field_name}{if field_description}<br />{field_description}{/if}</strong>{field_data}</li>

EOF;
}
/* END */




//-------------------------------------
//  Login Form
//-------------------------------------

function login_form()
{
return <<< EOF
{form_declaration}
	<div class="fm-login-wrapper">
		<div class="fm-header-wrapper">
			<h3>{lang:login_required}</h3>
			<p>{lang:must_be_logged_in}</p>
		</div>
		<!-- @lang -->
		
		<div class="fm-header-wrapper fm-register-prompt">
			<p>Don't have an account? <a href="{path:register}" class="fm-register">Please Register</a></p>
		</div>
		<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
			<tr>
				<th><label for="fm-username">{lang:username}</label></th>
				<td class="fm-content-wrapper">
					<input type="text" class="input" id="fm-username" name="username" size="20" value="" maxlength="50" />
				</td>
			</tr>
			<tr>
				<th><label for="fm-password">{lang:password}</label></th>
				<td class="fm-content-wrapper">
					<input type="password" id="fm-password" class="input" name="password" size="20" value="" maxlength="32" />
				</td>
			</tr>
			<tr>
				<th>{lang:options}</th>
				<td class="fm-content-wrapper">
					<input type="checkbox" class="checkbox" id="fm-auto-login" name="auto_login" value="1" checked="checked" />
					<label for="fm-auto-login">{lang:auto_login}</label>
					<br />
					<input type="checkbox"  id="fm-show-name" class="checkbox" name="anon" value="1" checked="checked" />
					<label for="fm-auto-login">{lang:show_name}</label>
				</td>
			</tr>
		</table>
		<p class="fm-submit">
			<input type="submit" class="submit" value="{lang:submit}" /> <a href="{path:forgot}" class="fm-pwd-forgot">{lang:forgot_password}</a>
		</p>
	</div>
</form>

EOF;
}
/* END */




//-------------------------------------
//  Forgot Password Form
//-------------------------------------

function forgot_form()
{
return <<< EOF
{form_declaration}
	<div class="fm-header-wrapper">
		<h3>{lang:forgotten_password}</h3>
	</div>
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<th>{lang:your_email}</th>
			<td class="fm-content-wrapper">
				<input type="text" name="email" value="" class="input" maxlength="120" size="40" />
			</td>
		</tr>
	</table>
	<p class="fm-submit">
		<input type="submit" value="{lang:submit}" class="submit" /> <a href="{path:login}">{lang:back_to_login}</a>
	</p>
</form>

EOF;
}
/* END */




//-------------------------------------
//  Edit Profile Form
//-------------------------------------

function edit_profile_form()
{
return <<< EOF
<form method="post" action="{path:update_profile}">

	<div class="fm-header-wrapper">
		<h3>{lang:edit_your_profile}</h3>
		<p><span class="fm-required-indicator">*</span> {lang:required}</p>
	</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th><label for="fm=url">{lang:url}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm=url" name='url' value='{url}' maxlength='75' /></td>
	</tr>
	<tr>
		<th><label>{lang:birthday}</label></th>
		<td class="fm-content-wrapper">{form:birthday_year} {form:birthday_month} {form:birthday_day}</td>
	</tr>
	<tr>
		<th><label for="fm-location">{lang:location}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-location" name='location' value='{location}' maxlength='50'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-occupation">{lang:occupation}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-occupation" name='occupation' value='{occupation}' maxlength='80'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-interests">{lang:interests}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-interests" name='interests' value='{interests}' maxlength='120'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-aol-im">{lang:aol_im}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-aol-im" name='aol_im' value='{aol_im}' maxlength='50'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-icq">{lang:icq}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-icq" name='icq' value='{icq}' maxlength='50'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-yahoo-im">{lang:yahoo_im}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-yahoo-im" name='yahoo_im' value='{yahoo_im}' maxlength='50'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-msn-im">{lang:msn_im}</label></th>
		<td class="fm-content-wrapper"><input type='text' class='input' id="fm-msn-im" name='msn_im' value='{msn_im}' maxlength='50'/>
		</td>
	</tr>
	<tr>
		<th><label for="fm-bio">{lang:bio}</label></th>
		<td class="fm-content-wrapper"><textarea name='bio' id="fm-bio" class='textarea' rows='12' cols='90'>{bio}</textarea>
		</td>
	</tr>
	{custom_profile_fields}
</table>

	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:update}' />
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Custom Profile Fields - Profile Form
//-------------------------------------

function custom_profile_fields()
{
return <<< EOF

</tr>
	<tr>
		<td>
			<label for="m_field_id_{field_id}">{lang:profile_field}</label>
			{lang:profile_field_description}
		</td>
		<td>{form:custom_profile_field}</td>

EOF;
}
/* END */




//-------------------------------------
//  Edit Preferences
//-------------------------------------

function edit_preferences()
{
return <<< EOF

	<div class="fm-header-wrapper">
		<h3>{lang:edit_preferences}</h3>
	</div>


<form method="post" action="{path:update_edit_preferences}">


<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<td class="fm-content-wrapper">
			<input type='checkbox' name='accept_messages' value='y' {state:accept_messages} /> {lang:accept_messages}
		</td>
	</tr>
	<tr>
		<td class="fm-content-wrapper">
			<input type='checkbox' name='display_avatars' value='y' {state:display_avatars} /> {lang:display_avatars}
		</td>
	</tr>
	<tr>
		<td class="fm-content-wrapper">
			<input type='checkbox' name='display_signatures' value='y' {state:display_signatures} /> {lang:display_signatures}
		</td>
	</tr>
</table>

	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:update}' />
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Email Preferences Form
//-------------------------------------

function email_prefs_form()
{
return <<< EOF


<form method="post" action="{path:update_email_settings}">
	<div class="fm-header-wrapper">
		<h3>{lang:email_settings}</h3>
		<p><span class="fm-required-indicator">*</span> {lang:required}</p>
	</div>
	
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th><label for="fm-email">{lang:email}</label></th>
		<td class="fm-content-wrapper">
			<input type='text' class='input' name='email' id="fm-email" value='{email}' maxlength='75'/>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="fm-content-wrapper">
			<input type='checkbox' id="fm-accept-admin-email" name='accept_admin_email' value='y' {state:accept_admin_email} />
			<label for="fm-accept-admin-email">{lang:accept_admin_email}</label>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="fm-content-wrapper">
			<input type='checkbox' id="fm-accept-user-email" name='accept_user_email' value='y' {state:accept_user_email} />
			<label for="fm-accept-user-email">{lang:accept_user_email}</label>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="fm-content-wrapper">
			<input type='checkbox' id="fm-notify-by-default" name='notify_by_default' value='y' {state:notify_by_default} />
			<label for="fm-notify-by-default">{lang:notify_by_default}</label>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="fm-content-wrapper">
			<input type='checkbox' id="fm-notify-of-pm" name='notify_of_pm' value='y' {state:notify_of_pm} />
			<label for="fm-notify-of-pm">{lang:notify_of_pm}</label>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="fm-content-wrapper">
			<input type='checkbox' id="fm-enable-smart-notifications" name='smart_notifications' value='y' {state:smart_notifications} />
			<label for="fm-enable-smart-notifications">{lang:enable_smart_notifications}</label>
		</td>
	</tr>
	<tr>
		<th>{lang:existing_password}</th>
		<td class="fm-content-wrapper">
			<input type='password' class='input' name='password' value='' maxlength='32' style='width:300px'/>
			<span class="fm-field-notes">
				{lang:existing_password_email}
			</div>
		</td>
	</tr>
</table>
	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:update}' />
	</p>
</form>
EOF;
}
/* END */




//-------------------------------------
//  Username and Password Form
//-------------------------------------

function username_password_form()
{
return <<< EOF


<form method="post" action="{path:update_username_password}">

	<div class="fm-header-wrapper">
		<h3>{lang:username_and_password}</h3>
		<p><span class="fm-required">*</span> {lang:required}</p>
	</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th scope="row"><span class='fm-required'>*</span>&nbsp; {lang:username}</th>
		<td class="fm-content-wrapper"><input type="text" class="input" name="username" value="{username}" maxlength="50" size="35"></td>
	</tr>
	<tr>
		<th scope="row"><span class='fm-required'>*</span>&nbsp; {lang:screen_name}</th>
		<td class="fm-content-wrapper"><input type='text' class='input' name='screen_name' value='{screen_name}' maxlength='50'/></td>
	</tr>
	<tr>
		<th scope="row">{lang:password_change}</th>
		<td class="fm-content-wrapper">{lang:password_change_exp}</td>
	</tr>
	<tr>
		<th scope="row">{lang:new_password}</th>
		<td class="fm-content-wrapper"><input type='password' name='password' value='' size='35' maxlength='32' class='input' /></td>
	</tr>
	<tr>
		<th scope="row">{lang:new_password_confirm}</th>
		<td class="fm-content-wrapper"><input type='password' name='password_confirm' value='' size='35' maxlength='32' class='input' /></td>
	</tr>
	<tr>
		<th scope="row">
			<span class='fm-required'>*</span>&nbsp; {lang:existing_password}
			<span class="fm-field-notes">
				{lang:existing_password_exp}
			</span>
		</th>
		<td class="fm-content-wrapper"><input type='password' class='input' name='current_password' value='' maxlength='32' /></td>
	</tr>
</table>

<p class="fm-submit">
	<input type='submit' class='submit' value='{lang:update}' />
</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Username Row
//-------------------------------------

function username_row()
{
return <<< EOF
</tr><tr>

<td class='tableCellTwo' style="width:30%;"><div class='defaultBold'><span class="alert">*</span>&nbsp; {lang:username}</div></td>
<td class='tableCellTwo'><input type='text' class='input' name='username' value='{username}' maxlength='50' size='35'style='width:250px'/></td>
EOF;
}
/* END */




//-------------------------------------
//  Username Change Disallowed Message
//-------------------------------------

function username_change_disallowed()
{
return <<< EOF

</tr><tr>

<td class='tableCellTwo' colspan='2' style="width:100%;">{lang:username_disallowed}</td>


EOF;
}
/* END */




//-------------------------------------
//  Password Change Warning
//-------------------------------------

function password_change_warning()
{
return <<< EOF

<div class="fm-notice-message fm-message">
	<p>{lang:password_change_warning}</p>
</div>


EOF;
}
/* END */




//-------------------------------------
//  Localization Form
//-------------------------------------

function localization_form()
{
return <<< EOF

<form method="post" action="{path:update_localization}">

	<div class="fm-header-wrapper">
		<h3>{lang:localization_settings}</h3>
	</div>

	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<th>{lang:timezone}</th>
			<td class="fm-content-wrapper">{form:localization}</td>
		</tr>
		<tr>
			<th>{lang:daylight_savings_time}</th>
			<td class="fm-content-wrapper"><input type='checkbox' name='daylight_savings' value='y' {state:daylight_savings} /> </td>
		</tr>
		<tr>
			<th>{lang:time_format}</th>
			<td class="fm-content-wrapper">{form:time_format}</td>
		</tr>
		<tr>
			<th>{lang:language}</th>
			<td class="fm-content-wrapper">{form:language}</td>
		</tr>
	</table>

	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:update}' />	
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Signature Form
//-------------------------------------

function signature_form()
{
return <<< EOF


<script type="text/javascript">
<!--

function textcounter()
{
	var max		= {maxchars};
	var base	= document.forms.submit_post;
	var cur		= base.body.value.length;

	if (cur > max)
	{
		base.body.value = base.body.value.substring(0, max);
	} 
	else
	{
		base.charsleft.value = max - cur
	}
}

//-->
</script>


{form_declaration}

	<div class="fm-header-wrapper">
		<h3>{lang:edit_signature}</h3>
	</div>


<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">

	<tr>
		<th scope="row">{lang:font_formatting}</th>
		<td class="fm-content-wrapper  fm-formatting-buttons">
			<select name="size" class="select" onchange="selectinsert(this, 'size')" >
				<option value="0">{lang:size}</option>
				<option value="1">{lang:small}</option>
				<option value="3">{lang:medium}</option>
				<option value="4">{lang:large}</option>
				<option value="5">{lang:very_large}</option>
				<option value="6">{lang:largest}</option>
			</select>
				
			<select name="color" class="select" onchange="selectinsert(this, 'color')">
				<option value="0">{lang:color}</option>
				<option value="blue">{lang:blue}</option>
				<option value="green">{lang:green}</option>
				<option value="red">{lang:red}</option>
				<option value="purple">{lang:purple}</option>
				<option value="orange">{lang:orange}</option>
				<option value="yellow">{lang:yellow}</option>
				<option value="brown">{lang:brown}</option>
				<option value="pink">{lang:pink}</option>
				<option value="gray">{lang:grey}</option>
			</select>
			
			{include:html_formatting_buttons}
			
		</td>
	</tr>
	<tr>
		<th scope="row">{lang:signature}</th>
		<td class="fm-content-wrapper">
		<textarea name='body' class='textarea' rows='8' cols='90' onkeydown="textcounter();" onkeyup="textcounter();" >{signature}</textarea>
		</td>
	</tr>
	<tr>
		<th scope="row">{lang:max_characters}</th>
		<td class="fm-content-wrapper"><input type="text" class="input" name="charsleft" size="5" maxlength="4" value="{maxchars}" readonly="readonly"/></td>
	</tr>
	{if image}
	<tr>
		<th scope="row">{lang:signature_image}</th>
		<td class="fm-content-wrapper"><img src="{path:signature_image}" border="0" width="{signature_image_width}" height="{signature_image_height}" title="{lang:signature_image}" />
		<input type='submit' class='submit' value='{lang:remove_image}' name="remove" />
		</td>
	</tr>
	{/if}
	<tr>
		<th scope="row">{lang:upload_image}</th>
		<td class="fm-content-wrapper">
		{if upload_allowed}
			<input type="file" name="userfile" size="20" class="input" />
			<span class="fm-field-notes">
			{lang:max_image_size}<br />
			lang:allowed_image_types}
			</span>
		{/if}
		{if upload_not_allowed}
			{lang:uploads_not_allowed}
		{/if}
		
		</td>
	</tr>
</table>

<p class="fm-submit">
	<input type='submit' class='submit' value='{lang:update_signature}' name="submit" /> 
</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Edit Avatar Page
//-------------------------------------

function edit_avatar()
{
return <<< EOF


{form_declaration}

<div class="fm-header-wrapper">
	<h3>{lang:edit_avatar}</h3>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-has-th-row fm-data-grid">
	<tr>
		<th>{lang:current_avatar}</th>
		<td class="fm-content-wrapper">
			{if avatar}
			<img src="{path:avatar_image}" border="0" width="{avatar_width}" height="{avatar_height}" title="{lang:my_avatar}" alt="{lang:my_avatar}" />
			{/if}
			{if no_avatar}{lang:no_avatar}{/if}
		</td>
	</tr>
	{if installed_avatars}
	<tr>
		<th>{lang:choose_installed_avatar}</th>
		<td class="fm-content-wrapper">{include:avatar_folder_list}</td>
	</tr>
	{/if}
	{if can_upload_avatar}
	<tr>
		<th><label for="fm-upload-an-avatar">{lang:upload_an_avatar}</label></th>
		<td class="fm-content-wrapper">
			<input type="file" name="userfile" id="fm-upload-an-avatar" size="20" class="input file-upload" />
			<span class="fm-field-notes">
			{lang:max_image_size}<br />
			{lang:allowed_image_types}</span>
		</td>
	</tr>
	{/if}
</table>

	<p class="fm-submit">
		{if can_upload_avatar}
			<input type='submit' class='submit' value='{lang:upload_avatar}' name="submit" />
		{/if}
		<input type='submit' class='submit' value='{lang:remove_avatar}' name="remove" />
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Avatar Folder Listing
//-------------------------------------

function avatar_folder_list()
{
return <<< EOF
<a href="{path:folder_path}" class="fm-avatar-folder">{folder_name}</a>
EOF;
}
/* END */




//-------------------------------------
//  Browse Avatar Page
//-------------------------------------

function browse_avatars()
{
return <<< EOF

{form_declaration}

<div class="fm-header-wrapper">
	<h3>{lang:browse_avatars}</h3>
	<p>{lang:current_avatar_set} <strong>{avatar_set}</strong></p>
</div>
<table border="0" cellpadding="3" cellspacing="3" class="fm-avatar-grid">
{avatar_table_rows}
</table>


{if pagination}
<div class="fm-pagination-wrapper">
	<p class="fm-pagination">{pagination}</p>
</div>
{/if}

<p class="fm-submit">
	<input type='submit' class='submit' value='{lang:choose_selected}' />
</p>


</form>
EOF;
}
/* END */




//-------------------------------------
//  Edit Member Photo Page
//-------------------------------------

function edit_photo()
{
return <<< EOF


{form_declaration}

	<div class="fm-header-wrapper">
		<h3>{lang:edit_photo}</h3>
	</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th scope="row">{lang:current_photo}</th>
		<td class="fm-content-wrapper">
		{if photo}
			<img src="{path:member_photo}" border="0" width="{photo_width}" height="{photo_height}" title="{lang:my_photo}" alt="{lang:my_photo}" />
		{/if}
		{if no_photo}
			<img src="{path:image_url}icon_profile.gif" width="50" height="50" border="0" title="{name}" alt="{lang:no_photo}" />
		{lang:no_photo_exists}
		{/if}
		</td>
	</tr>
	<tr>
		<th scope="row">{lang:upload_photo}</th>
		<td class="fm-content-wrapper">
			<input type="file" name="userfile" size="20" class="input" />
			<span class="fm-field-notes">
				{lang:max_image_size}<br />
				{lang:allowed_image_types}
			</span>
			</td>
	</tr>
</table>
	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:upload_photo}' name="submit" /> <input type='submit' class='submit' value='{lang:remove_photo}' name="remove" />
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Notepad Form
//-------------------------------------

function notepad_form()
{
return <<< EOF

<form method="post" action="{path:update_notepad}">

	<div class="fm-header-wrapper">
		<h3>{lang:notepad}</h3>
		<p>{lang:notepad_blurb}</p>
	</div>

	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<td class="fm-content-wrapper">
			<textarea name='notepad' style='width:100%' class='textarea' rows='{notepad_size}' cols='90'>{notepad_data}</textarea>
			</td>
		</tr>
		<tr>
			<td class="fm-content-wrapper">
			{lang:notepad_size} <input type='text' class='input' name='notepad_size' value='{notepad_size}' maxlength='2' />
			</td>
		</tr>
	</table>
	
	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:update}' />
	</p>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Subscriptions Form
//-------------------------------------

function subscriptions_form()
{
return <<< EOF
<script type="text/javascript"> 
<!--

function toggle(thebutton)
{
	if (thebutton.checked) 
	{
	   val = true;
	}
	else
	{
	   val = false;
	}
				
	var len = document.target.elements.length;

	for (var i = 0; i < len; i++) 
	{
		var button = document.target.elements[i];
		
		var name_array = button.name.split("["); 
		
		if (name_array[0] == "toggle") 
		{
			button.checked = val;
		}
	}
	
	document.target.toggleflag.checked = val;
}
//-->
</script>

<form method="post" action="{path:update_subscriptions}" name="target">
	<div class="fm-header-wrapper">
		<h3>{lang:subscriptions}</h3>
	</div>
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-mailbox-table">
		{subscription_results}
	</table>
</form>
EOF;
}
/* END */




//-------------------------------------
//  No Subscriptions Message
//-------------------------------------

function no_subscriptions_message()
{
return <<< EOF

<div class="fm-notice-message fm-message">
	<p>{lang:no_subscriptions}</p>
</div>

EOF;
}
/* END */




//-------------------------------------
//  Subscription Result Heading
//-------------------------------------

function subscription_result_heading()
{
return <<< EOF
<tr>
	<th>{lang:title}</th>
	<th>{lang:type}</th>
	<th>
		<input type="checkbox" name="toggleflag" value="" onclick="toggle(this);" /> {lang:unsubscribe}
	</th>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Subscription Resuolt Rows
//-------------------------------------

function subscription_result_rows()
{
return <<< EOF
<tr>
	<td class="fm-content-wrapper"><a href="{path}" target="_blank">{title}</a></td>
	<td class="fm-content-wrapper">{type}</td>
	<td class="fm-content-wrapper"><input type="checkbox" name="toggle[]" value="{id}" /></td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Subscription Pagination
//-------------------------------------

function subscription_pagination()
{
return <<< EOF
<tr>
	<td class="fm-content-wrapper">{pagination}</td>
	<td class="fm-content-wrapper"></td>
	<td class="fm-content-wrapper"><input type="submit" name="submit" value="{lang:unsubscribe}" /></td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  Registration Form
//-------------------------------------

function registration_form()
{
return <<< EOF
<div class="fm-header-wrapper">
	<h3>{lang:member_registration}</h3>
	<p><span class="fm-required">*</span> {lang:required_fields}</p>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row fm-member-registration">
	<tr>
		<th scope="row"><span class="fm-required">*</span> {lang:username}
		<span class="fm-field-notes">{lang:password_length}</span>
		</th>
		<td class="fm-content-wrapper">
			<input type="text" name="username" value="" maxlength="32" class="input" size="25" />
		</td>
	</tr>
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:password}
		</th>
		<td class="fm-content-wrapper">
			<input type="password" name="password" value="" maxlength="32" class="input" size="25" />
		</td>
	</tr>
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:password_confirm}
		</th>
		<td class="fm-content-wrapper">
			<input type="password" name="password_confirm" value="" maxlength="32" class="input" size="25" />
		</td>
	</tr>
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:screen_name}
			<span class="fm-field-notes">{lang:screen_name_explanation}</span>
		</th>
		<td class="fm-content-wrapper">
			<input type="text" name="screen_name" value="" maxlength="100" class="input" size="25" />
		</td>
	</tr>
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:email}
		</th>
		<td class="fm-content-wrapper">
			<input type="text" name="email" value="" maxlength="120" class="input" size="40" />
		</td>
	</tr>
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:email_confirm}
		</th>
		<td class="fm-content-wrapper">
			<input type="text" name="email_confirm" value="" maxlength="120" class="input" size="40" />
		</td>
	</tr>
	<tr>
		<th scope="row">
			{lang:url}
		</th>
		<td class="fm-content-wrapper">
			<input type="text" name="url" value="" maxlength="100" class="input" size="25" />
		</td>
	</tr>
	{custom_fields}
	<tr>
		<th scope="row">
			{required}<span class="fm-required">*</span>{/required} {field_name}
			{if field_description}
				<span class="fm-field-notes">{field_description}</span>
			{/if}
		</th>
		<td class="fm-content-wrapper">
			{field}
		</td>
	</tr>
	{/custom_fields}
	<tr>
		<th scope="row">
			{lang:terms_of_service}
		</th>
		<td class="fm-content-wrapper">
			<textarea name='rules' style='width:100%' class='textarea' rows='8' cols='90' readonly>
All messages posted at this site express the views of the author, and do not necessarily reflect the views of the owners and administrators of this site.

By registering at this site you agree not to post any messages that are obscene, vulgar, slanderous, hateful, threatening, or that violate any laws.   We will permanently ban all users who do so.   

We reserve the right to remove, edit, or move any messages for any reason.</textarea>
		</td>
	</tr>
	{if captcha}
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:captcha}
		</th>
		<td class="fm-content-wrapper">
			{captcha} <input type="text" class="input" name="captcha" value="" size="20" maxlength="20" />
		</td>
	</tr>
	{/if}
	<tr>
		<th scope="row">
			<span class="fm-required">*</span> {lang:terms_accepted}
		</th>
		<td class="fm-content-wrapper">
			<input type='checkbox' name='accept_terms' value='y'  />
		</td>
	</tr>
</table>

<p class="fm-submit">
	<input type="submit" value="{lang:submit}" class="submit" />
</p>

EOF;
}
/* END */



//-------------------------------------
//  update username/password form
//-------------------------------------

function update_un_pw_form()
{
return <<< EOF
{form_declaration}
<!-- when does this template get called? -->
	<div class="fm-header-wrapper">
		<h3>{lang:settings_update}</h3>
		<p>{lang:access_notice}</p>
	</div>

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:700px;" align="center">
<tr>
<td class="profileHeadingBG" colspan="2"><div class="tableHeading"></div>
</td>

</tr><tr>

<td class="tableCellOne" colspan="2"><div class="itempadbig"><div class="alert"></div></div></td>

</tr><tr>

<td class="tableCellOne" colspan="2"><div class="itempadbig">

{if invalid_username}<div class="itempad"><div class="highlight">{lang:username_length}</div></div>{/if}
{if invalid_password}<div class="itempad"><div class="highlight">{lang:password_length}</div></div>{/if}
</td>

</tr><tr>

{if invalid_username}
	<td class="tableCellTwo" align="right" style="width:35%;"><b>{lang:choose_new_un}</b></td>
	<td class="tableCellTwo" style="width:75%;"><input type="text" style="width:80%" class="input" name="new_username" size="20" value="" maxlength="50" /></td>
	</tr><tr>
{/if}

{if invalid_password}
	<td class="tableCellTwo" align="right"><b>{lang:choose_new_pw}</b></td>
	<td class="tableCellTwo"><input type="password" style="width:80%" class="input" name="new_password" size="20" value="" maxlength="32" /></td>
	</tr><tr>
	
	<td class="tableCellTwo" align="right"><b>{lang:confirm_new_pw}</b></td>
	<td class="tableCellTwo"><input type="password" style="width:80%" class="input" name="new_password_confirm" size="20" value="" maxlength="32" /></td>
	</tr><tr>
{/if}

</tr>
</table>

<div class="spacer"></div>

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" style="width:700px;" align="center">
<tr>
<td class="profileHeadingBG" colspan="2"><div class="tableHeading">{lang:your_current_un_pw}</div>
</td>

</tr><tr>

<td class="tableCellTwo" align="right" style="width:35%;"><b>{lang:existing_username}</b></td>
<td class="tableCellTwo" style="width:75%;"><input type="text" style="width:80%" class="input" name="username" size="20" value="" maxlength="50" /></td>

</tr><tr>

<td class="tableCellTwo" align="right"><b>{lang:existing_password}</b></td>
<td class="tableCellTwo"><input type="password" style="width:80%" class="input" name="password" size="20" value="" maxlength="32" /></td>

</tr><tr>

<td class="tableCellOne" align="right"><div class="itempadbig"><input type="submit" class="submit" value="{lang:submit}" /></div></td>
<td class="tableCellTwo">&nbsp;</td>
</tr>
</table>

</form>


EOF;
}
/* END */


//-------------------------------------
//  Memberlists
//-------------------------------------

function memberlist()
{
return <<< EOF
{form_declaration}
	<div class="fm-header-wrapper">
		<h3>{lang:memberlist}</h3>
	</div>

<table class='fm-data-grid fm-member-list' border="0" cellpadding="0" cellspacing="0">
	<tr>
		<th>{lang:name}</th>
		<th>{lang:forum_posts}</th>
		<th>{lang:url}</th>
		<th>{lang:join_date}</th>
		<th>{lang:last_visit}</th>
	</tr>

{member_rows}

<tr>
<td class='memberlistFooter' colspan="9" align='center' valign='middle'>

<div class="defaultSmall">
<b>{lang:show}</b>

<select name='group_id' class='select'>
{group_id_options}
</select>

&nbsp; <b>{lang:sort}</b>

<select name='order_by' class='select'>
{order_by_options}
</select> 

&nbsp;  <b>{lang:order}</b>

<select name='sort_order' class='select'>
{sort_order_options}
</select> 

&nbsp; <b>{lang:rows}</b>

<select name='row_limit' class='select'>
{row_limit_options}
</select> 


&nbsp; <input type='submit' value='{lang:submit}' class='submit' />

</div>
</td>
</tr>
</table>

{if paginate}
<div class="itempadbig">
	<table cellpadding="0" cellspacing="0" border="0" class="paginateBorder">
	<tr>
	<td><div class="paginateStat">{current_page} {lang:of} {total_pages}</div></td>
	{pagination_links}
	</tr>
	</table>
</div>
{/if}

</form>


<!--- Begin Member Search -->

<script type="text/javascript">
<!--

var searchFieldCount = 1;

function add_search_field()
{
	if (document.getElementById('search_field_1'))
	{
		// Find last search field
		var originalSearchField = document.getElementById('search_field_1');
		searchFieldCount++;
		
		// Clone it, change the id
		var newSearchField = originalSearchField.cloneNode(true);
		newSearchField.id = 'search_field_' + searchFieldCount;
		
		// Zero the input and change the names of fields
		var newFieldInputs = newSearchField.getElementsByTagName('input');
		newFieldInputs[0].value = '';
		newFieldInputs[0].name = 'search_keywords_' + searchFieldCount;
		
		var newFieldSelects = newSearchField.getElementsByTagName('select');
		newFieldSelects[0].name = 'search_field_' + searchFieldCount;
		
		// Append it and we're done
		originalSearchField.parentNode.appendChild(newSearchField);
	}
}

function delete_search_field(obj)
{
	if (obj.parentNode && obj.parentNode.id != 'search_field_1')
	{
		obj.parentNode.parentNode.removeChild(obj.parentNode)
	}
}

//-->
</script>

<table class='tableborder' border='0' cellspacing='0' cellpadding='0' style='width:100%'>
<tr>
	<td class='memberlistHead'>{lang:member_search}</td>
</tr>
<tr>
	<td class='tableCellOne'>
		{form:form_declaration:do_member_search}
		
		<div id="member_search_fields">
		
		<div id="search_field_1" class="itempadbig">
		<input type="text" name="search_keywords_1" />
		<select name='search_field_1' class='select' >
		<option value='screen_name'>{lang:search_field}</option>
		<option value='screen_name'>{lang:mbr_screen_name}</option>
		<option value='email'>{lang:mbr_email_address}</option>
		<option value='url'>{lang:mbr_url}</option>
		<option value='location'>{lang:mbr_location}</option>
		{custom_profile_field_options}
		</select>
		<a href="#" onclick="add_search_field(); return false;" class="defaultBold">+</a>
		<a href="#" onclick="delete_search_field(this); return false;" class="defaultBold">-</a>
		</div>
		
		</div>
		
		<select name='search_group_id' class='select' >
		{group_id_options}
		</select>
		
		<div class="itempadbig">&nbsp; <input type='submit' value='{lang:search}' class='submit' /></div>
		
		</form>
	</td>
</tr>
</table>

EOF;
}
/* END */




//-------------------------------------
//  Memberlist Rows
//-------------------------------------

function memberlist_rows()
{
return <<< EOF
<tr>
	<td class='{member_css} fm-content-wrapper fm-member-name'>
		<a href="{path:profile}">{name}</a>
	</td>
	<td class='{member_css} fm-content-wrapper fm-member-posts'>
		{total_forum_posts}
	</td>
	
	
	<td class='{member_css} fm-content-wrapper fm-member-url'>{if url}<a href="{url}" target="_blank">{url}</a>{/if}</td>
	
	<td class='{member_css} fm-content-wrapper fm-member-join-date'>{join_date  format="%m/%d/%Y"}</td>
	<td class='{member_css} fm-content-wrapper fm-member-last-visit'>{last_visit  format="%m/%d/%Y"}</td>
</tr>
EOF;
}
/* END */




//-------------------------------------
//  AIM Console
//-------------------------------------

function aim_console()
{
return <<< EOF
<p class="fm-close-window">
	<a href="JavaScript:window.close();">{lang:close_window}</a>
</p>
<table width="118" cellspacing="0" cellpadding="0" border="0" id="fm-aim-console">
	<tr>
		<td width="118" height="46">
			<img src="{path:image_url}aim_head.gif" width="118" height="46" border="0" />
		</td>
	</tr>
	<tr>
		<td width="118" height="40">
			<a href="aim:goim?screenname={aol_im}&message=Hi.+Are+you+there?">
				<img src="{path:image_url}aim_im.gif" width="118" height="40" border="0" alt="{lang:am_online}" />
			</a>
		</td>
	</tr>
	<tr>
	<td width="118" height="40">
		<a href="aim:addbuddy?screenname={aol_im}">
			<img src="{path:image_url}aim_buddy.gif" width="118" height="40" border="0" alt="{lang:add_to_buddy}" />
		</a>
	</td>
	</tr>
	<tr>
	<td width="118" height="33">
		<a href="http://aim.aol.com/aimnew/NS/congratsd2.adp">
			<img src="{path:image_url}aim_footer.gif" width="118" height="33" border="0" />
		</a>
	</td>
</tr>
</table>
EOF;
}
/* END */




//-------------------------------------
//  ICQ Console
//-------------------------------------

function icq_console()
{
return <<< EOF
{form_declaration}

<table class="tableBorderLeft" cellpadding="0" cellspacing="0" border="0" width="560" align="center">
<tr>
<td class="profileHeadingBG" colspan="2"><div class="tableHeading">{lang:icq_console}</div>
</td>

</tr>
<tr>
<td class="tableCellOne">

<h3>{lang:recipient}&nbsp; {name}</h3>
<h3>{lang:icq_number}&nbsp; {icq}</h3>

<h3>{lang:subject}</h3>
<p>
<input type="text" name="subject" value="" style='width:100%' maxlength="80" class="input" size="70" /></p>
</p>

<h3>{lang:message}</h3>
<p>
<textarea name='body' style='width:100%' class='textarea' rows='8' cols='90'></textarea>
</p>

<div class="innerShade">
<p>{lang:message_disclaimer}</p>
<p class='highlight'>{lang:message_logged}</p>
</div>
<p><input type='checkbox' name='self_copy' value='y' />&nbsp;&nbsp;{lang:send_self_copy}</p>

<p><input type="submit" value="{lang:submit}" class="submit" /></p>
<div class="marginpad"><a href="JavaScript:window.close();">{lang:close_window}</a></div>
</td>
</tr>
</table>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Email Console
//-------------------------------------

function email_form()
{
return <<< EOF
{form_declaration}
	<div class="fm-header-wrapper">
		<a href="JavaScript:window.close();" class="fm-button">{lang:close_window}</a>
		<h3>{lang:email_console}</h3>
	</div>
	
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<th>
				{lang:recipient}
			</th>
			<td class="fm-content-wrapper">
				<strong>{name}</strong>
			</td>
		</tr>
		<tr>
			<th>
				<label for="fm-subject">{lang:subject}</label>
			</th>
			<td class="fm-content-wrapper">		
				<input type="text" name="subject" id="fm-subject" value="" maxlength="80" class="input" size="70" />
			</td>
		</tr>
		<tr>
			<th>
				<label for="fm-message">{lang:message}</label>
			</th>
			<td class="fm-content-wrapper">	
				<textarea name='message' id="fm-message" class='textarea' rows='8' cols='40'></textarea>
			</td>
		</tr>
		<tr>
			<th><label for="fm-self-copy">{lang:send_self_copy}</label></th>
			<td class="fm-content-wrapper">	
				<input type='checkbox' id="fm-self-copy" name='self_copy' value='y' />
			</td>
		</tr>
		
		<tr>
			<th></th>
			<td class="fm-content-wrapper fm-disclaimer">	
				<p class="fm-submit">
					<input type="submit" value="{lang:submit}" class="submit" /><br />
				</p>
				{lang:message_disclaimer}<br />
				{lang:message_logged}
			</td>
		</tr>
	</table>
	
	
</form>
EOF;
}
/* END */




//-------------------------------------
//  Email User Message
//-------------------------------------

function email_user_message()
{
return <<< EOF
<!-- no idea where this is called? -->
<p class='{css_class}'>
{lang:message}
</p>

<a href="JavaScript:window.close();" class="fm-button">{lang:close_window}</a></div>

</form>
EOF;
}
/* END */




//-------------------------------------
//  Emoticon Page
//-------------------------------------

function emoticon_page()
{
return <<< EOF
{include:html_header}
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
{include:smileys}
</table>
</body>
</html>
EOF;
}
/* END */



// ---------------------------------------------------
// ---------------------------------------------------
//  PRIVATE MESSAGES TEMPLATES
// ---------------------------------------------------
// ---------------------------------------------------


// -----------------------------------
//  Success Message - USER
// -----------------------------------
    
function message_success()
{
	return <<<WHOA
    	
<div class="fm-success-message fm-message">
	<p>{lang:message}</p>
</div>

WHOA;
    
}
/* END */
    
	
    
// -----------------------------------
//  Error Message - USER
// -----------------------------------
    
function message_error()
{
	return <<<WHOA
    	
<div class="fm-header-wrapper fm-error">
	<h3>{lang:heading}</h3>
</div>

<div class="fm-error-message fm-message">
	<p>{lang:message}</p>
</div>

<p class="fm-submit">
	<a href='javascript:history.go(-1)' style='text-transform:uppercase;'>&#171; {lang:back}</a>
</p>

WHOA;
    
}
/* END */

 	
 	
// -----------------------------------
//   Message Menu - User
// -----------------------------------   

function message_menu()
{
	return <<<EOT

<div class="fm-messages">
	<h4>{lang:private_messages} 
		<span class="fm-pm-collapse">[-]</span> 
		<span class="fm-pm-expand">[+]</span>
	</h4>
	<ul>
		{include:menu_items}
	</ul>
</div>
 
EOT;
 }
 /* END */
 
 
 
// -----------------------------------
//   Message Menu Rows
// -----------------------------------   

function message_menu_rows()
{
	return <<<EOT
    
<li><a href='{link}' onmouseover="window.status='{title}';" onmouseout="window.status='';" >{title}</a></li>
 
EOT;
 }
 /* END */
 
 
 
// -----------------------------------
//  Preview Template for User
// -----------------------------------   

function preview_message()
{
	return <<<EOT
 
 <div class="fm-header-wrapper">
 	<h3>{lang:preview_message}</h3>
 </div>
 
 <div class="fm-message">
 	<p>{include:parsed_message}</p>
 </div>
EOT;
    	
}
/* END */
 	
 	
 	
 	
// -----------------------------------
//  Compose Template for User
// -----------------------------------   

function message_compose()
{
    return <<<DOC

{include:hidden_js}
{include:search_js}
{include:spellcheck_js}
{include:text_counter_js}
{include:dynamic_address_book}
{include:submission_error}
{include:preview_message}
{form:form_declaration:messages}

<div class="fm-header-wrapper">
	<h3>{lang:new_message}</h3>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th>{include:search:recipients} {lang:message_recipients}</th>
		<td class="fm-content-wrapper">
			<textarea name='recipients' id='recipients' class='textarea' rows='2' cols='90' onkeyup='buddy_list(this.name);'>{input:recipients}</textarea>
		</td>
	</tr>
	<tr>
		<th>{include:search:cc} {lang:cc}</th>
		<td class="fm-content-wrapper">
			<textarea name='cc' id='cc' class='textarea' rows='2' cols='90' onkeyup='buddy_list(this.name);'>{input:cc}</textarea>
		</td>
	</tr>
	<tr>
		<th>{lang:message_subject}</th>
		<td class="fm-content-wrapper">
			<input type="text" class="input" name="subject" size="90" value="{input:subject}" />
		</td>
	</tr>
	<tr>
		<th>{lang:font_formatting}</th>
		<td class="fm-content-wrapper fm-formatting-buttons">
			
			<select name="size" class="select" onchange="selectinsert(this, 'size')" >
				<option value="0">{lang:size}</option>
				<option value="1">{lang:small}</option>
				<option value="3">{lang:medium}</option>
				<option value="4">{lang:large}</option>
				<option value="5">{lang:very_large}</option>
				<option value="6">{lang:largest}</option>
			</select>
			
			<select name="color" class="select" onchange="selectinsert(this, 'color')">
				<option value="0">{lang:color}</option>
				<option value="blue">{lang:blue}</option>
				<option value="green">{lang:green}</option>
				<option value="red">{lang:red}</option>
				<option value="purple">{lang:purple}</option>
				<option value="orange">{lang:orange}</option>
				<option value="yellow">{lang:yellow}</option>
				<option value="brown">{lang:brown}</option>
				<option value="pink">{lang:pink}</option>
				<option value="gray">{lang:grey}</option>
			</select>
			
			{include:html_formatting_buttons}
		</td>
	</tr>
	<tr>
		<th>Message</th>
		<td class="fm-content-wrapper">
			<textarea name='body' id='body' class='textarea' rows='20' cols='90' onkeydown='text_counter();' onkeyup='text_counter();'>{input:body}</textarea>
		</td>
	</tr>
	<tr>
		<th>{lang:characters}</th>
		<td class="fm-content-wrapper">
			<input type="text" class="input" name="charsleft" size="5" maxlength="4" value="{lang:max_chars}" readonly="readonly" />
		</td>
	</tr>
	<tr>
		<th>{lang:message_options}</th>
		<td class="fm-content-wrapper">
			<input type="checkbox" class="checkbox" name="sent_copy" value="y" {input:sent_copy_checked} /> {lang:sent_copy}
			<br />
			<input type="checkbox" class="checkbox" name="hide_cc" value="y" {input:hide_cc_checked} /> {lang:hide_cc}
		</td>
	</tr>
	{if attachments_allowed}
	<tr>
		<th>{lang:attachments}</th>
		<td class="fm-content-wrapper">
			{lang:max_size}&nbsp;{lang:max_file_size} {lang:kb}<br />
			<input type="file" name="userfile" size="20" class="input fm-file-upload" /><br />
			{lang:click_preview_to_attach}
		</td>
	</tr>
	{/if}
	{if attachments_exist}
	<tr>
		<th>{lang:attachments}</th>
		<td class="fm-content-wrapper">
			{include:attachments}
		</td>
	</tr>
	{/if}
</table>

	<p class="fm-submit">
		<input type="submit" name="submit" class="submit" value="{lang:send_message}" />
		<input type="submit" name="preview" class="submit" value="{lang:preview_message}" /> 
		<input type="submit" name="draft" class="submit" value="{lang:draft_message}" /> 
		
	</p>

</form>
 
DOC;
 
 }
 /* END */
 	
 	
// -----------------------------------
//  View Message - USER
// ----------------------------------- 
    
function view_message()
{
	return <<< EOF
		
{form:form_declaration:view_message}
{include:hidden_js}
{include:folder_pulldown:move}
{include:folder_pulldown:copy}

<div class="fm-header-wrapper">
	<h3>{lang:private_message}:<br /><strong>{include:subject}</strong></h3>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-private-message-details">
	<tr>
		<th>{lang:message_sender}</th>
		<th>{lang:message_date}</th>
		<th>{lang:message_recipients}</th>
		<th>{lang:cc}:</th>
	</tr>
	<tr>
		<td class="fm-content-wrapper">{include:sender}</td>
		<td class="fm-content-wrapper">{include:date}</td>
		<td class="fm-content-wrapper">{include:recipients}</td>
		<td class="fm-content-wrapper">{if show_cc}{include:cc}{/if}</td>
	</tr>
</table>
{if attachments_exist}
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row fm-private-message-attachments">
	
	<tr>
		<th scope="row">{lang:attachments}:</th>
		<td class="fm-content-wrapper">{include:attachment_links}</td>
	</tr>

</table>
	{/if}
<div class="fm-message">
	{include:parsed_message}
</div>

<p class="fm-submit">
	{form:reply_button} {form:reply_all_button} {form:forward_button} {form:move_button} {form:copy_button} {form:delete_button}
</p>


</form>

EOF;
	
}
/* END */
	
	
	
// ------------------------------
//  Core Folder Template - User
// ------------------------------
function message_folder()
{
	return <<<EOT
				

{include:hidden_js}
{include:toggle_js}

<div class="fm-header-wrapper fm-private-messages">
	<a href="{path:compose_message}" class="fm-button">{lang:compose_message}</a>
	<h3>{lang:folder_name}</h3>
	<p>{lang:storage_status}</p>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<td class="fm-content-wrapper">
		<table id="fm-mailbox-indicator" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td rowspan="2">
			{lang:storage_percentage}<br />
			<a href='{path:erase_messages}' onclick='if( ! confirm("{lang:erase_popup}")) return false;' class="fm-mailbox-empty-trash ">{lang:erase_messages}</a></td>
			<td colspan="3" id="fm-mailbox-indicator-bar">
				<div style="width:{image:messages_graph:width}px; 
				height:{image:messages_graph:height}px;">
			</td>
		</tr>
		<tr>
			<td class="fm-first">0%</td><td class="fm-second">50%</td><td class="fm-third">100%</td>
		</tr>
		</table>
		
		</td>
	</tr>
</table>

{form:form_declaration:modify_messages}

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-mailbox-table">
	<tr>
		<th colspan="2" class="fm-message-subject">{include:folder_pulldown:change}</th>
		<th class="fm-message-sender">{lang:message_sender}</th>
		<th class="fm-message-date">{lang:message_date}</th>
		<th class="fm-message-checkbox"><input class='checkbox' type='checkbox' name='toggleflag' value='' onclick="toggle(this);" /></th>
	</tr>
	{include:folder_rows}
	{if paginate}
	<tr>
		<td></td>
		<td colspan="4">
		 {include:pagination_link} 
		</td>
	</tr>
	{/if}
</table>

{include:folder_pulldown:move}

{include:folder_pulldown:copy}

	<p class="fm-submit">
		{form:copy_button}{form:move_button}{form:delete_button}
	</p>

</form>

EOT;

}
/* END */



// ----------------------------------------
//  Folder Rows - USER
// ----------------------------------------

function message_folder_rows()
{
	return <<<EOT
		
<tr>
	<td class="fm-message-status">{message_status}</td>
	<td><a href="{message_url}">{message_subject}</a></td>
	<td>{sender}</td>
	<td>{message_date}</td>
	<td><input type="checkbox" name="toggle[]" value="{msg_id}" /></td>
</tr>
		
EOT;

}
/* END */
	
	
	
// ----------------------------------------
//  No Folder Rows Template for Users
// ----------------------------------------

function message_no_folder_rows()
{
	return <<<EOT
<tr>
	<td colspan="5">{lang:no_messages}</td>
</tr>
EOT;
}
/* END */

	
	
	
// ---------------------------------
//  Search Members Template - User
// ---------------------------------
	
function search_members()
{
	return <<<EOT
	
{form:form_declaration:do_member_search}

<div class="fm-header-wrapper">
	<a href="JavaScript:window.close();" class="fm-button">{lang:close_window}</a>
	<h3>{lang:member_search}</h3>
</div>

{if message}
<div class="highlight">
{include:message}
</div>
{/if}

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th scope="row">{lang:screen_name}</th>
		<td class="fm-content-wrapper">
			<input type='text' name='screen_name' id='screen_name' value='' size='35' maxlength='100' class='input'  />
		</td>
	</tr>
	<tr>
		<th scope="row">{lang:email}</th>
		<td class="fm-content-wrapper">
			<input type='text' name='email' id='email' value='' size='35' maxlength='100' class='input'  />
		</td>
	</tr>
	<tr>
		<th scope="row">{lang:member_group}</th>
		<td class="fm-content-wrapper">
			<select name='group_id' class='select' >
				<option value='any'>{lang:any}</option>
				{include:member_group_options}
			</select>
		</td>
	</tr>
</table>

<p class="fm-submit">
	<input type="submit" value="{lang:submit}" class="submit" />
</p>

</form>
	
EOT;
}
/* END */
	
	

// -----------------------------------
//  Member Results Template - USER
// -----------------------------------   
    
function member_results()
{
	return <<<DOT
    
<script type="text/javascript"> 
//<![CDATA[
function insert_name(name)
{
	if (opener.document.getElementById('submit_message').{which_field}.value != '')
	{
		opener.document.getElementById('submit_message').{which_field}.value += ', ';
	}
	opener.document.getElementById('submit_message').{which_field}.value += name;
	window.close();
}
//]]>
</script>

<div class="fm-header-wrapper">
	<a class="fm-button" href="JavaScript:window.close();opener.document.getElementById('submit_message').{which_field}.focus();">{lang:close_window}</a>
	<h3>{lang:search_results}</h3>
</div>

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<td class="fm-content-wrapper">
			{include:search_results}
		</td>
	</tr>
</table>

{lang:insert_member_instructions}

<a href="{path:new_search_url}">{lang:new_search}</a>

DOT;

}
/* END */



// -----------------------------------
//  Member Results Row Template - USER
// -----------------------------------   
    
function member_results_row()
{
	return <<<DOT
<div class="fm-member-results-row">
	{item}
</div>
DOT;

}
/* END */


	
	
//-------------------------------------
//  Submission Error Message - USER
//-------------------------------------

function message_submission_error()
{
	return <<< EOF
		
<div class="fm-header-wrapper">
	<h3>{lang:error}</h3>
</div>
<div class="fm-error-message fm-message">
	<p>{lang:error_message}</p>
</div>
	
EOF;

}
/* END */

	
	
//----------------------------------------
// 	Attachment Links - USER
//----------------------------------------

function message_attachment_link()
{
	return <<<EOT
<div class='fm-attachment-download'>
	<img src="{path:image_url}marker_file.gif" width="9" height="9" border="0" alt="" title="" />
	<a href='{path:download_link}' title='{input:attachment_name}'>{input:attachment_name} ({input:attachment_size} {lang:file_size_unit})</a>
</div>	
EOT;
}
/* END */
	
	
	
//----------------------------------------
// 	Attachments CP
//----------------------------------------

function message_attachments()
{
		return <<< EOF
		
<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
	<tr>
		<th class="fm-filename">{lang:file_name}</th>
		<th class="fm-filesize">{lang:file_size}</th>
		<th class="fm-remove-heading">{lang:remove}</th>
	</tr>
	{include:attachment_rows}
</table>

EOF;

}
/* END */


//----------------------------------------
// 	Attachment Rows CP
//----------------------------------------

function message_attachment_rows()
{
		return <<< EOF
<tr>
	<td class="fm-content-wrapper">{input:attachment_name}</td>
	<td class="fm-content-wrapper">{input:attachment_size} {lang:file_size_unit}</td>
	<td class="fm-content-wrapper"><input type="submit" name="remove[{input:attachment_id}]" class="submit" value="{lang:remove}" /></td>
</tr>
EOF;

}
/* END */



// -----------------------------------
//  Edit Folders Form - USER
// -----------------------------------
    
function message_edit_folders()
{	
	return <<<DUDE
    	
{include:success_message}

<div class="fm-header-wrapper">
	<h3>{lang:edit_folders}</h3>
	<p>{lang:folder_directions}</p>
</div>

{form:form_declaration:edit_folders}

	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid">
		<tr>
			<th>{lang:folder_name}</th>
		</tr>
		{include:current_folders}
		{include:new_folder}
	</table>

	<p class="fm-submit">
		<input  type='submit' class='submit' value='{lang:submit}'  />
	</p>
</form>

DUDE;
}
/* END */
    
    
    
// -----------------------------------
//  Display Folder Template - USER
// -----------------------------------
    
function message_edit_folders_row()
{
	return <<<WHOA
<tr>
	<td>
		<input type='text' name='folder_{input:folder_id}' id='folder_{input:folder_id}' value='{input:folder_name}' size='20' maxlength='20' class='input'/> 
	</td>
</tr>
    
WHOA;
    
}
	
	
	
// -----------------------------------
//  Block and Buddy List - USER
// -----------------------------------   
    
function buddies_block_list()
{
	return <<<JACK

{include:toggle_js}
{include:buddy_search_js}
<div class="fm-header-wrapper">
	<h3>{include:member_search} {lang:list_title}</h3>
</div>

{form:form_declaration:list}
<table border='0' cellspacing='0' cellpadding='0' class='fm-blocked-list' >
	<tr>
		<td>
		{lang:screen_name}
		</td>
		<td>
			{lang:member_description}
		</td>
		<td>
			<input class='checkbox' type='checkbox' name='toggleflag' value='' onclick="toggle(this);" />
		</td>
	</tr>
	{include:list_rows}
</table>

<p class="fm-submit">
{form:add_button} {form:delete_button}
</p>

</form>
    	
JACK;

}
/* END */
    
    
    
    
// -----------------------------------
//  Block and Buddy List Rows - USER
// -----------------------------------   
    
function buddies_block_row()
{
	return <<<DOG
<tr>
	<td class='{style}'>
		<a href="{path:send_pm}" title="{lang:private_message} - {screen_name}">{screen_name}</a>
	</td>
	<td class='{style}'>
		{member_description}
	</td>
	<td class='{style}'>
		<input class='checkbox' type='checkbox' name='toggle[]' value='{listed_id}'  />
	</td>
</tr>
    	
DOG;

}
/* END */
	
	
// ----------------------------------------
//  Empty List - USER
// ----------------------------------------

function empty_list()
{
	return <<<TOY
<tr>
	<td colspan='3'>
		{lang:empty_list}
	</td>
</tr>
  	
TOY;

}
/* END */




// -----------------------------------
//  Bulletin Board - USER
// -----------------------------------   
    
function bulletin_board()
{
	return <<<ONEIL

	
{if message}
<div class='tableCellOne'><div class='success'>{include:message}</div></div>
{/if}

<div class="fm-header-wrapper">
	<a href='{path:send_bulletin}' class="fm-button add">{lang:send_bulletin}</a>
	<h3>{lang:bulletin_board}</h3>
</div>

{if can_post_bulletin}
<p class="fm-post-bulletin">
	
</p>
{/if}

{if no_bulletins}
<p class="fm-notice">{lang:message_no_bulletins}</p>
{/if}

{if bulletins}
{include:bulletins}
{/if}

{if paginate}
<div class="fm-pagination-wrapper">
	<p class="fm-pagination">{include:pagination_link}</p>
</div>
{/if}
    	
ONEIL;

}
/* END */


// -----------------------------------
//  Single Bulletin
// -----------------------------------   
    
function bulletin()
{
	return <<<JAFFA

<div class="{style} fm-bulletin" id="bulletin_div_{bulletin_id}">

<h4>{lang:message_sender}: <strong>{bulletin_sender}</strong></h4>
<p class="fm-meta">{lang:message_date}</span>: {bulletin_date}</p>


<textarea name='bulletin_{bulletin_id}' readonly='readonly' class='textarea' rows='8' cols='90'>{bulletin_message}</textarea>
{if can_delete_bulletin}
	<a href='{path:delete_bulletin}' class="fm-button delete" onclick='if( ! confirm("{lang:delete_bulletin_popup}")) return false;'>
	{lang:delete_bulletin}
	</a>
</p>
{/if}
</div>
    	
JAFFA;

}
/* END */



//-------------------------------------
//  Bulletin Sending Form
//-------------------------------------

function bulletin_form()
{
return <<< EOF

{form:form_declaration:sending_bulletin}
	{if message}
	{include:message}
	{/if}
	
	<div class="fm-header-wrapper">
		<h3>{lang:send_bulletin}</h3>
	</div>
	
	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	
		<tr>
			<th>
				{lang:member_group}
			</th>
			<td class='tableCellOne'>
				<select name="group_id">
					{group_id_options}
				</select>
			</td>
		</tr>
		<tr>
			<th>
				{lang:bulletin_message}
			</th>
			<td>
				<textarea name='bulletin_message' class='textarea' rows='10' cols='60'></textarea>
			</td>
		</tr>
		<tr>
			<th>
				{lang:bulletin_date}
			</th>
			<td>
				<input type="text" class="input" name="bulletin_date" size="20" value="{input:bulletin_date}" maxlength="50" />
			</td>
		</tr>
		<tr>
			<th>
				{lang:bulletin_expires}
			</th>
			<td>
				<input type="text" class="input" name="bulletin_expires" size="20" value="{input:bulletin_expires}" maxlength="50" />
			</td>
		</tr>
	</table>
	<p class="fm-submit">
		<input type='submit' class='submit' value='{lang:submit}' />
	</p>
</form>
EOF;
}
/* END */


/* -------------------------------------
/*  delete_confirmation_form
/* -------------------------------------*/

function delete_confirmation_form()
{
return <<< EOF

{form_declaration}
	<div class="fm-header-wrapper">
		<h3>{lang:mbr_delete}</h3>
		<p>{lang:confirm_password}</p>
	</div>

	<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
		<tr>
			<th>{lang:password}</th>
			<td class="fm-content-wrapper">
				<input type="password" class="input" name="password" size="20" value="" maxlength="32" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				{lang:mbr_delete_blurb}<br />
				{lang:mbr_delete_warning}
			</td>
		</tr>
	</table>
	<p class="fm-submit">
		<input type="submit" class="submit" value="{lang:submit}" />
	</p>
</form>

EOF;
}
/* END */


/* -------------------------------------
/* Edit Ignore List Form
/* -------------------------------------*/

function edit_ignore_list_form()
{
return <<<PHARLEY


{include:toggle_js}

	<div class="fm-header-wrapper">
		<h3>{include:member_search} {lang:ignore_list}</h3>
	</div>
{if success_message}
<div class="fm-success-message fm-message">
	<p>{lang:message}</p>
</div>
{/if}

{form:form_declaration}

<table border='0' cellspacing='0' cellpadding='0' class="fm-data-grid fm-has-th-row">
	<tr>
		<th>{lang:screen_name}</th>
		<th></th>
	</tr>
	{include:edit_ignore_list_rows}
</table>

<p class="fm-submit">
	{form:add_button} {form:delete_button}
</p>

</form>

PHARLEY;
}
/* END */


/* -------------------------------------
/* Edit Ignore List Rows
/* -------------------------------------*/

function edit_ignore_list_rows()
{
return <<<PHARLEY
<tr>
	<td class="{class}"><a href="{path:profile_link}">{name}</a></td>
	<td class="{class}"><input type='checkbox' name='toggle[]' value='{member_id}' /> </td>
</tr>
PHARLEY;
}
/* END */

}
// END CLASS
?>