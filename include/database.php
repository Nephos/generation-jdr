<?php

global $db;
global $db_servername;
global $db_database;
global $db_username;
global $db_password;
include_once('database_ids.php');

try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_database", $db_username, $db_password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(1);
}

?>
