<?php
$response = [];

if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
    //connection to check if user exist

    //get value from js
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    
    $response['message'] =  $mail." | ".$mdp;
}else{
    $response['error'] = 'nothing match';
}
$response = json_encode($response);
echo $response;




