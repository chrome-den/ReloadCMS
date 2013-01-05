<?php 
////////////////////////////////////////////////////////////////////////////////
//   Copyright (C) ReloadCMS Development Team                                 //
//   http://reloadcms.com                                                     //
//   This product released under GNU General Public License v2                //
////////////////////////////////////////////////////////////////////////////////
$MODULES[$category][0] = __('Users configuration');
if($system->checkForRight('USERS')) {
    $MODULES[$category][1]['fields'] = __('Additional profile fields');
    $MODULES[$category][1]['profiles'] = __('Manage users');
	$MODULES[$category][1]['bans'] = __('Manage bans');
	$MODULES[$category][1]['sendmail'] = __('Send e-mail');
}
?>