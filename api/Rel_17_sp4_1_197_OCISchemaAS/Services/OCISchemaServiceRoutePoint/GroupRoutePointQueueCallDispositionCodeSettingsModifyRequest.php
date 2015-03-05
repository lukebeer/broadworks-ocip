<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallDispositionCodeWithLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallDispositionCodeActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the queue level data associated with Route Point Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $enableCallDispositionCodes=null,
             $includeOrganizationCodes=null,
             $forceUseOfCallDispositionCodes=null,
             $defaultCallDispositionCode=null,
             $callDispositionCodeActivation=null
    ) {
        $this->serviceUserId                  = new UserId($serviceUserId);
        $this->enableCallDispositionCodes     = $enableCallDispositionCodes;
        $this->includeOrganizationCodes       = $includeOrganizationCodes;
        $this->forceUseOfCallDispositionCodes = $forceUseOfCallDispositionCodes;
        $this->defaultCallDispositionCode     = $defaultCallDispositionCode;
        $this->callDispositionCodeActivation  = $callDispositionCodeActivation;
        $this->args                           = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEnableCallDispositionCodes($enableCallDispositionCodes)
    {
        $enableCallDispositionCodes and $this->enableCallDispositionCodes = new xs:boolean($enableCallDispositionCodes);
    }

    public function getEnableCallDispositionCodes()
    {
        return (!$this->enableCallDispositionCodes) ?: $this->enableCallDispositionCodes->value();
    }

    public function setIncludeOrganizationCodes($includeOrganizationCodes)
    {
        $includeOrganizationCodes and $this->includeOrganizationCodes = new xs:boolean($includeOrganizationCodes);
    }

    public function getIncludeOrganizationCodes()
    {
        return (!$this->includeOrganizationCodes) ?: $this->includeOrganizationCodes->value();
    }

    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes)
    {
        $forceUseOfCallDispositionCodes and $this->forceUseOfCallDispositionCodes = new xs:boolean($forceUseOfCallDispositionCodes);
    }

    public function getForceUseOfCallDispositionCodes()
    {
        return (!$this->forceUseOfCallDispositionCodes) ?: $this->forceUseOfCallDispositionCodes->value();
    }

    public function setDefaultCallDispositionCode($defaultCallDispositionCode)
    {
        $defaultCallDispositionCode and $this->defaultCallDispositionCode = new CallDispositionCodeWithLevel($defaultCallDispositionCode);
    }

    public function getDefaultCallDispositionCode()
    {
        return (!$this->defaultCallDispositionCode) ?: $this->defaultCallDispositionCode->value();
    }

    public function setCallDispositionCodeActivation($callDispositionCodeActivation)
    {
        $callDispositionCodeActivation and $this->callDispositionCodeActivation = new CallDispositionCodeActivation($callDispositionCodeActivation);
    }

    public function getCallDispositionCodeActivation()
    {
        return (!$this->callDispositionCodeActivation) ?: $this->callDispositionCodeActivation->value();
    }
}
