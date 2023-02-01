<?php
    include('Singleton.php');

    $onlyObject = Singleton::getInstance();

    $testObject = Singleton::getInstance();

    var_dump($onlyObject === $testObject);
?>