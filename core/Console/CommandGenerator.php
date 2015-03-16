<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Console;

/**
 * Class CommandGenerator - Generates an array of commands for the interactive console.
 *
 * @package Broadworks_OCIP\core\Console
 */
class CommandGenerator
{

    private $commands = [];

    public function __construct($directory)
    {
        $this->commands = $this->buildSchema($directory);
    }

    public function buildSchema($directory)
    {
        $result = [];
        $cdir = scandir($directory);
        $path = $directory;
        foreach ($cdir as $key => $value) {
            if ((!in_array($value, ['.', '..'], null)) and (!strpos($value, 'Deprecated'))) {
                if (is_dir($directory . DIRECTORY_SEPARATOR . $value)) {
                    $result[$value] = $this->buildSchema($directory . DIRECTORY_SEPARATOR . $value);
                    $path .= '/' . $value;
                } else {
                    $result[basename($value, '.php')] = [
                        'type' => 'schema',
                        'name' => basename($value, '.php'),
                        'content' => $this->buildCommands($path . '/' . $value)
                    ];
                }
            }
        }
        return ['type' => 'dir', 'name' => basename($directory), 'content' => $result];
    }

    public function buildCommands($file)
    {
        $commands = [];
        $classes = get_declared_classes();
        require_once $file;
        if ($remove = array_search(basename($file, '.php'), $classes, null)) {
            unset($classes[$remove]);
        }
        $diff = array_diff(get_declared_classes(), $classes);
        $class = reset($diff);
        foreach (get_class_methods($class) as $method) {
            $commands[$method]['type'] = 'command';
            $commands[$method]['name'] = $method;
            $commands[$method]['content'] = $this->getCommandArgs($class, $method);
        }
        return $commands;
    }

    public function getCommandArgs($class, $method)
    {
        $args = [];
        $method = new \ReflectionMethod($class, $method);
        foreach ($method->getParameters() as $param) $args[] = $param->getName();
        return $args;
    }

    public function getCommands()
    {
        return $this->commands;
    }

}