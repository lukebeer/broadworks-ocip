<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCallCenterAgentUnavailableCodeSettingsGetRequest.
 */
class GroupCallCenterAgentUnavailableCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterAgentUnavailableCodeSettingsGetResponse';
    protected $enableAgentUnavailableCodes;
    protected $defaultAgentUnavailableCodeOnDND;
    protected $defaultAgentUnavailableCodeOnPersonalCalls;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces;
    protected $forceUseOfAgentUnavailableCodes;
    protected $defaultAgentUnavailableCode;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterAgentUnavailableCodeSettingsGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes = null)
    {
        $this->enableAgentUnavailableCodes = new PrimitiveType($enableAgentUnavailableCodes);
        $this->enableAgentUnavailableCodes->setElementName('enableAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAgentUnavailableCodes
     */
    public function getEnableAgentUnavailableCodes()
    {
        return ($this->enableAgentUnavailableCodes)
            ? $this->enableAgentUnavailableCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
        $this->defaultAgentUnavailableCodeOnDND->setElementName('defaultAgentUnavailableCodeOnDND');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnDND
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return ($this->defaultAgentUnavailableCodeOnDND)
            ? $this->defaultAgentUnavailableCodeOnDND->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->defaultAgentUnavailableCodeOnPersonalCalls->setElementName('defaultAgentUnavailableCodeOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnPersonalCalls
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return ($this->defaultAgentUnavailableCodeOnPersonalCalls)
            ? $this->defaultAgentUnavailableCodeOnPersonalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces->setElementName('defaultAgentUnavailableCodeOnConsecutiveBounces');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnConsecutiveBounces
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return ($this->defaultAgentUnavailableCodeOnConsecutiveBounces)
            ? $this->defaultAgentUnavailableCodeOnConsecutiveBounces->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes = null)
    {
        $this->forceUseOfAgentUnavailableCodes = new PrimitiveType($forceUseOfAgentUnavailableCodes);
        $this->forceUseOfAgentUnavailableCodes->setElementName('forceUseOfAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUseOfAgentUnavailableCodes
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return ($this->forceUseOfAgentUnavailableCodes)
            ? $this->forceUseOfAgentUnavailableCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->defaultAgentUnavailableCode->setElementName('defaultAgentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCode()
    {
        return ($this->defaultAgentUnavailableCode)
            ? $this->defaultAgentUnavailableCode->getElementValue()
            : null;
    }
}
