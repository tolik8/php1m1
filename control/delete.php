<?php

include __DIR__ . '/functions.php';
$db = include __DIR__ . '/../database/start.php';

$id = $_GET['id'];

$db->delete('posts', $id);

header('Location: /');