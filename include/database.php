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

function db_get_one_random_partial_value($class) {
    global $db;
    $query = $db->prepare("SELECT value FROM sentence_partials WHERE class = :class ORDER BY RAND() LIMIT 1;");
    $query->execute(["class" => $class]);
    $result = $query->fetch();
    return $result['value'];
}

?>
