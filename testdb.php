<?php
require 'config.php';

if ($conn->connect_error) {
    echo "❌ Database connection failed: " . $conn->connect_error;
} else {
    echo "✅ Successfully connected to the database!";
}
?>
