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
 * Response to the EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest.
 */
class EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $serviceUserId         = null;
    protected $deletedServiceUserId  = null;


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

    public function setDeletedServiceUserId($deletedServiceUserId = null)
    {
        $this->deletedServiceUserId = ($deletedServiceUserId InstanceOf UserId)
             ? $deletedServiceUserId
             : new UserId($deletedServiceUserId);
    }

    public function getDeletedServiceUserId()
    {
        return (!$this->deletedServiceUserId) ?: $this->deletedServiceUserId->value();
    }
}
