<?php
namespace Karamel\Console\Commands;
use Karamel\Console\Console;

class Boot
{
    public static function start(Console $console)
    {
        $console->add("make:model","Create Model" , '\Karamel\Console\Commands\Make\Model::define');
        $console->add("make:controller","Create Controller" , '\Karamel\Console\Commands\Make\Controller::define');
//        Console::add("make:model","Create Model" , '\Karamel\Commands\Make\Model::define');

    }
}