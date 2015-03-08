<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the redirecting permissions for Pinhole digit patterns for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanPinholeDigitPlanRedirectingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $userId            = null;
    protected $useCustomSettings = null;
    protected $userPermissions   = null;

    public function __construct(
         $userId,
         $useCustomSettings = null,
         OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $userPermissions = null
    ) {
        $this->setUserId($userId);
        $this->setUseCustomSettings($useCustomSettings);
        $this->setUserPermissions($userPermissions);
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
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = (boolean) $useCustomSettings;
    }

    /**
     * 
     */
    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->getValue();
    }

    /**
     * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
     */
    public function setUserPermissions(OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $userPermissions = null)
    {
        $this->userPermissions = OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $userPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
     */
    public function getUserPermissions()
    {
        return (!$this->userPermissions) ?: $this->userPermissions->getValue();
    }
}
