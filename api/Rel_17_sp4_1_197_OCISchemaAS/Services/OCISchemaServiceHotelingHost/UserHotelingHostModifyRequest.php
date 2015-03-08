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
    public    $name                    = __CLASS__;
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit = null)
    {
        $this->enforceAssociationLimit = (boolean) $enforceAssociationLimit;
    }

    /**
     * 
     */
    public function getEnforceAssociationLimit()
    {
        return (!$this->enforceAssociationLimit) ?: $this->enforceAssociationLimit->getValue();
    }

    /**
     * Maximum time limit for hoteling guests association to hoteling hosts
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
    }

    /**
     * Maximum time limit for hoteling guests association to hoteling hosts
     */
    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->getValue();
    }

    /**
     * Access level of the Hoteling Host Service
     */
    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
    }

    /**
     * Access level of the Hoteling Host Service
     */
    public function getAccessLevel()
    {
        return (!$this->accessLevel) ?: $this->accessLevel->getValue();
    }

    /**
     * 
     */
    public function setRemoveGuestAssociation($removeGuestAssociation = null)
    {
        $this->removeGuestAssociation = (boolean) $removeGuestAssociation;
    }

    /**
     * 
     */
    public function getRemoveGuestAssociation()
    {
        return (!$this->removeGuestAssociation) ?: $this->removeGuestAssociation->getValue();
    }
}
