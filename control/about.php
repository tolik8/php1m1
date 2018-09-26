<?php

include __DIR__ . '/functions.php';
$db = include __DIR__ . '/../database/start.php';
include __DIR__ . '/smarty.php';



$smarty->display('about.tpl');