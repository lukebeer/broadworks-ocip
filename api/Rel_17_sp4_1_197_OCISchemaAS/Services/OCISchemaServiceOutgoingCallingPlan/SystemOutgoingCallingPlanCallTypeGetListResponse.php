<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemOutgoingCallingPlanCallTypeGetListRequest.
 */
class SystemOutgoingCallingPlanCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanCallTypeGetListResponse';
    public    $name     = __CLASS__;
    protected $callType = null;


    /**
     * Outgoing Calling Plan Call Type
     */
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf OutgoingCallingPlanCallType)
             ? $callType
             : new OutgoingCallingPlanCallType($callType);
    }

    /**
     * Outgoing Calling Plan Call Type
     */
    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->getValue();
    }
}