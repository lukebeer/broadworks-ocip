<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueDepthNotificationThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWaitingTimeNotificationThresholdSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterQueueStatusNotificationGetRequest.
 *         The response contains the call center status configuration information.
 */
class GroupCallCenterQueueStatusNotificationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableQueueStatusNotification,
             $enableQueueDepthThreshold,
             $enableWaitingTimeThreshold,
             $numberOfCallsThreshold,
             $waitingTimeOfCallsThreshold
    ) {
        $this->enableQueueStatusNotification = $enableQueueStatusNotification;
        $this->enableQueueDepthThreshold     = $enableQueueDepthThreshold;
        $this->enableWaitingTimeThreshold    = $enableWaitingTimeThreshold;
        $this->numberOfCallsThreshold        = $numberOfCallsThreshold;
        $this->waitingTimeOfCallsThreshold   = $waitingTimeOfCallsThreshold;
        $this->args                          = func_get_args();
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
