<?php
//  Author: Trabis
//  URL: http://www.xuups.com
//  E-Mail: lusopoemas@gmail.com

$path = dirname(dirname(dirname(dirname(__FILE__))));
include_once $path . '/mainfile.php';
include_once $path . '/include/cp_functions.php';
require_once $path . '/include/cp_header.php';

//include_once dirname(dirname(dirname(dirname(__FILE__)))) . '/mainfile.php';
include_once dirname(dirname(__FILE__)) . '/include/functions.php';
//include_once XOOPS_ROOT_PATH . '/include/cp_functions.php';


//$xoopsModuleConfig =& subscribers_getModuleConfig(); //must come first
//$xoopsModule =& subscribers_getModuleHandler();

global $xoopsModule;
$thisModuleDir = $GLOBALS['xoopsModule']->getVar('dirname');
$thisModulePath = dirname(dirname(__FILE__));

$myts =& MyTextSanitizer::getInstance();

if ($xoopsUser) {
    $moduleperm_handler =& xoops_gethandler('groupperm');
    if (!$moduleperm_handler->checkRight('module_admin', $xoopsModule->getVar( 'mid' ), $xoopsUser->getGroups())) {
        redirect_header(XOOPS_URL, 1, _NOPERM);
        exit();
    }
} else {
    redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
    exit();
}

if (!isset($xoopsTpl) || !is_object($xoopsTpl)) {
    include_once XOOPS_ROOT_PATH . '/class/template.php';
    $xoopsTpl = new XoopsTpl();
}

//xoops_loadLanguage('admin', 'subscribers');
//xoops_loadLanguage('modinfo', 'subscribers');

// Load language files
xoops_loadLanguage('admin', $thisModuleDir);
xoops_loadLanguage('modinfo', $thisModuleDir);
xoops_loadLanguage('main', $thisModuleDir);

$pathIcon16 = '../'.$xoopsModule->getInfo('icons16');
$pathIcon32 = '../'.$xoopsModule->getInfo('icons32');
$pathModuleAdmin = $xoopsModule->getInfo('dirmoduleadmin');

if ( file_exists($GLOBALS['xoops']->path($pathModuleAdmin.'/moduleadmin.php'))){
        include_once $GLOBALS['xoops']->path($pathModuleAdmin.'/moduleadmin.php');
    }else{
        redirect_header("../../../admin.php", 5, _AM_XOOPSMEMBERS_MODULEADMIN_MISSING, false);
    }