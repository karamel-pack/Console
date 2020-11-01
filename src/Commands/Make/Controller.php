<?php

namespace Karamel\Console\Commands\Make;

use Karamel\Console\Interfaces\ICommand;

class Controller implements ICommand
{

    public static function define()
    {
        $temp = "<?php
namespace ###NAMESPACE### ; 
class ###CLASSNAME### {
        
}";

        global $argv;
        $file_path = $argv[2];
        if (defined("CONTROLLER_NAMESPACE"))
            $file_path = CONTROLLER_NAMESPACE . "/" . $file_path;

        $explode = explode('/', $file_path);

        $filename = array_pop($explode);

        if (!is_dir(implode("/", $explode)))
            mkdir(implode("/", $explode), 0777, true);

        $file = fopen($file_path . '.php', 'w+');
        $temp = str_replace('###NAMESPACE###', implode('\\', $explode), $temp);
        $temp = str_replace('###CLASSNAME###', $filename, $temp);
        fwrite($file, $temp);
    }
}