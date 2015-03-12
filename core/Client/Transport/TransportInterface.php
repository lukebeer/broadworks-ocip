<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client\Transport;

use Broadworks_OCIP\core\Response\ResponseOutput;


/**
 * Interface TransportInterface
 * @package Broadworks_OCIP\core\Client\Transport
 */
interface TransportInterface
{
    /**
     * @param $session
     * @return mixed
     */
    public function updateSession(&$session);

    /**
     * @param $msg
     * @return mixed
     */
    public function send($msg);

    /**
     * @param bool $responseType
     * @param $outputType
     * @param $appends
     * @return mixed
     */
    public function getResponse($responseType = false, $outputType = ResponseOutput::STD, $appends = []);

    /**
     * @return mixed
     */
    public function getLastResponseBody();

    /**
     * @return mixed
     */
    public function destruct();
}