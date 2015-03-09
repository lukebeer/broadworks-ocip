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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterQueueStatusNotificationModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Set the status configuration for a given call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceUserId                 = null;
    protected $enableQueueStatusNotification = null;
    protected $enableQueueDepthThreshold     = null;
    protected $enableWaitingTimeThreshold    = null;
    protected $numberOfCallsThreshold        = null;
    protected $waitingTimeOfCallsThreshold   = null;

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

    /**
     * @return GroupCallCenterQueueStatusNotificationModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setEnableQueueStatusNotification($enableQueueStatusNotification = null)
    {
        $this->enableQueueStatusNotification = (boolean) $enableQueueStatusNotification;
    }

    /**
     * 
     */
    public function getEnableQueueStatusNotification()
    {
        return (!$this->enableQueueStatusNotification) ?: $this->enableQueueStatusNotification;
    }

    /**
     * 
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold = null)
    {
        $this->enableQueueDepthThreshold = (boolean) $enableQueueDepthThreshold;
    }

    /**
     * 
     */
    public function getEnableQueueDepthThreshold()
    {
        return (!$this->enableQueueDepthThreshold) ?: $this->enableQueueDepthThreshold;
    }

    /**
     * 
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold = null)
    {
        $this->enableWaitingTimeThreshold = (boolean) $enableWaitingTimeThreshold;
    }

    /**
     * 
     */
    public function getEnableWaitingTimeThreshold()
    {
        return (!$this->enableWaitingTimeThreshold) ?: $this->enableWaitingTimeThreshold;
    }

    /**
     * Number of calls in queue before notification to agents devices.
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold = null)
    {
        $this->numberOfCallsThreshold = ($numberOfCallsThreshold InstanceOf CallCenterQueueDepthNotificationThreshold)
             ? $numberOfCallsThreshold
             : new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
    }

    /**
     * Number of calls in queue before notification to agents devices.
     */
    public function getNumberOfCallsThreshold()
    {
        return (!$this->numberOfCallsThreshold) ?: $this->numberOfCallsThreshold->getValue();
    }

    /**
     * Waiting time for a given call before notification to agents devices.
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold = null)
    {
        $this->waitingTimeOfCallsThreshold = ($waitingTimeOfCallsThreshold InstanceOf CallCenterWaitingTimeNotificationThresholdSeconds)
             ? $waitingTimeOfCallsThreshold
             : new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
    }

    /**
     * Waiting time for a given call before notification to agents devices.
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return (!$this->waitingTimeOfCallsThreshold) ?: $this->waitingTimeOfCallsThreshold->getValue();
    }
}
