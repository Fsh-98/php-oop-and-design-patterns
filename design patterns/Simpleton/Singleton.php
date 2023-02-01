<?php

class Singleton
{

    private static $instances = [];

    private final function __construct()
    {

    }

    private final function __clone()
    {

    }

    public static function getInstance()
    {
        $class = get_called_class();

        if (!isset(static::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }
}
?>