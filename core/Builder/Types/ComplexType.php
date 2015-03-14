<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Client\Client;
use Broadworks_OCIP\core\Response\ResponseOutput;

/**
 * Class ComplexType - Defines a complex type element.
 *
 * @package Broadworks_OCIP\core\Builder\Types
 */
abstract class ComplexType
{
    public $name = __CLASS__;
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
                $this->errors[$param->getName()] = $param->getErrors();
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
    public function send(Client $client, $responseOutput = ResponseOutput::STD)
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

    /**
     * @return string
     */
    public function getName()
    {
        return implode('', array_slice(explode('\\', get_class($this)), -1));
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}