<?php
//  Author: Trabis
//  URL: http://www.xuups.com
//  E-Mail: lusopoemas@gmail.com

include_once 'admin_header.php';
xoops_cp_header();

$index_admin = new ModuleAdmin();

echo $index_admin->addNavigation('index.php');
echo $index_admin->renderIndex();

include 'admin_footer.php';
xoops_cp_footer();
