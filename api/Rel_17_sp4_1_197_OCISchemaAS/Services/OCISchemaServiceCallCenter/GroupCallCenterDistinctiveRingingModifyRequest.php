<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the distinctive ringing configuration values for call center.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterDistinctiveRingingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $serviceUserId                               = null;
    protected $distinctiveRingingCallCenterCalls           = null;
    protected $distinctiveRingingRingPatternForCallCenter  = null;
    protected $distinctiveRingingForceDeliveryRingPattern  = null;

    public function __construct(
         $serviceUserId,
         $distinctiveRingingCallCenterCalls = null,
         $distinctiveRingingRingPatternForCallCenter = null,
         $distinctiveRingingForceDeliveryRingPattern = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls);
        $this->setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter);
        $this->setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern);
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

    public function setDistinctiveRingingCallCenterCalls(xs:boolean $distinctiveRingingCallCenterCalls = null)
    {
    }

    public function getDistinctiveRingingCallCenterCalls()
    {
        return (!$this->distinctiveRingingCallCenterCalls) ?: $this->distinctiveRingingCallCenterCalls->value();
    }

    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter = null)
    {
        $this->distinctiveRingingRingPatternForCallCenter = ($distinctiveRingingRingPatternForCallCenter InstanceOf RingPattern)
             ? $distinctiveRingingRingPatternForCallCenter
             : new RingPattern($distinctiveRingingRingPatternForCallCenter);
    }

    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return (!$this->distinctiveRingingRingPatternForCallCenter) ?: $this->distinctiveRingingRingPatternForCallCenter->value();
    }

    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return (!$this->distinctiveRingingForceDeliveryRingPattern) ?: $this->distinctiveRingingForceDeliveryRingPattern->value();
    }
}
