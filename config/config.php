<?php

session_start();

require_once __DIR__ . '/../includes/activity-logger.php';

// Base URL
define('BASE_URL', 'http://localhost/IT34A');

// Database settings
define('DB_HOST', 'localhost');
define('DB_NAME', 'IT34A');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>