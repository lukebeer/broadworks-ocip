<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client\Transport;

use Broadworks_OCIP\core\Response\Response;
use Broadworks_OCIP\core\Response\ResponseOutput;


class TCPTransport implements TransportInterface
{
    public $response;
    protected $session;
    private $socket;
    private $pending;

    public function __construct($host = "127.0.0.1", $port = 2208, $timeout = 5)
    {
        $this->socket = stream_socket_client("tcp://$host:$port", $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT);
        if (!$this->socket) {
            throw new Exception("$errno - $errstr");
        }
    }

    public function destruct()
    {
        if (isset($this->socket)) @fclose($this->socket);
    }

    public function updateSession(&$session)
    {
        $session->setTransport('TCP');
        $this->session = &$session;
    }

    public function send($msg)
    {
        $this->response = null;
        fwrite($this->socket, $msg);
        $this->pending = true;
        return true;
    }

    public function getResponse($responseType=false, $outputType = ResponseOutput::STD)
    {
        $data = '';
        if ($this->pending) {
            while ($data .= fgets($this->socket, 4096)) {
                if (strpos($data, '</BroadsoftDocument>')) {
                    $this->response = $data;
                    $this->pending = false;
                    break;
                }
            }
        }
        $response = new Response($this->response, $responseType, $outputType);
        return $response->getResponse();
    }

    public function getLastResponsebody()
    {
        return $this->response;
    }
}