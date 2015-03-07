<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Assign a bridge administrator to be a user's delegates.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyBridgeDelegatesRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $userId                     = null;
    protected $bridgeServiceUserId        = null;
    protected $bridgeDelegatesUserIdList  = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         ReplacementUserIdList $bridgeDelegatesUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setBridgeDelegatesUserIdList($bridgeDelegatesUserIdList);
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

    public function setBridgeDelegatesUserIdList(ReplacementUserIdList $bridgeDelegatesUserIdList = null)
    {
    }

    public function getBridgeDelegatesUserIdList()
    {
        return (!$this->bridgeDelegatesUserIdList) ?: $this->bridgeDelegatesUserIdList->value();
    }
}
