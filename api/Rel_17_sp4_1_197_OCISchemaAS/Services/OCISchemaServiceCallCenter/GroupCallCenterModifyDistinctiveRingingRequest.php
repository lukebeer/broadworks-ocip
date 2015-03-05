<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the distinctive ringing configuration values for call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyDistinctiveRingingRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $distinctiveRingingCallCenterCalls=null,
             $distinctiveRingingRingPatternForCallCenter=null,
             $distinctiveRingingForceDeliveryRingPattern=null
    ) {
        $this->serviceUserId                              = new UserId($serviceUserId);
        $this->distinctiveRingingCallCenterCalls          = $distinctiveRingingCallCenterCalls;
        $this->distinctiveRingingRingPatternForCallCenter = new RingPattern($distinctiveRingingRingPatternForCallCenter);
        $this->distinctiveRingingForceDeliveryRingPattern = new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->args                                       = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls)
    {
        $distinctiveRingingCallCenterCalls and $this->distinctiveRingingCallCenterCalls = new xs:boolean($distinctiveRingingCallCenterCalls);
    }

    public function getDistinctiveRingingCallCenterCalls()
    {
        return (!$this->distinctiveRingingCallCenterCalls) ?: $this->distinctiveRingingCallCenterCalls->value();
    }

    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter)
    {
        $distinctiveRingingRingPatternForCallCenter and $this->distinctiveRingingRingPatternForCallCenter = new RingPattern($distinctiveRingingRingPatternForCallCenter);
    }

    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return (!$this->distinctiveRingingRingPatternForCallCenter) ?: $this->distinctiveRingingRingPatternForCallCenter->value();
    }

    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern)
    {
        $distinctiveRingingForceDeliveryRingPattern and $this->distinctiveRingingForceDeliveryRingPattern = new RingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return (!$this->distinctiveRingingForceDeliveryRingPattern) ?: $this->distinctiveRingingForceDeliveryRingPattern->value();
    }
}
