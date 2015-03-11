<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Client\Client;
use Broadworks_OCIP\core\Response\ResponseOutput;


abstract class ComplexType
{
    public $name = __CLASS__;
    protected $elements = [];
    protected $responseType;
    protected $errors;
    protected $args;

    use TypeTrait;

    public function validate()
    {
        foreach ($this->params as $param) {
            if (!$param->validate()) {
                $this->errors[$param->getName()] = $param->getErrors();
            }
        }
    }

    public function getElements()
    {
        return get_object_vars($this);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function send(Client $client, $responseOutput = ResponseOutput::STD) {
        $client->send($this);
        return $client->getResponse($responseOutput);
    }

    public function getResponseType()
    {
        return $this->responseType;
    }

    public function getName() {
        return join('', array_slice(explode('\\', get_class($this)), -1));
    }

    public function setName($name) {
        $this->name = $name;
    }
}