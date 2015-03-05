<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingHost; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingHostAccessLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Hoteling Host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingHostModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $enforceAssociationLimit=null,
             $associationLimitHours=null,
             $accessLevel=null,
             $removeGuestAssociation=null
    ) {
        $this->userId                  = new UserId($userId);
        $this->isActive                = $isActive;
        $this->enforceAssociationLimit = $enforceAssociationLimit;
        $this->associationLimitHours   = new HotelingAssociationLimitHours($associationLimitHours);
        $this->accessLevel             = $accessLevel;
        $this->removeGuestAssociation  = $removeGuestAssociation;
        $this->args                    = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEnforceAssociationLimit($enforceAssociationLimit)
    {
        $enforceAssociationLimit and $this->enforceAssociationLimit = new xs:boolean($enforceAssociationLimit);
    }

    public function getEnforceAssociationLimit()
    {
        return (!$this->enforceAssociationLimit) ?: $this->enforceAssociationLimit->value();
    }

    public function setAssociationLimitHours($associationLimitHours)
    {
        $associationLimitHours and $this->associationLimitHours = new HotelingAssociationLimitHours($associationLimitHours);
    }

    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->value();
    }

    public function setAccessLevel($accessLevel)
    {
        $accessLevel and $this->accessLevel = new HotelingHostAccessLevel($accessLevel);
    }

    public function getAccessLevel()
    {
        return (!$this->accessLevel) ?: $this->accessLevel->value();
    }

    public function setRemoveGuestAssociation($removeGuestAssociation)
    {
        $removeGuestAssociation and $this->removeGuestAssociation = new xs:boolean($removeGuestAssociation);
    }

    public function getRemoveGuestAssociation()
    {
        return (!$this->removeGuestAssociation) ?: $this->removeGuestAssociation->value();
    }
}
