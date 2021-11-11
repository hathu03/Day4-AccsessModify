<?php

class Application
{
    private static $instance;
    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo 'meof meos meo meof meo';
        }
        return self::$instance;
    }
}