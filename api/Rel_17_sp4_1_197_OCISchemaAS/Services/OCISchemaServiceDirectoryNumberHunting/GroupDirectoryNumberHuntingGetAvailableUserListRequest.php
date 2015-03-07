<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDirectoryNumberHunting; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the agents of a call center or hunt group that are available
 *         to be assigned to a directory number hunting group.  They are agents that
 *         are not already assigned to any other directory number hunting group.
 *         The response is either
 *         GroupDirectoryNumberHuntingGetAvailableUserListResponse or ErrorResponse.
 */
class GroupDirectoryNumberHuntingGetAvailableUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $serviceUserId  = null;

    public function __construct(
         $serviceUserId
    ) {
        $this->setServiceUserId($serviceUserId);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }
}
