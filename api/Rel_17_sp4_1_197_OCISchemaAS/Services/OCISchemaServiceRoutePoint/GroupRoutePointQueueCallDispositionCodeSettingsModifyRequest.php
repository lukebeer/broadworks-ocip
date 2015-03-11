<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the queue level data associated with Route Point Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = 'GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest';
    protected $serviceUserId                  = null;
    protected $enableCallDispositionCodes     = null;
    protected $includeOrganizationCodes       = null;
    protected $forceUseOfCallDispositionCodes = null;
    protected $defaultCallDispositionCode     = null;
    protected $callDispositionCodeActivation  = null;

    public function __construct(
         $serviceUserId,
         $enableCallDispositionCodes = null,
         $includeOrganizationCodes = null,
         $forceUseOfCallDispositionCodes = null,
         CallDispositionCodeWithLevel $defaultCallDispositionCode = null,
         CallDispositionCodeActivation $callDispositionCodeActivation = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableCallDispositionCodes($enableCallDispositionCodes);
        $this->setIncludeOrganizationCodes($includeOrganizationCodes);
        $this->setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes);
        $this->setDefaultCallDispositionCode($defaultCallDispositionCode);
        $this->setCallDispositionCodeActivation($callDispositionCodeActivation);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return CallDispositionCodeWithLevel
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode;
    }

    /**
     * 
     */
    public function setCallDispositionCodeActivation(CallDispositionCodeActivation $callDispositionCodeActivation = null)
    {
        if (!$callDispositionCodeActivation) return $this;
        $this->callDispositionCodeActivation = $callDispositionCodeActivation;
        $this->callDispositionCodeActivation->setName('callDispositionCodeActivation');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCodeActivation
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation;
    }
}
