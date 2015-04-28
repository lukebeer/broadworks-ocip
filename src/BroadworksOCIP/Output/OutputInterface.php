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
 * Interface OutputInterface - Output interface all Outputs must implement.
 *
 * @package BroadworksOCIP\Output
 */
interface OutputInterface
{
    public static function render($data = '');
}