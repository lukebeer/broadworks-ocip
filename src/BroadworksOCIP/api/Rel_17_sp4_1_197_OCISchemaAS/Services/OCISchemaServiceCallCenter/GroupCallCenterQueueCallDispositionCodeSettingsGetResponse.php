<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCallCenterQueueCallDispositionCodeSettingsGetRequest.
 */
class GroupCallCenterQueueCallDispositionCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterQueueCallDispositionCodeSettingsGetResponse';
    protected $enableCallDispositionCodes;
    protected $includeOrganizationCodes;
    protected $forceUseOfCallDispositionCodes;
    protected $defaultCallDispositionCode;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterQueueCallDispositionCodeSettingsGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes = null)
    {
        $this->enableCallDispositionCodes = new PrimitiveType($enableCallDispositionCodes);
        $this->enableCallDispositionCodes->setElementName('enableCallDispositionCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallDispositionCodes
     */
    public function getEnableCallDispositionCodes()
    {
        return ($this->enableCallDispositionCodes)
            ? $this->enableCallDispositionCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes = null)
    {
        $this->includeOrganizationCodes = new PrimitiveType($includeOrganizationCodes);
        $this->includeOrganizationCodes->setElementName('includeOrganizationCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $includeOrganizationCodes
     */
    public function getIncludeOrganizationCodes()
    {
        return ($this->includeOrganizationCodes)
            ? $this->includeOrganizationCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes = null)
    {
        $this->forceUseOfCallDispositionCodes = new PrimitiveType($forceUseOfCallDispositionCodes);
        $this->forceUseOfCallDispositionCodes->setElementName('forceUseOfCallDispositionCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUseOfCallDispositionCodes
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return ($this->forceUseOfCallDispositionCodes)
            ? $this->forceUseOfCallDispositionCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
        $this->defaultCallDispositionCode = ($defaultCallDispositionCode InstanceOf CallDispositionCodeWithLevel)
             ? $defaultCallDispositionCode
             : new CallDispositionCodeWithLevel($defaultCallDispositionCode);
        $this->defaultCallDispositionCode->setElementName('defaultCallDispositionCode');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCodeWithLevel $defaultCallDispositionCode
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode;
    }
}
