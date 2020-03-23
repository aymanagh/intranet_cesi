<?php

function connectionPDO(){
    //Configuration Connection Database

    define("USER", 'root');
    define("PASSWORD", 'root');
    define("DSN", 'mysql:host=localhost;dbname=intranet_cesi;port=3306');

/*     define("USER", 'root');
    define("PASSWORD", '');
    define("DSN", 'mysql:host=localhost;dbname=intranet_cesi;port=3306'); */

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

function executeSelectQueryMSQL($stmt) {
    $stmt->execute();
    $resultset = $stmt->fetchAll(PDO::FETCH_ASSOC);    

    if (!empty($resultset)) {
        return $resultset;
    } else {
        return "Empty";
    }
}
?>

