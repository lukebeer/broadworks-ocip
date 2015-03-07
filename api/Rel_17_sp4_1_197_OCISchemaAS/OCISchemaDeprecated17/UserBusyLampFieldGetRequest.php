<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the settings for the busy lamp field service.
 *         The response is either a UserBusyLampFieldGetResponse or an ErrorResponse.
 *         
 *         Replaced by: UserBusyLampFieldGetRequest16sp2
 */
class UserBusyLampFieldGetRequest extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $userId  = null;

    public function __construct(
         $userId
    ) {
        $this->setUserId($userId);
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
}
