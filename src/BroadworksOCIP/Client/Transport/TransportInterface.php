<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Client\Transport;

use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Session\Session;

/**
 * Interface TransportInterface - Interface all Transport types must implement.
 *
 * @package BroadworksOCIP\Client\Transport
 */
interface TransportInterface
{
    /**
     * @param $session
     * @return mixed
     */
    public function updateSession(Session &$session);

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
    public function getResponse($responseType = false, $outputType = ResponseOutput::STD, array $appends = []);

    /**
     * @return mixed
     */
    public function getLastResponseBody();

    /**
     * @return mixed
     */
    public function destruct();
}