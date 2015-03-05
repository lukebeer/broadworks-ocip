<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterCurrentAndPastCallCenterGetListRequest.
 */
class GroupCallCenterCurrentAndPastCallCenterGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId=null,
             $deletedServiceUserId=null
    ) {
        $this->serviceUserId        = new UserId($serviceUserId);
        $this->deletedServiceUserId = new UserId($deletedServiceUserId);
        $this->args                 = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setDeletedServiceUserId($deletedServiceUserId)
    {
        $deletedServiceUserId and $this->deletedServiceUserId = new UserId($deletedServiceUserId);
    }

    public function getDeletedServiceUserId()
    {
        return (!$this->deletedServiceUserId) ?: $this->deletedServiceUserId->value();
    }
}
