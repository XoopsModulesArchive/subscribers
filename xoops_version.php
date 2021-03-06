<?php
if (!defined("XOOPS_ROOT_PATH")) {
    die("XOOPS root path not defined");
}

$modversion['name'] = _MI_SUBSCRIBERS_MD_NAME;
$modversion['version'] = 1.2;
$modversion['description'] = _MI_SUBSCRIBERS_MD_DSC;
$modversion['author'] = "Trabis - www.xuups.com, credit: www.arabxoops.com";
$modversion['credits'] = "Mowaffaq & Mariane - www.arabxoops.com";
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = "www.gnu.org/licenses/gpl-2.0.html/";
$modversion['official'] = 0;
$modversion['dirname'] = "subscribers";

$modversion['image'] = "images/module_logo.gif";

$modversion['dirmoduleadmin'] = '/Frameworks/moduleclasses/moduleadmin';
$modversion['icons16'] = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = '../../Frameworks/moduleclasses/icons/32';

//about
$modversion['demo_site_url'] = "";
$modversion['demo_site_name'] = "";
$modversion['module_website_url'] = "http://xoops.org";
$modversion['module_website_name'] = "XOOPS";
$modversion['release_date'] = "2012/04/11";
$modversion['module_status'] = "Beta";
$modversion["author_website_url"] = "http://www.myweb.ne.jp";
$modversion["author_website_name"] = "Kazumi Ono";
$modversion['min_php']='5.2';
$modversion['min_xoops']="2.5.0";
$modversion['min_admin']='1.1';
$modversion['min_db']= array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "subscribers_user";
$modversion['tables'][1] = "subscribers_waiting";

// Search
$modversion['hasSearch'] = 0;
// Menu
$modversion['hasMain'] = 1;
$modversion['system_menu'] = 1;

// Templates
$i = 0;
$i++;
$modversion['templates'][$i]['file'] = 'subscribers_index.html';
$modversion['templates'][$i]['description'] = _MI_SUBSCRIBERS_PAGE_INDEX;


// Blocks
$i = 0;
$i++;
$modversion['blocks'][$i]['file'] = "subscribers_add.php";
$modversion['blocks'][$i]['name'] = _MI_SUBSCRIBERS_BLK_ADD;
$modversion['blocks'][$i]['description'] = "Subscription block";
$modversion['blocks'][$i]['show_func'] = "subscribers_add_show";
$modversion['blocks'][$i]['template'] = "subscribers_add.html";

// Configs
$i = 0;

//default value for Xoops editor
xoops_load('XoopsEditorHandler');
$editor_handler = XoopsEditorHandler::getInstance();

$i++;
$modversion['config'][$i]['name'] = 'editor';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_EDITOR';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_EDITOR_DSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array_flip($editor_handler->getList());
$modversion['config'][$i]['default'] ='dhtmltextarea';

//default value for country
include_once XOOPS_ROOT_PATH . '/class/xoopslists.php';
$countries = XoopsLists::getCountryList();
unset($countries[""]);

$i++;
$modversion['config'][$i]['name'] = 'country';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_COUNTRY';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_COUNTRY_DSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array_flip($countries);
$modversion['config'][$i]['default'] ='PT';

$i++;
$modversion['config'][$i]['name'] = 'fromname';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_FROMNAME';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_FROMNAME_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'fromemail';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_FROMEMAIL';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_FROMEMAIL_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'emailsperpack';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_EMAILSPERPACK';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_EMAILSPERPACK_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;

$i++;
$modversion['config'][$i]['name'] = 'timebpacks';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_TIMEBPACKS';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_TIMEBPACKS_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 3600;

$i++;
$modversion['config'][$i]['name'] = 'captcha';
$modversion['config'][$i]['title'] = '_MI_SUBSCRIBERS_CONF_CAPTCHA';
$modversion['config'][$i]['description'] = '_MI_SUBSCRIBERS_CONF_CAPTCHA';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 2;
$modversion['config'][$i]['options'] = array(
    _MI_SUBSCRIBERS_CONF_CAPTCHA_CHOICE1 => 1,
    _MI_SUBSCRIBERS_CONF_CAPTCHA_CHOICE2 => 2,
    _MI_SUBSCRIBERS_CONF_CAPTCHA_CHOICE3 => 3
);
?>