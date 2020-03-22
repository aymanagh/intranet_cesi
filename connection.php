<?php

function connectionPDO(){
    //Configuration Connection Database
    define("USER", 'root');
    define("PASSWORD", '');
    define("DSN", 'mysql:host=localhost;dbname=intranet_cesi;port=3308');

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

    $meta = $stmt->result_metadata();
    while($field = $meta->fetch_field()){
        $params[] = &$row[$field->name];
    }

    call_user_func_array(array($stmt, 'bind_result'), $params);

    while($stmt->fetch()){
        foreach($row as $key => $val){
            $c[$key] = $val;
        }

        $resultset[] = $c;
    }

    $this->freeStatementSql($meta);

    if (!empty($resultset)) {
        return $resultset;
    } else {
        return "Aucune donnée à afficher !";
    }
}
?>

