<?php
$servername = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$username = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: 'dlZPiTEgwzYLaBxBpBHwGGVJgUzxKCPN';
$dbname = getenv('MYSQLDATABASE') ?: 'railway';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

define('STRIPE_SECRET_KEY', getenv('STRIPE_SECRET_KEY') ?: '');
define('STRIPE_PUBLISHABLE_KEY', getenv('STRIPE_PUBLISHABLE_KEY') ?: '');

error_reporting(E_ALL);
ini_set('display_errors', getenv('APP_ENV') === 'development' ? 1 : 0);
?>