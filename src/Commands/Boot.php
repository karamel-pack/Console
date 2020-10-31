<?php

namespace Karamel\Console\Commands;
use Karamel\Console\Console;

class Boot
{
    public static function start()
    {
        Console::add("make:controller","Create Controller" , '\Karamel\Commands\Make');

    }
}