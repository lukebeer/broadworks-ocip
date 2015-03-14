<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Output;

/**
 * Class ConsoleOutput - Output type for the interactive console.
 *
 * @package Broadworks_OCIP\core\Output
 */
class ConsoleOutput implements OutputInterface
{

    public static function render($data = '')
    {
        echo $data;
    }
}