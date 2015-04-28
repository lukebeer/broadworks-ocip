<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Types;

use BroadworksOCIP\Client\Client;
use BroadworksOCIP\Response\ResponseOutput;

/**
 * Class ComplexType - Defines a complex type element.
 *
 * @package BroadworksOCIP\Builder\Types
 */
abstract class ComplexType
{
    protected $elements = [];
    protected $responseType;
    protected $errors;
    protected $params = [];
    protected $args;

    use TypeTrait;

    /**
     *
     */
    public function validate()
    {
        foreach ($this->params as $param) {
            if (!$param->validate()) {
                $this->errors[$param->getElementName()] = $param->getErrors();
            }
        }
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Client $client
     * @param int $responseOutput
     * @return mixed
     */
    protected function send(Client $client, $responseOutput = ResponseOutput::STD)
    {
        $client->send($this);
        return $client->getResponse($responseOutput);
    }

    /**
     * @return mixed
     */
    public function getResponseType()
    {
        return $this->responseType;
    }
}