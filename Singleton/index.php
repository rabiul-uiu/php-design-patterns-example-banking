<?php
require_once 'Database.php';

// Get the singleton instance
$db = Database::getInstance();

// Example query to fetch data from a table
$sql = "SELECT * FROM your_table_name";
$result = $db->query($sql);

foreach ($result as $row) {
    print_r($row);
}
