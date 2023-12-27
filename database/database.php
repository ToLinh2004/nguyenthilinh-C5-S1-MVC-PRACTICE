<?php

$hostname = "localhost";
$database = "demo_db";
$username = "root";
$password = "mysql";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, $username, $password);
