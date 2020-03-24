<?php

function connectionPDO(){

    //Configuration Connection Database
 
    //test
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=intranet_cesi;port=3308', 'root', '');
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

