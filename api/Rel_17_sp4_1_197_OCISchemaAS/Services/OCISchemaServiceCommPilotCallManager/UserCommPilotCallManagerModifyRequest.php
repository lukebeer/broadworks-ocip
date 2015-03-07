<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotCallManager; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with CommPilot Call Manager.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotCallManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $userId         = null;
    protected $launchOnLogin  = null;

    public function __construct(
         $userId,
         $launchOnLogin = null
    ) {
        $this->setUserId($userId);
        $this->setLaunchOnLogin($launchOnLogin);
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

    public function setLaunchOnLogin(xs:boolean $launchOnLogin = null)
    {
    }

    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->value();
    }
}
