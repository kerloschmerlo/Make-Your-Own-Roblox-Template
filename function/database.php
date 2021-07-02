<?php

$pdo = null;

try {
    $pdo = new PDO("mysql:dbname=;host=localhost", "", "");
    $stmt = $pdo->prepare("SELECT * FROM (TABLE HERE!!!)");
    $stmt->execute();
    $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!isset($stmt)) {
        die("There was an issue connecting to the database!");
    }
} catch(PDOException $e) {
    die("There was an issue connecting to the database!");
}

?>




