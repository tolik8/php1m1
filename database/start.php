<?php
$config = include __DIR__ . '/../control/config.php';
include 'QueryBuilder.php';
include 'Connection.php';

return new QueryBuilder(
    Connection::make($config['database'])
);
