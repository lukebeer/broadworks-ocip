<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAdviceOfCharge; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user level data associated with Advice of Charge.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAdviceOfChargeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $userId   = null;
    protected $isActive = null;
    protected $aocType  = null;

    public function __construct(
         $userId,
         $isActive = null,
         $aocType = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAocType($aocType);
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
     * Choices for Advice of Charge Type.
     */
    public function setAocType($aocType = null)
    {
        $this->aocType = ($aocType InstanceOf AdviceOfChargeType)
             ? $aocType
             : new AdviceOfChargeType($aocType);
    }

    /**
     * Choices for Advice of Charge Type.
     */
    public function getAocType()
    {
        return (!$this->aocType) ?: $this->aocType->getValue();
    }
}