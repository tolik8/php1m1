<?php

include __DIR__ . '/functions.php';
$db = include __DIR__ . '/../database/start.php';

$db->create('posts', [
    'title' => $_POST['title']
]);

header('Location: /');