<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add target(s) to a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingAddTargetListRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $serviceUserId  = null;
    protected $targetUserId   = null;

    public function __construct(
         $serviceUserId,
         $targetUserId = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setTargetUserId($targetUserId);
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

    public function setTargetUserId($targetUserId = null)
    {
        $this->targetUserId = ($targetUserId InstanceOf UserId)
             ? $targetUserId
             : new UserId($targetUserId);
    }

    public function getTargetUserId()
    {
        return (!$this->targetUserId) ?: $this->targetUserId->value();
    }
}
