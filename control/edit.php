<?php

include __DIR__ . '/functions.php';
$db = include __DIR__ . '/../database/start.php';
include __DIR__ . '/smarty.php';

$id = $_GET['id'];

$post = $db->getOne('posts', $id);

$smarty->assign('post', $post);
$smarty->display('edit.tpl');