<?php

namespace Karamel\Console;

use Karamel\Console\Commands\Make\Model;
use Karamel\Console\Exceptions\CommandNotFoundException;
use Karamel\Console\Exceptions\ExistsCommandNameException;

class Console
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function add($name, $description, $callback)
    {
        if (isset($this->commands[$name]))
            throw new ExistsCommandNameException();

        $this->commands[$name] = [
            "name" => $name,
            "description" => $description,
            "callback" => $callback
        ];

    }

    public function run($name)
    {
        $model = Model::define();

        if (!isset($this->commands[$name]))
            throw new CommandNotFoundException("Command ". $name." Not Found !");

//        return $this->commands[$name]["callback"]();
    }
}