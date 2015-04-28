<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallApplicationNotificationTimeOutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallControlApplicationDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventNotificationChannelsPerSet;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationAddRequest17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCICallControlApplicationAddRequest17';
    protected $applicationId;
    protected $enableSystemWide;
    protected $notificationTimeoutSeconds;
    protected $description;
    protected $maxEventChannelsPerSet;

    public function __construct(
         $applicationId = '',
         $enableSystemWide = '',
         $notificationTimeoutSeconds = '',
         $description = null,
         $maxEventChannelsPerSet = ''
    ) {
        $this->setApplicationId($applicationId);
        $this->setEnableSystemWide($enableSystemWide);
        $this->setNotificationTimeoutSeconds($notificationTimeoutSeconds);
        $this->setDescription($description);
        $this->setMaxEventChannelsPerSet($maxEventChannelsPerSet);
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
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
        $this->applicationId->setElementName('applicationId');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId)
            ? $this->applicationId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableSystemWide($enableSystemWide = null)
    {
        $this->enableSystemWide = new PrimitiveType($enableSystemWide);
        $this->enableSystemWide->setElementName('enableSystemWide');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSystemWide
     */
    public function getEnableSystemWide()
    {
        return ($this->enableSystemWide)
            ? $this->enableSystemWide->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNotificationTimeoutSeconds($notificationTimeoutSeconds = null)
    {
        $this->notificationTimeoutSeconds = ($notificationTimeoutSeconds InstanceOf OCICallApplicationNotificationTimeOutSeconds)
             ? $notificationTimeoutSeconds
             : new OCICallApplicationNotificationTimeOutSeconds($notificationTimeoutSeconds);
        $this->notificationTimeoutSeconds->setElementName('notificationTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return OCICallApplicationNotificationTimeOutSeconds $notificationTimeoutSeconds
     */
    public function getNotificationTimeoutSeconds()
    {
        return ($this->notificationTimeoutSeconds)
            ? $this->notificationTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OCICallControlApplicationDescription)
             ? $description
             : new OCICallControlApplicationDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxEventChannelsPerSet($maxEventChannelsPerSet = null)
    {
        $this->maxEventChannelsPerSet = ($maxEventChannelsPerSet InstanceOf EventNotificationChannelsPerSet)
             ? $maxEventChannelsPerSet
             : new EventNotificationChannelsPerSet($maxEventChannelsPerSet);
        $this->maxEventChannelsPerSet->setElementName('maxEventChannelsPerSet');
        return $this;
    }

    /**
     * 
     * @return EventNotificationChannelsPerSet $maxEventChannelsPerSet
     */
    public function getMaxEventChannelsPerSet()
    {
        return ($this->maxEventChannelsPerSet)
            ? $this->maxEventChannelsPerSet->getElementValue()
            : null;
    }
}
