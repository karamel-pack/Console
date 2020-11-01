<?php

namespace Karamel\Console\Commands\Make;

use Karamel\Console\Commands\Interfaces\ICommand;

class Model implements ICommand
{

    public static function define()
    {
        $temp = "<?php
        ###NAMESPACE####
        class ###CLASSNAME#### {
        
        } ";

        global $argv;
        var_dump($argv);

    }
}