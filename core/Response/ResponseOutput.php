<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Response;

/**
 * Class ResponseOutput - Convenience class for selecting response output format.
 *
 * @package Broadworks_OCIP\core\Response
 */
abstract class ResponseOutput
{
    const STD = 0;
    const XML = 1;
    const JSON = 2;
    const SIMPLEXML = 3;
    const TABLE = 4;
    const PRETTY = 5;
}