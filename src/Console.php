<?php

namespace Karamel\Console;

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

        $this->commands[] = [
            "name" => $name,
            "description" => $description,
            "callback" => $callback
        ];

    }

    public function run($name)
    {
        if (!isset($this->commands[$name]))
            throw new CommandNotFoundException();

        return $this->commands[$name]["callback"]();
    }
}