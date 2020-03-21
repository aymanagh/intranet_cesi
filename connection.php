<?php

function connectionPDO(){
    //Configuration Connection Database
    define("USER", 'root');
    define("PASSWORD", 'root');
    define("DSN", 'mysql:host=localhost;dbname=intranet_cesi;port=3306');

    try {
        $pdo = new PDO(DSN, USER, PASSWORD);
        return $pdo;
    } catch (PDOException $e) {
        die("Error Database Connection! : " . $e->getMessage());
    }
}

function closePDO($pdo){
    unset($pdo);
}
?>
