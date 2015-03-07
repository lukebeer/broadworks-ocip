<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceZoneCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the home zone for a user
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserZoneCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $userId        = null;
    protected $homeZoneName  = null;

    public function __construct(
         $userId,
         $homeZoneName = null
    ) {
        $this->setUserId($userId);
        $this->setHomeZoneName($homeZoneName);
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

    public function setHomeZoneName($homeZoneName = null)
    {
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
    }

    public function getHomeZoneName()
    {
        return (!$this->homeZoneName) ?: $this->homeZoneName->value();
    }
}
