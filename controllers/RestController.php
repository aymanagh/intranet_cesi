<?php
require_once('controllers.php');

if (isset($_GET["type"])) {
    $handler = new Handler();
    $response = $handler->HandlerController($_GET["type"]);
    echo ($response);
}
