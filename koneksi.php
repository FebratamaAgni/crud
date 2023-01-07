<?php

/**
 * using mysqli_connect for database connection
 */

$host = 'localhost';
$table = 'crud';
$user = 'root';
$password = '090807';

$mysqli = mysqli_connect($host, $user, $password, $table);
