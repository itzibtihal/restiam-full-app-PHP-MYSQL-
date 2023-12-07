<?php

require __DIR__ .  '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$serverName= $_ENV["DB_SERVERNAME"];
$name= $_ENV["DB_NAME"];
$userName= $_ENV["DB_USERNAME"];
$password= $_ENV["DB_PASSWORD"];


// echo $_ENV["DB_SERVERNAME"];

$conn = mysqli_connect($serverName, $userName, $password, $name);
if (!$conn) {
    die("faild to connect to database: " . mysqli_connect_error());
} 

// else {
//     echo "connected succesfully";
// }