<?php
namespace Karamel\Console\Commands;

use Karamel\Console\Facade\Console;

class Boot
{
    public static function start()
    {

        Console::add("make:model","Create Model" , '\Karamel\Console\Commands\Make\Model::define');
        Console::add("make:controller","Create Controller" , '\Karamel\Console\Commands\Make\Controller::define');
        Console::add("serve","runnig server " , '\Karamel\Console\Commands\Serve::define');
//        Console::add("make:model","Create Model" , '\Karamel\Commands\Make\Model::define');

    }
}