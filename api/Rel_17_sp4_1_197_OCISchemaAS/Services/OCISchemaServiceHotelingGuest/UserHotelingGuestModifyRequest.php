<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Hoteling Guest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingGuestModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'UserHotelingGuestModifyRequest';
    protected $userId                 = null;
    protected $isActive               = null;
    protected $enableAssociationLimit = null;
    protected $associationLimitHours  = null;
    protected $hostUserId             = null;

    public function __construct(
         $userId,
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setEnableAssociationLimit($enableAssociationLimit = null)
    {
        if (!$enableAssociationLimit) return $this;
        $this->enableAssociationLimit = new PrimitiveType($enableAssociationLimit);
        $this->enableAssociationLimit->setName('enableAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAssociationLimit
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit->getValue();
    }

    /**
     * 
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        if (!$associationLimitHours) return $this;
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
        $this->associationLimitHours->setName('associationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours $associationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours->getValue();
    }

    /**
     * 
     */
    public function setHostUserId($hostUserId = null)
    {
        if (!$hostUserId) return $this;
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
        $this->hostUserId->setName('hostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $hostUserId
     */
    public function getHostUserId()
    {
        return $this->hostUserId->getValue();
    }
}
