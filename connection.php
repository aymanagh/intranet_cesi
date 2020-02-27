<?php

//Configuration Connection Database
define("USER", 'root');
define("PASSWORD", '');
define("DSN", 'mysql:host=localhost;dbname=intranet_cesi;port=3306');

try {
    $pdo = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $e) {
    die("Error Database Connection! : " . $e->getMessage());
}
?>
