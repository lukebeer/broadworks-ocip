<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the queue level data associated with Route Point Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceUserId                   = null;
    protected $enableCallDispositionCodes      = null;
    protected $includeOrganizationCodes        = null;
    protected $forceUseOfCallDispositionCodes  = null;
    protected $defaultCallDispositionCode      = null;
    protected $callDispositionCodeActivation   = null;

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

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEnableCallDispositionCodes(xs:boolean $enableCallDispositionCodes = null)
    {
    }

    public function getEnableCallDispositionCodes()
    {
        return (!$this->enableCallDispositionCodes) ?: $this->enableCallDispositionCodes->value();
    }

    public function setIncludeOrganizationCodes(xs:boolean $includeOrganizationCodes = null)
    {
    }

    public function getIncludeOrganizationCodes()
    {
        return (!$this->includeOrganizationCodes) ?: $this->includeOrganizationCodes->value();
    }

    public function setForceUseOfCallDispositionCodes(xs:boolean $forceUseOfCallDispositionCodes = null)
    {
    }

    public function getForceUseOfCallDispositionCodes()
    {
        return (!$this->forceUseOfCallDispositionCodes) ?: $this->forceUseOfCallDispositionCodes->value();
    }

    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
    }

    public function getDefaultCallDispositionCode()
    {
        return (!$this->defaultCallDispositionCode) ?: $this->defaultCallDispositionCode->value();
    }

    public function setCallDispositionCodeActivation(CallDispositionCodeActivation $callDispositionCodeActivation = null)
    {
    }

    public function getCallDispositionCodeActivation()
    {
        return (!$this->callDispositionCodeActivation) ?: $this->callDispositionCodeActivation->value();
    }
}
