<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains a Call Center Agent Unavailable Code and its active state
 */
class CallCenterAgentUnavailableCodeStateModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAgentUnavailableCodeStateModify';
    protected $code;
    protected $isActive;

    public function __construct(
         $code = '',
         $isActive = ''
    ) {
        $this->setCode($code);
        $this->setIsActive($isActive);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCode($code = null)
    {
        $this->code = new SimpleContent($code);
        $this->code->setElementName('code');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $code
     */
    public function getCode()
    {
        return ($this->code)
            ? $this->code->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new SimpleContent($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }
}
