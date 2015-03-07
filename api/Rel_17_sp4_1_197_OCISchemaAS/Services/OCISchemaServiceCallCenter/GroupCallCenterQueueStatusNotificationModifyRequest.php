<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterWaitingTimeNotificationThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueDepthNotificationThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Set the status configuration for a given call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $serviceUserId                  = null;
    protected $enableQueueStatusNotification  = null;
    protected $enableQueueDepthThreshold      = null;
    protected $enableWaitingTimeThreshold     = null;
    protected $numberOfCallsThreshold         = null;
    protected $waitingTimeOfCallsThreshold    = null;

    public function __construct(
         $serviceUserId,
         $enableQueueStatusNotification = null,
         $enableQueueDepthThreshold = null,
         $enableWaitingTimeThreshold = null,
         $numberOfCallsThreshold = null,
         $waitingTimeOfCallsThreshold = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableQueueStatusNotification($enableQueueStatusNotification);
        $this->setEnableQueueDepthThreshold($enableQueueDepthThreshold);
        $this->setEnableWaitingTimeThreshold($enableWaitingTimeThreshold);
        $this->setNumberOfCallsThreshold($numberOfCallsThreshold);
        $this->setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold);
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

    public function setEnableQueueStatusNotification(xs:boolean $enableQueueStatusNotification = null)
    {
    }

    public function getEnableQueueStatusNotification()
    {
        return (!$this->enableQueueStatusNotification) ?: $this->enableQueueStatusNotification->value();
    }

    public function setEnableQueueDepthThreshold(xs:boolean $enableQueueDepthThreshold = null)
    {
    }

    public function getEnableQueueDepthThreshold()
    {
        return (!$this->enableQueueDepthThreshold) ?: $this->enableQueueDepthThreshold->value();
    }

    public function setEnableWaitingTimeThreshold(xs:boolean $enableWaitingTimeThreshold = null)
    {
    }

    public function getEnableWaitingTimeThreshold()
    {
        return (!$this->enableWaitingTimeThreshold) ?: $this->enableWaitingTimeThreshold->value();
    }

    public function setNumberOfCallsThreshold($numberOfCallsThreshold = null)
    {
        $this->numberOfCallsThreshold = ($numberOfCallsThreshold InstanceOf CallCenterQueueDepthNotificationThreshold)
             ? $numberOfCallsThreshold
             : new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
    }

    public function getNumberOfCallsThreshold()
    {
        return (!$this->numberOfCallsThreshold) ?: $this->numberOfCallsThreshold->value();
    }

    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold = null)
    {
        $this->waitingTimeOfCallsThreshold = ($waitingTimeOfCallsThreshold InstanceOf CallCenterWaitingTimeNotificationThresholdSeconds)
             ? $waitingTimeOfCallsThreshold
             : new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
    }

    public function getWaitingTimeOfCallsThreshold()
    {
        return (!$this->waitingTimeOfCallsThreshold) ?: $this->waitingTimeOfCallsThreshold->value();
    }
}
