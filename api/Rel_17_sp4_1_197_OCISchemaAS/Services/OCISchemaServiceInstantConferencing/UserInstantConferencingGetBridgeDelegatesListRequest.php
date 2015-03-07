<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of delegates of a bridge administrator.
 *         The response is either UserInstantConferencingGetBridgeDelegatesListResponse or ErrorResponse.
 */
class UserInstantConferencingGetBridgeDelegatesListRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $bridgeServiceUserId  = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
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

    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }
}
