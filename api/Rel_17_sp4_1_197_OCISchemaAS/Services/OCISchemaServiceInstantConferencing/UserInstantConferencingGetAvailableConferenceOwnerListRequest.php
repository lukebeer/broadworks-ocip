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
 * Get the list of users who could are eligible to be owner of a conference.
 *         Returns a list of instant conferencing bridges and the possible conference owners for
 *         the bridges owned by the user or the user is delegated to.
 *         The response is either UserInstantConferencingGetAvailableConferenceOwnerListResponse or ErrorResponse.
 *         It is possible to get the list of possible conference owners for one conferencing bridge.
 *         If the bridgeServiceUserId is specified, only the possible conference owners for that bridge
 *         are returned, otherwise the possible conference owners of all bridges are returned.
 */
class UserInstantConferencingGetAvailableConferenceOwnerListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $bridgeServiceUserId=null
    ) {
        $this->userId              = new UserId($userId);
        $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
        $this->args                = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId)
    {
        $bridgeServiceUserId and $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }
}
