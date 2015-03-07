<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the originating permissions for Pinhole digit patterns for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $useCustomSettings  = null;
    protected $userPermissions    = null;

    public function __construct(
         $userId,
         $useCustomSettings = null,
         OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $userPermissions = null
    ) {
        $this->setUserId($userId);
        $this->setUseCustomSettings($useCustomSettings);
        $this->setUserPermissions($userPermissions);
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

    public function setUseCustomSettings(xs:boolean $useCustomSettings = null)
    {
    }

    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->value();
    }

    public function setUserPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $userPermissions = null)
    {
    }

    public function getUserPermissions()
    {
        return (!$this->userPermissions) ?: $this->userPermissions->value();
    }
}
