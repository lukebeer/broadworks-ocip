<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client\Transport;

interface TransportInterface
{
    public function updateSession(&$session);

    public function send($msg);

    public function getResponse($outputType = OCIResponseOutput::STD);

    public function getLastResponseBody();

    public function destruct();
}