<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Output;

/**
 * Class ConsoleOutput - Output type for the interactive console.
 *
 * @package BroadworksOCIP\Output
 */
class ConsoleOutput implements OutputInterface
{

    public static function render($data = '')
    {
        echo $data;
    }
}