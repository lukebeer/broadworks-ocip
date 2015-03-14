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
 * Interface OutputInterface - Output interface all Outputs must implement.
 *
 * @package Broadworks_OCIP\core\Output
 */
interface OutputInterface
{
    public static function render($data = '');
}