<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client\Transport;

use Broadworks_OCIP\core\Response\Response;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Session\Session;
use Broadworks_OCIP\CoreFactory;

require_once 'HTTP/Request2.php';


/**
 * Class SOAPTransport - Communicates with Broadworks via http(s), this is the slowest but most robust transport type.
 *
 * @package Broadworks_OCIP\core\Client\Transport
 */
class SOAPTransport implements TransportInterface
{
    public $response;
    protected $session;
    private $url;
    private $followRedirects;
    private $proxy;
    private $request;

    /**
     * Constructor, sets up transport ready for use.
     *
     * @param string $url
     * @param int $timeout
     * @param bool $autoLogout
     * @param bool $followRedirects
     * @param null $proxy
     */
    public function __construct($url, $timeout = 10, $autoLogout = true, $followRedirects = true, $proxy = null)
    {
        $this->errorControl = &CoreFactory::getErrorControl();
        $this->url = $url;
        $this->autoLogout = $autoLogout;
        $this->followRedirects = $followRedirects;
        $this->proxy = $proxy;
        $this->timeout = $timeout;
    }

    /**
     *
     */
    public function destruct()
    {
    }

    /**
     * Updates session object with required stateful elements such as cookie and nonce.
     *
     * @param \Broadworks_OCIP\core\Session\Session $session
     */
    public function updateSession(Session &$session)
    {
        $session->setTransport('SOAP');
        if ($this->getResponse()) {
            preg_match(
                '/<sessionId xmlns="">(\d+)</sessionId>/',
                html_entity_decode($this->response->getBody()),
                $sessionMatch
            );
            $session->setSessionId($sessionMatch[1]);
            $session->setNonce($this->getResponse()->getNonce());
            $session->setUrl($this->response->getEffectiveUrl());
        }
        $this->session = &$session;
    }

    /**
     * Provides method to obtain the last response from Broadworks and return requested response type.
     *
     * @param bool $responseType
     * @param int $outputType
     * @param $appends
     * @return bool|\Broadworks_OCIP\core\Builder\Types\ComplexType|null|string
     */
    public function getResponse($responseType = false, $outputType = ResponseOutput::STD, array $appends = [])
    {
        if (is_object($this->response)) {
            $response = html_entity_decode($this->response->getBody());
            $response = new Response($response, $responseType, $outputType, $appends);
            return $response->getResponse();
        }
        return null;
    }

    /**
     * Builds HTTP request body and submits POST.
     *
     * @param string $msg
     * @return bool
     */
    public function send($msg)
    {
        $this->getRequest();
        $this->getRequest()->setBody($msg);
        $this->response = $this->request->send();
        if ($cookie = $this->response->getCookies()) {
            $this->session->setCookie($cookie);
        }
        return ($this->response->getStatus() === 200);
    }

    /**
     * Generates HTTP request object.
     *
     * @return \HTTP_Request2
     */
    private function getRequest()
    {
        $this->request = new \HTTP_Request2(
            $this->url,
            \HTTP_Request2::METHOD_POST,
            [
                'timeout' => $this->timeout,
                'ssl_verify_peer' => FALSE,
                'follow_redirects' => $this->followRedirects,
                'strict_redirects' => $this->followRedirects,
                'proxy' => $this->proxy
            ]
        );
        $this->request->setHeader([
            'Content-Type' => 'text/xml; charset=utf-8',
            'Accept' => 'application/soap+xml, application/dime, multipart/related, text/*',
            'User-Agent' => 'Axis/1.3',
            'SOAPAction' => '""',
            'Cache-Control' => 'no-cache',
            'Pragma' => 'no-cache',
            'Connection' => null,
            'Accept-Encoding' => null
        ]);
        if ($cookie = $this->session->getCookie()) {
            $this->request->addCookie($cookie[0]['name'], $cookie[0]['value']);
        }
        return $this->request;
    }

    /**
     * Returns last response body as string.
     *
     * @return null|string
     */
    public function getLastResponseBody()
    {
        return ($this->response)
            ? html_entity_decode($this->response->getBody())
            : null;
    }
}