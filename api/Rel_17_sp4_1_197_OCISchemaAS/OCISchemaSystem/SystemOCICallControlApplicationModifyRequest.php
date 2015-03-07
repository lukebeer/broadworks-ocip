<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallApplicationNotificationTimeOutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallControlApplicationDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventNotificationChannelsPerSet;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an application from the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $applicationId               = null;
    protected $enableSystemWide            = null;
    protected $notificationTimeoutSeconds  = null;
    protected $description                 = null;
    protected $maxEventChannelsPerSet      = null;

    public function __construct(
         $applicationId,
         $enableSystemWide = null,
         $notificationTimeoutSeconds = null,
         $description = null,
         $maxEventChannelsPerSet = null
    ) {
        $this->setApplicationId($applicationId);
        $this->setEnableSystemWide($enableSystemWide);
        $this->setNotificationTimeoutSeconds($notificationTimeoutSeconds);
        $this->setDescription($description);
        $this->setMaxEventChannelsPerSet($maxEventChannelsPerSet);
    }

    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
    }

    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->value();
    }

    public function setEnableSystemWide(xs:boolean $enableSystemWide = null)
    {
    }

    public function getEnableSystemWide()
    {
        return (!$this->enableSystemWide) ?: $this->enableSystemWide->value();
    }

    public function setNotificationTimeoutSeconds($notificationTimeoutSeconds = null)
    {
        $this->notificationTimeoutSeconds = ($notificationTimeoutSeconds InstanceOf OCICallApplicationNotificationTimeOutSeconds)
             ? $notificationTimeoutSeconds
             : new OCICallApplicationNotificationTimeOutSeconds($notificationTimeoutSeconds);
    }

    public function getNotificationTimeoutSeconds()
    {
        return (!$this->notificationTimeoutSeconds) ?: $this->notificationTimeoutSeconds->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OCICallControlApplicationDescription)
             ? $description
             : new OCICallControlApplicationDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setMaxEventChannelsPerSet($maxEventChannelsPerSet = null)
    {
        $this->maxEventChannelsPerSet = ($maxEventChannelsPerSet InstanceOf EventNotificationChannelsPerSet)
             ? $maxEventChannelsPerSet
             : new EventNotificationChannelsPerSet($maxEventChannelsPerSet);
    }

    public function getMaxEventChannelsPerSet()
    {
        return (!$this->maxEventChannelsPerSet) ?: $this->maxEventChannelsPerSet->value();
    }
}
