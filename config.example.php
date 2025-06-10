<?php
$servername = getenv('MYSQLHOST') ?: 'mysql.railway.internal'; // Local fallback
$username = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: ''; // Empty for local, Railway provides via env
$dbname = getenv('MYSQLDATABASE') ?: 'railway'; // Match your local DB name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

define('STRIPE_SECRET_KEY', getenv('STRIPE_SECRET_KEY') ?: 'sk_test_51QIU7iP2r0WR6GXHappitDP6fV4GAC9MxyijEiPOAfDQMUJqXTtXsXM8Djk9A2TiS8l48aayX4yqcw6RNxna2Buq007piWt6dp');
define('STRIPE_PUBLISHABLE_KEY', getenv('STRIPE_PUBLISHABLE_KEY') ?: 'pk_test_51QIU7iP2r0WR6GXHIurw9KMaAnl64apJAI2ZXc65KvV4fYnhlndPyONGodVQ5mhoCTTTsCd5FkljMnWBK1rCiB4K00xWRM48ik');

error_reporting(E_ALL);
ini_set('display_errors', getenv('APP_ENV') === 'development' ? 1 : 0);
?>
