<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupRoutePointQueueCallDispositionCodeSettingsGetRequest.
 */
class GroupRoutePointQueueCallDispositionCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointQueueCallDispositionCodeSettingsGetResponse';
    protected $enableCallDispositionCodes;
    protected $includeOrganizationCodes;
    protected $forceUseOfCallDispositionCodes;
    protected $defaultCallDispositionCode;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointQueueCallDispositionCodeSettingsGetResponse $response
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
        $this->enableCallDispositionCodes->setName('enableCallDispositionCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallDispositionCodes
     */
    public function getEnableCallDispositionCodes()
    {
        return ($this->enableCallDispositionCodes) ? $this->enableCallDispositionCodes->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes = null)
    {
        $this->includeOrganizationCodes = new PrimitiveType($includeOrganizationCodes);
        $this->includeOrganizationCodes->setName('includeOrganizationCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $includeOrganizationCodes
     */
    public function getIncludeOrganizationCodes()
    {
        return ($this->includeOrganizationCodes) ? $this->includeOrganizationCodes->getValue() : null;
    }

    /**
     * 
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes = null)
    {
        $this->forceUseOfCallDispositionCodes = new PrimitiveType($forceUseOfCallDispositionCodes);
        $this->forceUseOfCallDispositionCodes->setName('forceUseOfCallDispositionCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUseOfCallDispositionCodes
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return ($this->forceUseOfCallDispositionCodes) ? $this->forceUseOfCallDispositionCodes->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
        $this->defaultCallDispositionCode = ($defaultCallDispositionCode InstanceOf CallDispositionCodeWithLevel)
             ? $defaultCallDispositionCode
             : new CallDispositionCodeWithLevel($defaultCallDispositionCode);
        $this->defaultCallDispositionCode->setName('defaultCallDispositionCode');
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
