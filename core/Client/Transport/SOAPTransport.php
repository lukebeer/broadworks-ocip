<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client\Transport;

use Broadworks_OCIP\core\Response\Response;
use Broadworks_OCIP\core\Response\ResponseOutput;


class SOAPTransport implements TransportInterface
{
    public $response;
    protected $session;
    private $url;
    private $followRedirects;
    private $proxy;
    private $request;

    public function __construct($url, $timeout = 10, $autoLogout = true, $followRedirects = true, $proxy = null)
    {
        $this->errorControl = &CoreFactory::getErrorControl();
        $this->url = $url;
        $this->autoLogout = $autoLogout;
        $this->followRedirects = $followRedirects;
        $this->proxy = $proxy;
        $this->timeout = $timeout;
    }

    public function destruct()
    {
    }

    public function updateSession(&$session)
    {
        $session->setTransport('SOAP');
        if ($this->getResponse()) {
            preg_match(
                '/<sessionId xmlns="">(\d+)</sessionId>/',
                html_entity_decode($this->response->getBody()),
                $sessionMatch
            );
            $session->setSessionId($sessionMatch[1]);
            $session->setNonce($this->getResponse()->nonce);
            $session->setUrl($this->response->getEffectiveUrl());
        }
        $this->session = &$session;
    }

    public function getResponse($responseType=false, $outputType = ResponseOutput::STD)
    {
        if (is_object($this->response)) {
            $response = html_entity_decode($this->response->getBody());
            $response = new Response($response, $responseType, $outputType);
            return $response->getResponse();
        }
        return null;
    }

    public function send($msg)
    {
        $this->getRequest();
        $this->getRequest()->setBody($msg);
        $this->response = $this->request->send();
        if ($cookie = $this->response->getCookies()) {
            $this->session->setCookie($cookie);
        }
        return ($this->response->getStatus() == 200);
    }

    private function getRequest()
    {
        $this->request = new HTTP_Request2(
            $this->url,
            HTTP_Request2::METHOD_POST,
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

    public function getLastResponseBody()
    {
        return ($this->response)
            ? html_entity_decode($this->response->getBody())
            : null;
    }
}