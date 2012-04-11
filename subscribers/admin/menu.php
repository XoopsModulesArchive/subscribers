<?php
//  Author: Trabis
//  URL: http://www.xuups.com
//  E-Mail: lusopoemas@gmail.com

defined('XOOPS_ROOT_PATH') or die('Restricted access');

include_once dirname(dirname(__FILE__)) . '/include/functions.php';

$path = dirname(dirname(dirname(dirname(__FILE__))));
//global $xoopsModule;
$xoopsModuleConfig =& subscribers_getModuleConfig(); //must come first
$xoopsModule =& subscribers_getModuleHandler();

$pathIcon32 = $xoopsModule->getInfo('icons32');
$pathLanguage    = $path . $xoopsModule->getInfo('dirmoduleadmin');

if (!file_exists($fileinc = $pathLanguage . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/' . 'main.php')) {
    $fileinc = $pathLanguage . '/language/english/main.php';
}
include_once $fileinc;

// Index
$adminmenu = array();
$i = 0;
$adminmenu[$i]["title"] = _AM_MODULEADMIN_HOME;
$adminmenu[$i]["link"]  = "admin/index.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/home.png';

// User
$i++;
$adminmenu[$i]['title'] = _MI_SUBSCRIBERS_ADMENU_USER;
$adminmenu[$i]['link'] = "admin/admin_user.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/users.png';

// Send
$i++;
$adminmenu[$i]['title'] = _MI_SUBSCRIBERS_ADMENU_SEND;
$adminmenu[$i]['link'] = "admin/admin_send.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/mail_foward.png';

// Waiting
$i++;
$adminmenu[$i]['title'] = _MI_SUBSCRIBERS_ADMENU_WAITING;
$adminmenu[$i]['link'] = "admin/admin_waiting.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/exec.png';

// Export
$i++;
$adminmenu[$i]['title'] = _MI_SUBSCRIBERS_EXPORT;
$adminmenu[$i]['link'] =  'admin/admin_export.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/export.png';

$i++;
$adminmenu[$i]["title"] = _AM_MODULEADMIN_ABOUT;
$adminmenu[$i]["link"]  = "admin/about.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/about.png';

//$subscribers_adminmenu = $adminmenu;

//if (isset($xoopsModule) && $xoopsModule->getVar('dirname') == basename(dirname(dirname(__FILE__)))) {
//    $subscribers_url = XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname');
//
//    $i = 0;
//    $subscribers_headermenu[$i]['title'] = _AM_SUBSCRIBERS_GOMOD;
//    $subscribers_headermenu[$i]['link'] = XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname');
//
//    $i++;
//    $subscribers_headermenu[$i]['title'] = _AM_SUBSCRIBERS_BLOCKS;
//    $subscribers_headermenu[$i]['link'] = '../../system/admin.php?fct=blocksadmin&amp;selvis=-1&amp;selmod=-2&amp;selgrp=-1&amp;selgen=' . $xoopsModule->getVar('mid');
//
//    $i++;
//    $subscribers_headermenu[$i]['title'] = _PREFERENCES;
//    $subscribers_headermenu[$i]['link'] = '../../system/admin.php?fct=preferences&op=showmod&amp;mod='. $xoopsModule->getVar('mid');
//
//    $i++;
//    $subscribers_headermenu[$i]['title'] = _AM_SUBSCRIBERS_UPDATE_MODULE;
//    $subscribers_headermenu[$i]['link'] = XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&amp;op=update&amp;module=' . $xoopsModule->getVar('dirname');
//
//    $i++;
//    $subscribers_headermenu[$i]['title'] = _AM_SUBSCRIBERS_EXPORT;
//    $subscribers_headermenu[$i]['link'] = XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname') . '/admin/admin_export.php';
//
//}
//?>
