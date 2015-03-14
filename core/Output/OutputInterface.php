<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
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