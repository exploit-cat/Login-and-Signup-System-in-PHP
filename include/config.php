<?php

session_start();

$DB_NAME = 'project';
$DB_USER = 'root';
$DB_PASS = '';
$DB_HOST = 'localhost';

$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

?>