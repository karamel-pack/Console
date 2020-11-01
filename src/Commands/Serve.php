<?php

namespace Karamel\Console\Commands;

use Karamel\Console\Interfaces\ICommand;

class Serve implements ICommand
{
    public static function define()
    {
        get_console_args("amir");
        /*global $argv;
        $port = 8080;
        $public = "public/";
        foreach ($argv as $key => $item) {
            $tmp = explode("=", $item);
            if (count($tmp) === 2) {
                if ($tmp[0] === "--port")
                    $port = $tmp[1];

            }
        }
        foreach ($argv as $key => $item) {
            $tmp = explode("=", $item);
            if (count($tmp) === 2) {
                if ($tmp[0] === "--t")
                    $public = $tmp[1];

            }
        }

        echo "Server has been start at :" . $port . " And Document root is " . $public . "\n";
        exec('php -S localhost:' . $port . ' -t ' . $public);*/
    }
}