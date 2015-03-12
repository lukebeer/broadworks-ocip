<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client\Transport;

use Broadworks_OCIP\core\Response\Response;
use Broadworks_OCIP\core\Response\ResponseOutput;


/**
 * Class TCPTransport communicates with Broadworks via a TCPStream on port 2208, this is the fastest transport type.
 *
 * @package Broadworks_OCIP\core\Client\Transport
 */
class TCPTransport implements TransportInterface
{
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
     * @throws Exception
     */
    public function __construct($host = "127.0.0.1", $port = 2208, $timeout = 5)
    {
        $this->socket = stream_socket_client("tcp://$host:$port", $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT);
        if (!$this->socket) {
            throw new \Exception("$errno - $errstr");
        }
    }

    /**
     * Closes socket.
     */
    public function destruct()
    {
        if (isset($this->socket)) @fclose($this->socket);
    }

    /**
     * Updates session with the transport type.
     *
     * @param \Broadworks_OCIP\core\Session\Session $session
     */
    public function updateSession(&$session)
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
     * @return bool|\Broadworks_OCIP\core\Builder\Types\ComplexType|string
     */
    public function getResponse($responseType = false, $outputType = ResponseOutput::STD, $appends = [])
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