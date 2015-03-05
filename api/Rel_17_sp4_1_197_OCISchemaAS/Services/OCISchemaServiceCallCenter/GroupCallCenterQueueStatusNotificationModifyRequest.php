<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueDepthNotificationThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWaitingTimeNotificationThresholdSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Set the status configuration for a given call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $enableQueueStatusNotification=null,
             $enableQueueDepthThreshold=null,
             $enableWaitingTimeThreshold=null,
             $numberOfCallsThreshold=null,
             $waitingTimeOfCallsThreshold=null
    ) {
        $this->serviceUserId                 = new UserId($serviceUserId);
        $this->enableQueueStatusNotification = $enableQueueStatusNotification;
        $this->enableQueueDepthThreshold     = $enableQueueDepthThreshold;
        $this->enableWaitingTimeThreshold    = $enableWaitingTimeThreshold;
        $this->numberOfCallsThreshold        = $numberOfCallsThreshold;
        $this->waitingTimeOfCallsThreshold   = $waitingTimeOfCallsThreshold;
        $this->args                          = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEnableQueueStatusNotification($enableQueueStatusNotification)
    {
        $enableQueueStatusNotification and $this->enableQueueStatusNotification = new xs:boolean($enableQueueStatusNotification);
    }

    public function getEnableQueueStatusNotification()
    {
        return (!$this->enableQueueStatusNotification) ?: $this->enableQueueStatusNotification->value();
    }

    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold)
    {
        $enableQueueDepthThreshold and $this->enableQueueDepthThreshold = new xs:boolean($enableQueueDepthThreshold);
    }

    public function getEnableQueueDepthThreshold()
    {
        return (!$this->enableQueueDepthThreshold) ?: $this->enableQueueDepthThreshold->value();
    }

    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold)
    {
        $enableWaitingTimeThreshold and $this->enableWaitingTimeThreshold = new xs:boolean($enableWaitingTimeThreshold);
    }

    public function getEnableWaitingTimeThreshold()
    {
        return (!$this->enableWaitingTimeThreshold) ?: $this->enableWaitingTimeThreshold->value();
    }

    public function setNumberOfCallsThreshold($numberOfCallsThreshold)
    {
        $numberOfCallsThreshold and $this->numberOfCallsThreshold = new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
    }

    public function getNumberOfCallsThreshold()
    {
        return (!$this->numberOfCallsThreshold) ?: $this->numberOfCallsThreshold->value();
    }

    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold)
    {
        $waitingTimeOfCallsThreshold and $this->waitingTimeOfCallsThreshold = new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
    }

    public function getWaitingTimeOfCallsThreshold()
    {
        return (!$this->waitingTimeOfCallsThreshold) ?: $this->waitingTimeOfCallsThreshold->value();
    }
}
