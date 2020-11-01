<?php

namespace Karamel\Console\Facade;

/**
 * Class Console
 * @package Karamel\Console\Facade
 * @method static add($name, $description, $callback)
 * @method static run($name)
 */

class Console
{
    private static $instance = null;

    public static function __callStatic($name, $arguments)
    {
        return self::getInstance()->$name(...$arguments);
    }

    private static function getInstance()
    {
        if (self::$instance === null)
            self::$instance = new \Karamel\Console\Console();
        return self::$instance;
    }
}