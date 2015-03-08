<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingNameDelivery; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user level data associated with Calling Name Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallingNameDeliveryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $userId                   = null;
    protected $isActiveForExternalCalls = null;
    protected $isActiveForInternalCalls = null;

    public function __construct(
         $userId,
         $isActiveForExternalCalls = null,
         $isActiveForInternalCalls = null
    ) {
        $this->setUserId($userId);
        $this->setIsActiveForExternalCalls($isActiveForExternalCalls);
        $this->setIsActiveForInternalCalls($isActiveForInternalCalls);
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
    public function setIsActiveForExternalCalls($isActiveForExternalCalls = null)
    {
        $this->isActiveForExternalCalls = (boolean) $isActiveForExternalCalls;
    }

    /**
     * 
     */
    public function getIsActiveForExternalCalls()
    {
        return (!$this->isActiveForExternalCalls) ?: $this->isActiveForExternalCalls->getValue();
    }

    /**
     * 
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls = null)
    {
        $this->isActiveForInternalCalls = (boolean) $isActiveForInternalCalls;
    }

    /**
     * 
     */
    public function getIsActiveForInternalCalls()
    {
        return (!$this->isActiveForInternalCalls) ?: $this->isActiveForInternalCalls->getValue();
    }
}
