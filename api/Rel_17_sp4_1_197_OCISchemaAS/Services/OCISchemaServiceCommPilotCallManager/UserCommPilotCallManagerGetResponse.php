<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotCallManager; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCommPilotCallManagerGetRequest.
 */
class UserCommPilotCallManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $launchOnLogin
    ) {
        $this->launchOnLogin = $launchOnLogin;
        $this->args          = func_get_args();
    }

    public function setLaunchOnLogin($launchOnLogin)
    {
        $launchOnLogin and $this->launchOnLogin = new xs:boolean($launchOnLogin);
    }

    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->value();
    }
}
