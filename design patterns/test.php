<?php
    require_once('DB.php');
    require_once('Logger.php');

    $db = DB::getInstance();
    $logger = Logger::getInstance();

    var_dump($db);

    var_dump($logger);
?>