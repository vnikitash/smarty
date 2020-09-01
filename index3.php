<?php

require_once "libs/Smarty.class.php";

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->assign('c', 'red');
$smarty->display('1.tpl');