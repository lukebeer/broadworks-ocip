<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Hoteling Host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingHostModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'UserHotelingHostModifyRequest';
    protected $userId                  = null;
    protected $isActive                = null;
    protected $enforceAssociationLimit = null;
    protected $associationLimitHours   = null;
    protected $accessLevel             = null;
    protected $removeGuestAssociation  = null;

    public function __construct(
         $userId,
         $isActive = null,
         $enforceAssociationLimit = null,
         $associationLimitHours = null,
         $accessLevel = null,
         $removeGuestAssociation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setEnforceAssociationLimit($enforceAssociationLimit);
        $this->setAssociationLimitHours($associationLimitHours);
        $this->setAccessLevel($accessLevel);
        $this->setRemoveGuestAssociation($removeGuestAssociation);
    }

    /**
     * @return 
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
     * @return UserId
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
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit = null)
    {
        if (!$enforceAssociationLimit) return $this;
        $this->enforceAssociationLimit = new PrimitiveType($enforceAssociationLimit);
        $this->enforceAssociationLimit->setName('enforceAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit->getValue();
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
     * @return HotelingAssociationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours->getValue();
    }

    /**
     * 
     */
    public function setAccessLevel($accessLevel = null)
    {
        if (!$accessLevel) return $this;
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
        $this->accessLevel->setName('accessLevel');
        return $this;
    }

    /**
     * 
     * @return HotelingHostAccessLevel
     */
    public function getAccessLevel()
    {
        return $this->accessLevel->getValue();
    }

    /**
     * 
     */
    public function setRemoveGuestAssociation($removeGuestAssociation = null)
    {
        if (!$removeGuestAssociation) return $this;
        $this->removeGuestAssociation = new PrimitiveType($removeGuestAssociation);
        $this->removeGuestAssociation->setName('removeGuestAssociation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRemoveGuestAssociation()
    {
        return $this->removeGuestAssociation->getValue();
    }
}
