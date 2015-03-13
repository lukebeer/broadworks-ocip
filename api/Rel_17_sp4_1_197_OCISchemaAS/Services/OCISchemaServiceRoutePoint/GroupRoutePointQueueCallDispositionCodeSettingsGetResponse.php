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
    public    $name                           = 'GroupRoutePointQueueCallDispositionCodeSettingsGetResponse';
    protected $enableCallDispositionCodes     = null;
    protected $includeOrganizationCodes       = null;
    protected $forceUseOfCallDispositionCodes = null;
    protected $defaultCallDispositionCode     = null;

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
        if (!$enableCallDispositionCodes) return $this;
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
        return $this->enableCallDispositionCodes->getValue();
    }

    /**
     * 
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes = null)
    {
        if (!$includeOrganizationCodes) return $this;
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
        return $this->includeOrganizationCodes->getValue();
    }

    /**
     * 
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes = null)
    {
        if (!$forceUseOfCallDispositionCodes) return $this;
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
        return $this->forceUseOfCallDispositionCodes->getValue();
    }

    /**
     * 
     */
    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
        if (!$defaultCallDispositionCode) return $this;
        $this->defaultCallDispositionCode = $defaultCallDispositionCode;
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
