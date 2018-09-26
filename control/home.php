<?php

include __DIR__ . '/functions.php';
$db = include __DIR__ . '/../database/start.php';
include __DIR__ . '/smarty.php';

$posts = $db->getAll('posts');

$smarty->assign('posts', $posts);
$smarty->display('home.tpl');