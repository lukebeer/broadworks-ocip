<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Hoteling Guest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingGuestModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingGuestModifyRequest';
    protected $userId;
    protected $isActive;
    protected $enableAssociationLimit;
    protected $associationLimitHours;
    protected $hostUserId;

    public function __construct(
         $userId = '',
         $isActive = null,
         $enableAssociationLimit = null,
         $associationLimitHours = null,
         $hostUserId = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setEnableAssociationLimit($enableAssociationLimit);
        $this->setAssociationLimitHours($associationLimitHours);
        $this->setHostUserId($hostUserId);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAssociationLimit($enableAssociationLimit = null)
    {
        $this->enableAssociationLimit = new PrimitiveType($enableAssociationLimit);
        $this->enableAssociationLimit->setElementName('enableAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAssociationLimit
     */
    public function getEnableAssociationLimit()
    {
        return ($this->enableAssociationLimit)
            ? $this->enableAssociationLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
        $this->associationLimitHours->setElementName('associationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours $associationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return ($this->associationLimitHours)
            ? $this->associationLimitHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostUserId($hostUserId = null)
    {
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
        $this->hostUserId->setElementName('hostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $hostUserId
     */
    public function getHostUserId()
    {
        return ($this->hostUserId)
            ? $this->hostUserId->getElementValue()
            : null;
    }
}
