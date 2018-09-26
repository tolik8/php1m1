<?php

$routes = [
    "/"         => "home.php",
    "/about"    => "about.php",
    "/show"     => "show.php",
    "/create"   => "create.php",
    "/edit"     => "edit.php",
    "/delete"   => "delete.php",
    "/store"    => "store.php",
    "/update"   => "update.php",
    "/delete"   => "delete.php",
];

$uri = $_SERVER['REQUEST_URI'];
$position = stripos($uri, '?');

if ($position === false) {
    $route = $uri;
} else {
    $route = substr($uri, 0, $position);
}

if (array_key_exists($route, $routes)) {
    include __DIR__ . '/../control/' . $routes[$route]; exit;
} else {
    include __DIR__ . '/../404.php'; exit;
}
