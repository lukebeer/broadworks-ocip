<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterWaitingTimeNotificationThresholdSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueDepthNotificationThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Set the status configuration for a given call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterQueueStatusNotificationModifyRequest';
    protected $serviceUserId;
    protected $enableQueueStatusNotification;
    protected $enableQueueDepthThreshold;
    protected $enableWaitingTimeThreshold;
    protected $numberOfCallsThreshold;
    protected $waitingTimeOfCallsThreshold;

    public function __construct(
         $serviceUserId = '',
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableQueueStatusNotification($enableQueueStatusNotification = null)
    {
        $this->enableQueueStatusNotification = new PrimitiveType($enableQueueStatusNotification);
        $this->enableQueueStatusNotification->setElementName('enableQueueStatusNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableQueueStatusNotification
     */
    public function getEnableQueueStatusNotification()
    {
        return ($this->enableQueueStatusNotification)
            ? $this->enableQueueStatusNotification->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold = null)
    {
        $this->enableQueueDepthThreshold = new PrimitiveType($enableQueueDepthThreshold);
        $this->enableQueueDepthThreshold->setElementName('enableQueueDepthThreshold');
        return $this;
    }

    /**
     * 
     * @return boolean $enableQueueDepthThreshold
     */
    public function getEnableQueueDepthThreshold()
    {
        return ($this->enableQueueDepthThreshold)
            ? $this->enableQueueDepthThreshold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold = null)
    {
        $this->enableWaitingTimeThreshold = new PrimitiveType($enableWaitingTimeThreshold);
        $this->enableWaitingTimeThreshold->setElementName('enableWaitingTimeThreshold');
        return $this;
    }

    /**
     * 
     * @return boolean $enableWaitingTimeThreshold
     */
    public function getEnableWaitingTimeThreshold()
    {
        return ($this->enableWaitingTimeThreshold)
            ? $this->enableWaitingTimeThreshold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold = null)
    {
        $this->numberOfCallsThreshold = ($numberOfCallsThreshold InstanceOf CallCenterQueueDepthNotificationThreshold)
             ? $numberOfCallsThreshold
             : new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
        $this->numberOfCallsThreshold->setElementName('numberOfCallsThreshold');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueDepthNotificationThreshold $numberOfCallsThreshold
     */
    public function getNumberOfCallsThreshold()
    {
        return ($this->numberOfCallsThreshold)
            ? $this->numberOfCallsThreshold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold = null)
    {
        $this->waitingTimeOfCallsThreshold = ($waitingTimeOfCallsThreshold InstanceOf CallCenterWaitingTimeNotificationThresholdSeconds)
             ? $waitingTimeOfCallsThreshold
             : new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
        $this->waitingTimeOfCallsThreshold->setElementName('waitingTimeOfCallsThreshold');
        return $this;
    }

    /**
     * 
     * @return CallCenterWaitingTimeNotificationThresholdSeconds $waitingTimeOfCallsThreshold
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return ($this->waitingTimeOfCallsThreshold)
            ? $this->waitingTimeOfCallsThreshold->getElementValue()
            : null;
    }
}
