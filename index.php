<?php

require_once "libs/Smarty.class.php";

$smarty = new Smarty();

$arr = [
    [
        'name' => 'Viktor',
        'age' => 27
    ],
    [
        'name' => 'Alexa',
        'age' => 20
    ]
];

$smarty->setTemplateDir('templates');
$smarty->assign('name', 'Viktor');
$smarty->assign('items', $arr);
$smarty->display('index.tpl');