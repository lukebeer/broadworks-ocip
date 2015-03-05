<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDualModeVCC; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DualModeVCCSubscriberUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DualModeVCCSubscriberPassword;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the user level IN Integration service attributes
 *         Response is either UserINIntegrationGetResponse or ErrorResponse
 */
class UserDualModeVCCModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $subscriberUserName=null,
             $subscriberPassword=null
    ) {
        $this->userId             = new UserId($userId);
        $this->subscriberUserName = $subscriberUserName;
        $this->subscriberPassword = new DualModeVCCSubscriberPassword($subscriberPassword);
        $this->args               = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setSubscriberUserName($subscriberUserName)
    {
        $subscriberUserName and $this->subscriberUserName = new DualModeVCCSubscriberUserName($subscriberUserName);
    }

    public function getSubscriberUserName()
    {
        return (!$this->subscriberUserName) ?: $this->subscriberUserName->value();
    }

    public function setSubscriberPassword($subscriberPassword)
    {
        $subscriberPassword and $this->subscriberPassword = new DualModeVCCSubscriberPassword($subscriberPassword);
    }

    public function getSubscriberPassword()
    {
        return (!$this->subscriberPassword) ?: $this->subscriberPassword->value();
    }
}
