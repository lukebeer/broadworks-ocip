<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterWaitingTimeNotificationThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueDepthNotificationThreshold;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterQueueStatusNotificationGetRequest.
 *         The response contains the call center status configuration information.
 */
class GroupCallCenterQueueStatusNotificationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = 'GroupCallCenterQueueStatusNotificationGetResponse';
    protected $enableQueueStatusNotification = null;
    protected $enableQueueDepthThreshold     = null;
    protected $enableWaitingTimeThreshold    = null;
    protected $numberOfCallsThreshold        = null;
    protected $waitingTimeOfCallsThreshold   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterQueueStatusNotificationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableQueueStatusNotification($enableQueueStatusNotification = null)
    {
        if (!$enableQueueStatusNotification) return $this;
        $this->enableQueueStatusNotification = new PrimitiveType($enableQueueStatusNotification);
        $this->enableQueueStatusNotification->setName('enableQueueStatusNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableQueueStatusNotification
     */
    public function getEnableQueueStatusNotification()
    {
        return $this->enableQueueStatusNotification->getValue();
    }

    /**
     * 
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold = null)
    {
        if (!$enableQueueDepthThreshold) return $this;
        $this->enableQueueDepthThreshold = new PrimitiveType($enableQueueDepthThreshold);
        $this->enableQueueDepthThreshold->setName('enableQueueDepthThreshold');
        return $this;
    }

    /**
     * 
     * @return boolean $enableQueueDepthThreshold
     */
    public function getEnableQueueDepthThreshold()
    {
        return $this->enableQueueDepthThreshold->getValue();
    }

    /**
     * 
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold = null)
    {
        if (!$enableWaitingTimeThreshold) return $this;
        $this->enableWaitingTimeThreshold = new PrimitiveType($enableWaitingTimeThreshold);
        $this->enableWaitingTimeThreshold->setName('enableWaitingTimeThreshold');
        return $this;
    }

    /**
     * 
     * @return boolean $enableWaitingTimeThreshold
     */
    public function getEnableWaitingTimeThreshold()
    {
        return $this->enableWaitingTimeThreshold->getValue();
    }

    /**
     * 
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold = null)
    {
        if (!$numberOfCallsThreshold) return $this;
        $this->numberOfCallsThreshold = ($numberOfCallsThreshold InstanceOf CallCenterQueueDepthNotificationThreshold)
             ? $numberOfCallsThreshold
             : new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
        $this->numberOfCallsThreshold->setName('numberOfCallsThreshold');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueDepthNotificationThreshold $numberOfCallsThreshold
     */
    public function getNumberOfCallsThreshold()
    {
        return $this->numberOfCallsThreshold->getValue();
    }

    /**
     * 
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold = null)
    {
        if (!$waitingTimeOfCallsThreshold) return $this;
        $this->waitingTimeOfCallsThreshold = ($waitingTimeOfCallsThreshold InstanceOf CallCenterWaitingTimeNotificationThresholdSeconds)
             ? $waitingTimeOfCallsThreshold
             : new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
        $this->waitingTimeOfCallsThreshold->setName('waitingTimeOfCallsThreshold');
        return $this;
    }

    /**
     * 
     * @return CallCenterWaitingTimeNotificationThresholdSeconds $waitingTimeOfCallsThreshold
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return $this->waitingTimeOfCallsThreshold->getValue();
    }
}
