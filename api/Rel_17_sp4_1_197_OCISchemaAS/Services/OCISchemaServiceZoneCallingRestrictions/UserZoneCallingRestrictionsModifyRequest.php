<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceZoneCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the home zone for a user
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserZoneCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $homeZoneName=null
    ) {
        $this->userId       = new UserId($userId);
        $this->homeZoneName = new ZoneName($homeZoneName);
        $this->args         = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setHomeZoneName($homeZoneName)
    {
        $homeZoneName and $this->homeZoneName = new ZoneName($homeZoneName);
    }

    public function getHomeZoneName()
    {
        return (!$this->homeZoneName) ?: $this->homeZoneName->value();
    }
}
