<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingHost; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Hoteling Host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingHostModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $userId                   = null;
    protected $isActive                 = null;
    protected $enforceAssociationLimit  = null;
    protected $associationLimitHours    = null;
    protected $accessLevel              = null;
    protected $removeGuestAssociation   = null;

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

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEnforceAssociationLimit(xs:boolean $enforceAssociationLimit = null)
    {
    }

    public function getEnforceAssociationLimit()
    {
        return (!$this->enforceAssociationLimit) ?: $this->enforceAssociationLimit->value();
    }

    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
    }

    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->value();
    }

    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
    }

    public function getAccessLevel()
    {
        return (!$this->accessLevel) ?: $this->accessLevel->value();
    }

    public function setRemoveGuestAssociation(xs:boolean $removeGuestAssociation = null)
    {
    }

    public function getRemoveGuestAssociation()
    {
        return (!$this->removeGuestAssociation) ?: $this->removeGuestAssociation->value();
    }
}
