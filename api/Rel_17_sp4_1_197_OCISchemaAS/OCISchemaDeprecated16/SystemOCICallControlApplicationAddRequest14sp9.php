<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallApplicationNotificationTimeOutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallControlApplicationDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationAddRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemOCICallControlApplicationAddRequest14sp9';
    protected $applicationId;
    protected $enableSystemWide;
    protected $notificationTimeoutSeconds;
    protected $description;

    public function __construct(
         $applicationId = '',
         $enableSystemWide = '',
         $notificationTimeoutSeconds = '',
         $description = null
    ) {
        $this->setApplicationId($applicationId);
        $this->setEnableSystemWide($enableSystemWide);
        $this->setNotificationTimeoutSeconds($notificationTimeoutSeconds);
        $this->setDescription($description);
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
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId) ? $this->applicationId->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableSystemWide($enableSystemWide = null)
    {
        $this->enableSystemWide = new PrimitiveType($enableSystemWide);
        $this->enableSystemWide->setName('enableSystemWide');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSystemWide
     */
    public function getEnableSystemWide()
    {
        return ($this->enableSystemWide) ? $this->enableSystemWide->getValue() : null;
    }

    /**
     * 
     */
    public function setNotificationTimeoutSeconds($notificationTimeoutSeconds = null)
    {
        $this->notificationTimeoutSeconds = ($notificationTimeoutSeconds InstanceOf OCICallApplicationNotificationTimeOutSeconds)
             ? $notificationTimeoutSeconds
             : new OCICallApplicationNotificationTimeOutSeconds($notificationTimeoutSeconds);
        $this->notificationTimeoutSeconds->setName('notificationTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return OCICallApplicationNotificationTimeOutSeconds $notificationTimeoutSeconds
     */
    public function getNotificationTimeoutSeconds()
    {
        return ($this->notificationTimeoutSeconds) ? $this->notificationTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OCICallControlApplicationDescription)
             ? $description
             : new OCICallControlApplicationDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
