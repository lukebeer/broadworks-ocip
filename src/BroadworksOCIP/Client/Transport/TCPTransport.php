<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Client\Transport;

use BroadworksOCIP\Response\Response;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Session\Session;

/**
 * Class TCPTransport - Communicates with Broadworks via a TCPStream on port 2208, this is the fastest transport type.
 *
 * @package BroadworksOCIP\Client\Transport
 */
class TCPTransport implements TransportInterface
{
    public $isConnected;
    public $response;
    protected $session;
    private $socket;
    private $pending;

    /**
     * Creates a socket and connects to the Broadworks OCI interface.
     *
     * @param string $host
     * @param int $port
     * @param int $timeout
     * @throws \Exception
     */
    public function __construct($host = '127.0.0.1', $port = 2208, $timeout = 5, $sockshost=null, $socksport=null)
    {
        if ($sockshost) {
            $this->setProxy($host, $port, $sockshost, $socksport, $timeout);
        } else {
            $this->socket = stream_socket_client("tcp://$host:$port", $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT);
            if (!$this->socket) {
                exit("$errno - $errstr");
            }
        }
    }

    /**
     * Closes socket.
     */
    public function destruct()
    {
        if ($this->socket) {
            @fclose($this->socket);
        }
    }

    /**
     * Closes socket.
     */
    public function isConnected()
    {
        return $this->isConnected;
    }

    /**
     * Connects to socks proxy and returns socket
     */
    public function setProxy($host, $port, $sockshost, $socksport, $timeout) {
        $this->socket = fsockopen($sockshost, $socksport, $errno, $errstr, $timeout);
        if (!$this->socket) {
            echo "$errno - $errstr";
            return false;
        }
        $socket_status = 1;
        fwrite($this->socket, pack("C3", 0x05, 0x01, 0x00));
        $server_status = fread($this->socket, 8192);
        if ($server_status == pack("C2", 0x05, 0x00)) {
            $socket_status = 2;
        } else {
            echo "Error connecting to proxy: $sockshost:$socksport";
            return false;
        }
        fwrite($this->socket, pack("C5", 0x05, 0x01, 0x00, 0x03, strlen($host)) . $host . pack("n", $port));
        $server_buffer = fread($this->socket, 8192);
        if ($server_buffer == pack("C10", 0x05, 0x00, 0x00, 0x01, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00)) {
            $socket_status = 3;
        } else {
            echo("Error connecting to host: $host:$port\n");
            return false;
        }
        $this->isConnected = true;
        return true;
    }


    /**
     * Updates session with the transport type.
     *
     * @param \BroadworksOCIP\Session\Session $session
     */
    public function updateSession(Session &$session)
    {
        $session->setTransport('TCP');
        $this->session = &$session;
    }

    /**
     * Writes message to socket.
     *
     * @param string $msg
     * @return bool
     */
    public function send($msg)
    {
        $this->response = null;
        fwrite($this->socket, $msg);
        $this->pending = true;
        return true;
    }

    /**
     * Provides method to obtain the last response from Broadworks and return requested response type.
     *
     * @param bool $responseType
     * @param int $outputType
     * @param $appends
     * @return bool|\BroadworksOCIP\Builder\Types\ComplexType|string
     */
    public function getResponse($responseType = false, $outputType = ResponseOutput::STD, array $appends = [])
    {
        $this->response = '';
        if ($this->pending) {
            while (!feof($this->socket)) {
                $this->response .= @fgets($this->socket, 4096);
            }
            $this->pending = false;
        }
        $response = new Response($this->response, $responseType, $outputType, $appends);
        return $response->getResponse();
    }

    /**
     * @return mixed
     */
    public function getLastResponsebody()
    {
        return $this->response;
    }
}
