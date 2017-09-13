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
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(1);
}

// TODO: idiogmify

// Fetch the values of the given $class from the database
function db_cache_request($class)
{
    global $db;
    $query = $db->prepare("SELECT value FROM sentence_partials WHERE class = :class;");
    $query->execute(["class" => $class]);
    $result = $query->fetchAll();
    return array_map(function ($e) {
        return $e["value"];
    }, $result);
}

// Fetch some data from the cache / db
function db_cache_get($class, $lines = 1, $order = "random", $unique = false)
{
    static $db_cache = array();
    if (!array_key_exists($class, $db_cache)) {
        $db_cache[$class] = db_cache_request($class); // fetch data if no already done
    }
    $class_data = $db_cache[$class];

    if ($class_data == null) {
        throw new Exception("Class $class does not exists.");
    }
    if (empty($class_data)) {
        throw new Exception("Class $class does not contain anything.");
    }

    if ($lines == "all") {
        $lines = count($class_data);
    }
    if ($lines < 1) {
        throw new Exception("You must request more than $lines lines.");
    }

    if ($order != "random") { // only allow random for now
        throw new Exception("You cannot request the order $order, only \"random\" is valid.");
    }

    if ($lines == 1) {
        return $class_data[rand(0, count($class_data) - 1)];
    } else {
        if ($unique == true) {
            shuffle($class_data);
            return array_slice($class_data, 0, $lines - 1);
        } else {
            $return_data = array();
            for ($i = 0; $i < $lines; $i++) {
                $random_value = $class_data[rand(0, count($class_data)-1)];
                array_push($return_data, $random_value); // it might use lot of random
            }
            return $return_data;
        }
    }
}

function db_get_one_random_partial_value($class)
{
    //global $db;
    //$query = $db->prepare("SELECT value FROM sentence_partials WHERE class = :class ORDER BY RAND() LIMIT 1;");
    //$query->execute(["class" => $class]);
    //$result = $query->fetch();
    //return $result["value"];
    return db_cache_get($class);
}

function db_get_random_partial_values($class, $limitn = "all")
{
    // global $db;
    // $query = "";
    // if ($limitn == null) {
    //   $query = $db->prepare("SELECT value FROM sentence_partials WHERE class = :class ORDER BY RAND();");
    // } else {
    //   $query = $db->prepare("SELECT value FROM sentence_partials WHERE class = :class ORDER BY RAND() LIMIT $limitn;");
    // }
    // $query->execute(["class" => $class]);
    // $result = $query->fetchAll();
    // return array_map(function ($e) {
    //   return $e["value"];
    // }, $result);
    return db_cache_get($class, $limitn);
}
