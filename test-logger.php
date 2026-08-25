<?php

// Load configuration and database connection
require_once __DIR__ . '/config/config.php';

// Test database connection
echo "<h2>Database Connected Successfully!</h2>";
echo "<p>Database: <strong>" . DB_NAME . "</strong></p>";

// Test activity logger
if (function_exists('logActivity')) {

    $result = logActivity(
        $pdo,
        null,
        'test@example.com',
        'TEST_ACTIVITY',
        'success'
    );

    if ($result) {
        echo "<h3>Activity log inserted successfully!</h3>";
    } else {
        echo "<h3>Activity log failed to insert.</h3>";
    }

} else {

    echo "<h3>Activity logger function not found.</h3>";

}

?>